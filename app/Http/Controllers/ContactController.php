<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Mail\ContactMessage as ContactMessageMail;
use App\Mail\ContactConfirmation;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('pages.contact');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Save to database
        ContactMessage::create($validated);

        // Send admin notification
        Mail::to('progemhubconsulting@gmail.com')->send(new ContactMessageMail($validated));

        // Send confirmation to user
        Mail::to($validated['email'])->send(new ContactConfirmation($validated));

        return back()->with('success', 'Message sent successfully!');
    }
}
