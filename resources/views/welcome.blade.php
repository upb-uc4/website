@extends('layouts.app')

@section('content')
    <div class="h-full h-screen bg-gray-100 font-sans">
        <div class="md:flex w-full max-w-screen-xl mx-auto px-6">
            <div class="md:w-1/2">
                <div class="md:mt-24">
                    <h1 class="text-5xl font-extrabold text-gray-900">Engage with your peers</h1>
                </div>

                <div class="mt-4">
                    <p class="font-medium text-lg text-gray-600 tracking-widest leading-loose">Connect with like-minded individuals and have meaningful discussions. Some more information here...</p>
                </div>

                <div class="mt-12">
                    <a href="/about/people" class="w-1/3 bg-blue-500 focus:outline-none text-white font-semibold tracking-widest py-4 px-4 uppercase rounded-lg focus:shadow-outline">
                        Learn more
                    </a>
                </div>

            </div>

            <div class="md:w-1/2">
                <img src="{{asset('/img/network.svg')}}" class="md:mt-8">
            </div>
        </div>
    </div>
@endsection
