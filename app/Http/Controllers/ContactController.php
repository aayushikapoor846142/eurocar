<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    /**
     * Display a listing of the contact messages (Admin)
     */
    public function index()
    {
        $messages = Contact::latest()->paginate(10);
        return view('admin.contacts.index', compact('messages'));
    }

    /**
     * Show the contact form
     */
    public function create()
    {
        return view('frontend.pages.contact');
    }

    /**
     * Store a newly created contact message
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|min:10',
        ]);

        // Create the contact message
        $contact = Contact::create($validated);

        // Send email notification
        try {
            Mail::to('info@europecactransfer.com')->send(new ContactFormSubmitted($contact));
        } catch (\Exception $e) {
            \Log::error('Failed to send contact email: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }

    /**
     * Display the specified contact message (Admin)
     */
    public function show(Contact $contact)
    {
        // Mark as read when viewed
        if (!$contact->is_read) {
            $contact->markAsRead();
        }
        
        return view('admin.contacts.show', compact('contact'));
    }

    /**
     * Remove the specified message from storage (Admin)
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts.index')
            ->with('success', 'Message deleted successfully');
    }
    
    /**
     * Mark a message as read (Admin)
     */
    public function markAsRead(Contact $contact)
    {
        $contact->markAsRead();
        return response()->json(['success' => true]);
    }
}
