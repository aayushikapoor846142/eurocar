@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
{{ config('app.name') }}
@endcomponent
@endslot

# New Contact Form Submission

You have received a new message from the contact form on your website.

## Contact Details
- **Name:** {{ $contact->first_name }} {{ $contact->last_name }}
- **Email:** [{{ $contact->email }}](mailto:{{ $contact->email }})
- **Phone:** {{ $contact->phone }}
- **Submitted At:** {{ $contact->created_at->format('F j, Y, g:i a') }}

## Message
{{ $contact->message }}

@component('mail::button', ['url' => route('admin.contacts.show', $contact)])
View Message in Admin Panel
@endcomponent

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
@endcomponent
@endslot
@endcomponent
