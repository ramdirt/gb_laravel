<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreFeedbackRequest;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('forms.feedback.create');
    }

    public function store(StoreFeedbackRequest $request)
    {

        $validate = $request->validated();
        $feedback = new Feedback($validate);

        if ($feedback->save()) {
            return redirect()->route('home')
                ->with('success', 'Данные отправлены');
        }

        return back()->with('error', 'Ошибка добавления');
    }
}