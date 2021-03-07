@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@endif

{{-- order details --}}
<ul>
    @foreach ($order_details as $key => $value)
    <li><b>{{ $key }} : </b>{{$value}}</li> 
    @endforeach
</ul>


{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
<br>@lang('Regards'),<br>
{{ config('app.name') }}
@else
@lang('Regards'),<br>
{{ config('app.name') }}
@endif


@endcomponent
