<x-mail::message>
# Introduction

There are new message for you from <strong>{{ $name }}</strong> by web app. <br>
<strong>Message:</strong>
    {{ $message }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
