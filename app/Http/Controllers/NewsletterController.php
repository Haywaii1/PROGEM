<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber;
use App\Mail\NewsletterConfirmation;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ]);

        // Save subscriber
        NewsletterSubscriber::create($validated);

        // Prepare data
        $data = ['email' => $validated['email']];

        // Send confirmation to subscriber
        Mail::to($validated['email'])->send(new NewsletterConfirmation($data));

        // Send notification to admin
        Mail::to('progemhubconsulting@gmail.com')->send(new NewsletterConfirmation($data));

        return back()->with('success', 'Thank you for subscribing!');
    }
}
