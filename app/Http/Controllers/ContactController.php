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
            'email' => 'nullable|email|max:255',
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
            $settings = \App\Models\SiteSetting::where('group', 'mail')->orWhere('key', 'contact_form_email')->get()->pluck('value', 'key');

            $adminEmail = $settings['contact_form_email'] ?? env('ADMIN_EMAIL', 'info@mgfoodevent.com');

            // Dynamic SMTP configuration
            config([
                'mail.mailers.smtp.host' => $settings['mail_host'] ?? env('MAIL_HOST'),
                'mail.mailers.smtp.port' => $settings['mail_port'] ?? env('MAIL_PORT'),
                'mail.mailers.smtp.username' => $settings['mail_username'] ?? env('MAIL_USERNAME'),
                'mail.mailers.smtp.password' => $settings['mail_password'] ?? env('MAIL_PASSWORD'),
                'mail.mailers.smtp.encryption' => $settings['mail_encryption'] ?? env('MAIL_ENCRYPTION'),
                'mail.from.address' => $settings['mail_from_address'] ?? env('MAIL_FROM_ADDRESS'),
                'mail.from.name' => $settings['mail_from_name'] ?? env('MAIL_FROM_NAME'),
            ]);

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
