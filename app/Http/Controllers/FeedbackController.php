<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;


class FeedbackController extends Controller
{

    //...

    public function storeFeedback(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'feedback' => 'required|string',
        ]);

        // Create a new feedback entry
        Feedback::create([
            'name'=>$validatedData['name'],
            'email'=>$validatedData['email'],
            'feedback'=>$validatedData['feedback']
        ]);


        return redirect()->back()->with('message', 'Thank you for your feedback!');
    }

}
