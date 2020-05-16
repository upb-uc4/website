@extends('layouts.app')

@section('content')
    <div class="w-full bg-gray-100">

        @include('layouts.headline', ["headline" => "Frequently Asked Questions", "tagline" => "Find answers to recurring questions about UC4."])

        <div class="md:mt-24 max-w-screen-xl mx-auto px-6">
            <div class="md:flex">
                <div class="hidden md:block w-full md:w-1/3 mr-8 lg:mr-0 md:self-start md:sticky md:top-0 pt-5">
                    <ul class="text-xl font-semibold tracking-tight ml-8">
                        <li class=""><a href="#general">General</a></li>
                        <li class="mt-6"><a href="#technologies">Technologies</a></li>
                        <li class="mt-6"><a href="#security">Security</a></li>
                    </ul>
                </div>

                <div class="w-full md:w-2/3 md:pl-16 p-8 pt-0 md:border-l border-gray-400">
                    @include('faq.components.category', ['title' => 'General'])
                    @include('faq.components.category', ['title' => 'Technologies'])
                    @include('faq.components.category', ['title' => 'Security'])
                </div>
            </div>
        </div>
    </div>







@endsection
