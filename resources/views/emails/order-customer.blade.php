@component('mail::message')
Hello {{ $user['name'] }}

You Have Created A new Package

Your email: {{ $user['email'] }}

ThankYou

@endcomponent