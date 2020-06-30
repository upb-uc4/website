@extends('layouts.app')

@section('content')
    <div class="w-full bg-gray-100">

        @include('layouts.headline', ["headline" => "Frequently Asked Questions", "tagline" => "Find answers to recurring questions about UC4."])

        <div class="md:mt-24 max-w-screen-xl mx-auto px-6">
            <div class="md:flex">
                <div class="hidden md:block w-full md:w-1/3 mr-8 lg:mr-0 md:self-start md:sticky md:top-0 pt-5">
                    <ul class="text-xl font-semibold tracking-tight ml-8">
                        @foreach($categories as $category)
                            <li @unless($loop->first)class="mt-6"@endunless><a href="#{{ $category->slug }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="w-full md:w-2/3 md:pl-16 p-8 pt-0 md:border-l border-gray-400">
                    @foreach($categories as $category)
                        @include('faq.components.category', ['category' => $category])
                    @endforeach
                </div>
            </div>
        </div>
    </div>







@endsection
