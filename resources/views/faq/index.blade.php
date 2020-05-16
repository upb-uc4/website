@extends('layouts.app')

@section('content')
    <div class="w-full h-full bg-gray-100">

        @include('layouts.headline', ["headline" => "Frequently Asked Questions", "tagline" => "Find answers to recurring questions about UC4."])

        <div class="max-w-screen-xl mx-auto px-6">
            <div class="mt-32 flex">
                <div class="w-1/3 mr-8 lg:mr-0 self-start sticky top-0 pt-5">
                    <ul class="text-xl font-semibold tracking-tight ml-8">
                        <li class=""><a href="#general">General</a></li>
                        <li class="mt-6"><a href="#technologies">Technologies</a></li>
                        <li class="mt-6"><a href="#security">Security</a></li>
                    </ul>
                </div>

                <div class="w-2/3 pl-16 p-8 pt-0 border-l border-gray-400">
                    @include('faq/components/section', ['title' => 'General'])
                    @include('faq/components/section', ['title' => 'Technologies'])
                    @include('faq/components/section', ['title' => 'Security'])
                </div>
            </div>
        </div>
    </div>







@endsection
