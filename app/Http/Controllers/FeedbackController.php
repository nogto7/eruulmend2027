<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'phone' => 'required|string',
            'email' => 'required|email|unique:feedback,email',
            'feedback_type' => 'required|string',
            'message' => 'required',
        ]);

        Feedback::create($request->all());

        return redirect('/')->with('toast', ['type' => 'success', 'message' => 'Таны саналыг амжилттай илгээлээ!']);
    }

    public function stats()
    {
        $feedbackCounts = Feedback::select('feedback_type')
        ->selectRaw('COUNT(*) as total')
        ->groupBy('feedback_type')
        ->pluck('total', 'feedback_type');

        return view('index', compact('feedbackCounts'));
    }
}
