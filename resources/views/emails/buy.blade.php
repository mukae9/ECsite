@component('mail::message')

@php
    $collection[] ='米';
    $collection[] ='酒';
@endphp

@foreach ($collection as $item)

{{ $item }}を買った。

@endforeach

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
