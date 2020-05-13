@extends('layouts.app')

@section('content')
    <div class="h-screen font-sans">

        <div class="mb-4 mt-8 mx-auto">
            <h1 class="text-4xl text-gray-800 text-center font-extrabold">Meet the Team</h1>
        </div>

        <div class="w-1/2 mb-12 mx-auto">
            <p class="text-gray-800 text-lg text-center font-medium">
                This is us, the team behind UC4. We are a group of passionate Master's students at the Paderborn University who work hard to make your everyday life at campus more simple.
            </p>
        </div>

        <div class="flex justify-center">
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
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
