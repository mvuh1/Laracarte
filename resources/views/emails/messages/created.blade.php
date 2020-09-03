@component('mail::message')
# Hi! Nazir

- {{ $msg->name }}
- {{ $msg->email }}

@component('mail::panel')
{{ $msg->message }}
@endcomponent

Thanks, {{ config('app.name') }}
@endcomponent
