<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('forms.feedback.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'feedback' => 'required',
        ]);

        $validate = $request->only('name', 'feedback');
        $feedback = new Feedback($validate);

        if ($feedback->save()) {
            return redirect()->route('home')->with('success', 'Данные отправлены');
        }

        return back()->with('error', 'Ошибка добавления');
    }
}