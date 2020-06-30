@extends('layouts.app')

@section('content')
    <div class="bg-gray-100 font-sans">

        @include('layouts/headline', ["headline" => "Privacy Policy", "tagline" => "This page informs you of our policies regarding the collection, use and disclosure of personal information we receive from users of our website."])


        <div class="md:mt-24 mb-16 max-w-screen-xl mx-auto px-6">
            <div>
                <h2 class="text-2xl font-bold text-blue-600">Log Data</h2>
                <p class="text-gray-600 mt-2 leading-relaxed">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p>
            </div>
            <div class="mt-10">
                <h2 class="text-2xl font-bold text-blue-600">Cookies</h2>
                <p class="text-gray-600 mt-2 leading-relaxed">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>

    </div>
@endsection
