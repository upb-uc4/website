@extends('layouts.app')

@section('content')
    <div class="h-full bg-gray-100 font-sans">

        @include('layouts/headline', ["headline" => "Meet the Team", "tagline" => "This is us, the team behind UC4. We are a group of passionate Master's students at the Paderborn University who work hard to make your everyday life at campus more simple."])


        <div class="flex mt-24 justify-center">
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12">
                @for ($i = 0; $i < 4; $i++)
                    <avatar name="Jon" lastname="Doe" title="Supervisor"></avatar>
                    <avatar name="Jim" lastname="Panse" title="Technical Manager"></avatar>
                    <avatar name="Volker" lastname="Putt" title="Hyperledger Engineer"></avatar>
                    <avatar name="Lassmiranda" lastname="DeSiwillja" title="Frontend Developer"></avatar>
                @endfor
            </div>
        </div>
    </div>
@endsection
