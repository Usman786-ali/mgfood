<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use App\Models\EventType;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index()
    {
        $submissions = ContactSubmission::latest()->paginate(20);
        $eventTypes = EventType::orderBy('order')->get();

        return view('admin.contact-form.index', compact('submissions', 'eventTypes'));
    }

    public function show(ContactSubmission $submission)
    {
        // Mark as read
        if ($submission->status === 'new') {
            $submission->update(['status' => 'read']);
        }

        return view('admin.contact-form.show', compact('submission'));
    }

    public function destroy(ContactSubmission $submission)
    {
        $submission->delete();
        return redirect()->route('admin.contact-form.index')
            ->with('success', 'Submission deleted successfully!');
    }

    // Event Types Management
    public function eventTypes()
    {
        $eventTypes = EventType::orderBy('order')->get();
        return view('admin.contact-form.event-types', compact('eventTypes'));
    }

    public function storeEventType(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:event_types,name',
            'order' => 'nullable|integer',
            'is_active' => 'boolean'
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['order'] = $validated['order'] ?? EventType::max('order') + 1;

        EventType::create($validated);

        return redirect()->route('admin.contact-form.event-types')
            ->with('success', 'Event type created successfully!');
    }

    public function updateEventType(Request $request, EventType $eventType)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:event_types,name,' . $eventType->id,
            'order' => 'nullable|integer',
            'is_active' => 'boolean'
        ]);

        $validated['is_active'] = $request->has('is_active');
        $eventType->update($validated);

        return redirect()->route('admin.contact-form.event-types')
            ->with('success', 'Event type updated successfully!');
    }

    public function destroyEventType(EventType $eventType)
    {
        $eventType->delete();
        return redirect()->route('admin.contact-form.event-types')
            ->with('success', 'Event type deleted successfully!');
    }
}
