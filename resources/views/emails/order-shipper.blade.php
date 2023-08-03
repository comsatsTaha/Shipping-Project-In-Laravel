@component('mail::message')
Hello

You Have Got A new Package By:

Customer Details:<br>
Name:  {{ $user['name'] }}<br>
Email: {{ $user['email'] }}<br>
Phone Number : {{ $user['phone_no'] }}<br>

ThankYou

@endcomponent