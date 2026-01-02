<?php

namespace App\Http\Controllers;
use App\Models\News;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::where('is_active', true)
            ->latest()
            ->paginate(6);

        return view('news.index', compact('news'));
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->where('is_active', true)->firstOrFail();
        return view('news.detail', compact('news'));
    }
}

