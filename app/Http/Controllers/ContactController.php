<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'event_type' => 'nullable|string|max:255',
            'event_date' => 'nullable|date',
            'budget' => 'nullable|string|max:255',
            'message' => 'nullable|string'
        ]);

        // Save to database
        $submission = ContactSubmission::create($validated);

        // Send email notification
        try {
            $adminEmail = env('ADMIN_EMAIL', 'info@mgfoodevent.com');

            Mail::send('emails.contact-notification', ['submission' => $submission], function ($message) use ($adminEmail, $submission) {
                $message->to($adminEmail)
                    ->subject('New Contact Form Submission - ' . $submission->name);
            });
        } catch (\Exception $e) {
            // Log error but don't fail the submission
            \Log::error('Failed to send contact email: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
