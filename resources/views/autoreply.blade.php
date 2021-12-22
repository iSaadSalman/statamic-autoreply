@component('mail::layout')
{{-- Header --}}
@slot('header')
    @component('mail::header', ['url' => config('app.url')])
        <img style="display: block;width: 100px;margin: 0 auto;" src="{{ asset('images/logo2.png') }}" alt="Logo">
        <p>{{ config('app.name') }}</p>
    @endcomponent
@endslot

{{-- Body --}}
Hi,

<p>Your request <strong>{{ $submitionNumber }}</strong> has been received.</p>

<br>
<br>
--
<br>
<br>
Your email detail: 
<br>
@foreach ($body as $key => $value)
<strong>{!! $key !!}</strong> : {!! $value  !!}<br/>
@endforeach

{{-- Subcopy --}}
@isset($subcopy)
    @slot('subcopy')
        @component('mail::subcopy')
            {{ $subcopy }}
        @endcomponent
    @endslot
@endisset

{{-- Footer --}}
@slot('footer')
    @component('mail::footer')
        &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
    @endcomponent
@endslot
@endcomponent
