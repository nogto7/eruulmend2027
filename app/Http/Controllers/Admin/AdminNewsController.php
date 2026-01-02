<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\News;
use Illuminate\Support\Str;

class AdminNewsController extends Controller
{
    public function index()
    {
        return view('admin.news.index', [
            'news' => News::latest()->get()
        ]);
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'excerpt' => 'nullable',
            'content' => 'required',
            'images' => 'nullable|images',
        ]);

        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('images')) {
            $data['images'] = $request->file('images')->store('news', 'public');
        }

        News::create($data);

        return redirect()->route('admin.news.index');
    }


    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {

            $file = $request->file('upload');
            $filename = time().'_'.$file->getClientOriginalName();

            $file->move(public_path('uploads/news'), $filename);

            return response()->json([
                "uploaded" => true,
                "url" => asset('uploads/news/'.$filename)
            ]);
        }

        return response()->json([
            "uploaded" => false,
            "error" => [
                "message" => "File not uploaded"
            ]
        ]);
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $data = $request->validate([
            'title' => 'required',
            'excerpt' => 'nullable',
            'content' => 'required',
            'images' => 'nullable|images',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('images')) {
            $data['images'] = $request->file('images')->store('news', 'public');
        }

        $news->update($data);

        return back();
    }

    public function destroy(News $news)
    {
        $news->delete();
        return back();
    }
}
