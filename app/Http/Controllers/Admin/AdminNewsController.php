<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AdminNewsController extends Controller
{
    public function index()
    {
        $newsList = DB::table('news as n')->select('n.*')->paginate(15);
        return view('admin.news.index', compact('newsList'));
    }

    public function create()
    {
        return view('admin.news.create', ['create' => News::latest()->get()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'excerpt' => 'nullable',
            'content' => 'required',
            'image' => 'nullable|image',
        ]);

        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('news', 'public');
        }

        News::create($data);

        return redirect()->route('admin.news.create');
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
            'image' => 'nullable|image',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('news', 'public');
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
