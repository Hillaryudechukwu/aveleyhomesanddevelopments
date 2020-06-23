@component('mail::message')
# Introduction

# Name: {{$data['name']}}
From: {{$data['email']}}
<p>{{$data['message']}}</p>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
