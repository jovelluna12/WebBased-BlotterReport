@component('mail::message')
Greetings, {{$name}}. <br>
an Assessor have Asked to Update your Report. <br>
with an ID of {{$id}} <br>
<br>
This is what the Assessor said: <br>
{{$update}} <br>
Go to your Profile to know more <br>
@endcomponent 