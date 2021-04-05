@component('mail::message')
Name:

{{$SenderName}}

Email :

{{$SenderEmail}}

Message :

{{$SenderMsg}}

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
