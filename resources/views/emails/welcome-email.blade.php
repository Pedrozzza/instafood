@component('mail::message')
# Welcome to InstaFood

It is a place for everyone who loves food!

@component('mail::button', ['url' => ''])
Veryfi
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
