@extends('layouts.app')

@section('content')
    <div class="w-full h-full bg-gray-100">

        @include('layouts/headline', ["headline" => "Frequently Asked Questions", "tagline" => "Find answers to recurring questions about UC4."])

        <div class="max-w-screen-xl mx-auto px-6">
            <div class="mt-32 flex">
                <div class="w-1/3 mr-8 lg:mr-0">
                    <ul class="text-xl font-semibold tracking-tight ml-8">
                        <li class=""><a href="#general">General</a></li>
                        <li class="mt-6"><a href="#technologies">Technologies</a></li>
                        <li class="mt-6"><a href="#security">Security</a></li>
                    </ul>
                </div>

                <div class="w-2/3 pl-16 p-8 border-l border-gray-400">
                    <!-- first section -->
                    <div class="">
                        <h2 class="text-2xl font-bold text-blue-600">General</h2>
                        <h3 class="text-xl font-semibold text-gray-800 mt-6">First Question in General?</h3>
                        <p class="text-gray-600 mt-2 leading-relaxed">
                            Bitcoin ist ein konsensorientiertes Netzwerk, welches ein neues Zahlungssystem und vollständig digitales Geld möglich macht.
                            Es ist das erste dezentralisierte Peer-to-Peer Zahlungsnetzwerk, das nur von den Nutzern und ohne zentrale Autorität
                            oder Vermittler betrieben wird
                        </p>

                        <h3 class="text-xl font-semibold text-gray-800 mt-6 leading-relaxed">Second Question in General?</h3>
                        <p class="text-gray-600 mt-2">
                            Bitcoin ist ein konsensorientiertes Netzwerk, welches ein neues Zahlungssystem und vollständig digitales Geld möglich macht.
                            Es ist das erste dezentralisierte Peer-to-Peer Zahlungsnetzwerk, das nur von den Nutzern und ohne zentrale Autorität
                            oder Vermittler betrieben wird
                        </p>

                    </div>

                    <!-- second section -->
                    <div class="mt-12">
                        <h2 class="text-2xl font-bold text-blue-600">Technologies</h2>
                        <h3 class="text-xl font-semibold text-gray-800 mt-6">Which technologies does UC4 use?</h3>
                        <p class="text-gray-600 mt-2 leading-relaxed">
                            Bitcoin ist ein konsensorientiertes Netzwerk, welches ein neues Zahlungssystem und vollständig digitales Geld möglich macht.
                            Es ist das erste dezentralisierte Peer-to-Peer Zahlungsnetzwerk, das nur von den Nutzern und ohne zentrale Autorität
                            oder Vermittler betrieben wird
                        </p>

                        <h3 class="text-xl font-semibold text-gray-800 mt-6 leading-relaxed">Second Question in Technologies?</h3>
                        <p class="text-gray-600 mt-2">
                            Bitcoin ist ein konsensorientiertes Netzwerk, welches ein neues Zahlungssystem und vollständig digitales Geld möglich macht.
                        </p>
                    </div>

                    <!-- second section -->
                    <div class="mt-12">
                        <h2 class="text-2xl font-bold text-blue-600">Security</h2>
                        <h3 class="text-xl font-semibold text-gray-800 mt-6">Is it secure?</h3>
                        <p class="text-gray-600 mt-2 leading-relaxed">
                            Bitcoin ist ein konsensorientiertes Netzwerk, welches ein neues Zahlungssystem und vollständig digitales Geld möglich macht.
                            Es ist das erste dezentralisierte Peer-to-Peer Zahlungsnetzwerk, das nur von den Nutzern und ohne zentrale Autorität.
                        </p>

                    </div>



                </div>
            </div>
        </div>
    </div>







@endsection
