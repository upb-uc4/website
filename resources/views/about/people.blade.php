@extends('layouts.app')

@section('content')
    <div class="h-full bg-gray-100 font-sans">

        @include('layouts/headline', ["headline" => "Meet the Team", "tagline" => "This is us, the team behind UC4. We are a group of passionate Master's students at the Paderborn University who work hard to make your everyday life at campus more simple."])


        <div class="flex mt-24 mb-48 justify-center">
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12">
                @foreach($members as $member)
                    <avatar name="{{ $member->name }}"
                            lastname="{{ $member->last_name }}"
                            title="{{ $member->title }}"
                            image="{{ asset($member->image) }}"></avatar>
                @endforeach
            </div>
        </div>
    </div>
@endsection
