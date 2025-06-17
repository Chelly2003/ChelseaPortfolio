<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;     // Import Mail facade
use App\Mail\ContactMail;                 // Import your mailable

class EmailController extends Controller
{

        public function send(Request $request)
    {
        
        // Validate the form input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Prepare the $details array, mapping 'message' to 'message_body'
        $details = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message_body' => $request->input('message'),
        ];
// Debug the $details array

        // Send the email
        try {
            Mail::to('recipient@example.com')->send(new ContactMail($details));
            return redirect()->back()->with('success', 'Message sent successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to send message: ' . $e->getMessage());
        }
    }
}
