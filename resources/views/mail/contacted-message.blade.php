@component('mail::message')
# Hi, There

Someone contacted you with this message:

"{{ $message }}"

Maybe, you want to get in touch, using this shared email: {{ $email }}

@endcomponent
