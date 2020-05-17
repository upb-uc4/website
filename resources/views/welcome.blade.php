@extends('layouts.app')

@section('content')
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
        <div class="absolute top-0 w-full h-full bg-gray-100"></div>
        <div class="container relative mx-auto">
            <div class="md:flex w-full max-w-screen-xl mx-auto px-6">
                <div class="md:w-1/2">
                    <div class="md:mt-12">
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

        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden" style="height: 70px; transform: translateZ(0px);">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    <section class="pb-20 bg-gray-300 -mt-32">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center mt-32">
                <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                    <h3 class="text-3xl mb-2 font-semibold leading-normal">
                        Blockchain Technology
                    </h3>
                    <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                        Hey, guess what you're accessories to. Of all the friends I've had… you're the first.
                        THE BIG BRAIN AM WINNING AGAIN! I AM THE GREETEST! NOW I AM LEAVING EARTH, FOR NO RAISEN! When will that be?
                    </p>
                    <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">
                        As an interesting side note, as a head without a body, I envy the dead. Tell them I hate them. Leela's gonna kill me.
                        I'll tell them you went down prying the wedding ring off his cold, dead finger.
                        You'll have all the Slurm you can drink when you're partying with Slurms McKenzie!
                    </p>
                </div>
                <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-blue-600">
                        <img class="w-full align-middle rounded-t-lg"
                             src="https://images.unsplash.com/photo-1526378800651-c32d170fe6f8?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80"
                             alt="..."
                        />
                        <blockquote class="relative p-8 mb-4">
                            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="absolute left-0 w-full block" style="height: 95px; top: -94px;">
                                <polygon points="-30,95 583,95 583,65" class="text-blue-600 fill-current"></polygon>
                            </svg>
                            <h4 class="text-xl font-bold text-white">
                                Top Notch Services
                            </h4>
                            <p class="text-md font-light mt-2 text-white">
                                Why would I want to know that? Oh Leela! You're the only person I could turn to; you're the only person who ever loved me.
                                I love this planet! I've got wealth, fame, and access to the depths of sleaze that those things bring.
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-20">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px; transform: translateZ(0px);">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                 viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="items-center flex flex-wrap">
                <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                    <img class="max-w-full rounded-lg shadow-lg"
                        src="https://images.unsplash.com/photo-1527891751199-7225231a68dd?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjF9;fit=crop&amp;w=634&amp;q=80"
                        alt="..."/>
                </div>
                <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                    <div class="md:pr-12">
                        <h3 class="text-3xl font-semibold">Academic Research Group</h3>
                        <h3 class="text-xl">Paderborn University, Germany</h3>
                        <p class="mt-4 text-lg leading-relaxed text-gray-600">
                            This is some text that says how cool we are. Look at us, we study computer science
                            at an university; wooo. Maybe it helps us design systems that could actually benefit
                            students because we know about all the struggle.
                        </p>
                        <ul class="list-none mt-6">
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200 mr-3">
                                            <i class="fas fa-fingerprint"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">
                                            Displaying random text
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200 mr-3">
                                            <i class="fas fa-university"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">Academic knowledge</h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200 mr-3">
                                            <i class="far fa-lock"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">Secure by design</h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-20 relative block bg-gray-900">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px; transform: translateZ(0px);">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                 viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
            <div class="flex flex-wrap text-center justify-center">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold text-white">I just want to talk</h2>
                    <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                        It has nothing to do with mating. Fry, that doesn't make sense.
                        I found what I need. And it's not friends, it's things. Ooh, name it after me! Bender, you risked your life to save me!
                        Then we'll go with that data file! Yes, except the Dave Matthews Band doesn't rock. Really?! Soon enough.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap mt-12 justify-center">
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                        <i class="fas fa-medal text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white">
                        Random Stuff
                    </h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        Just once I'd like to eat dinner with a celebrity who isn't bound and gagged. Fry, we have a crate to deliver.
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                        <i class="fas fa-poll text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white">
                        More Random Stuff
                    </h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        Well, thanks to the Internet, I'm now bored with sex.
                        Is there a place on the web that panders to my lust for violence?
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                        <i class="fas fa-lightbulb text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white">
                        Ding! Random Stuff
                    </h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        When I was first asked to make a film about my nephew, Hubert Farnsworth, I thought "Why should I?"
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-20 relative block bg-gray-800">
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
            <div class="flex flex-wrap text-center justify-center">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold text-white">Cutting Edge Technology</h2>
                    <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                        We believe that in order to supply you with the best possible product,
                        it is inevitable to rely only on the best and most fitting technologies.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap mt-12 justify-center">
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <img class="w-64 h-64 inline-flex items-center justify-center" src="{{ asset('/img/logos/scala.svg') }}">
                    <h5 class="text-xl mt-5 font-semibold text-white">
                        Scala
                    </h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        Just once I'd like to eat dinner with a celebrity who isn't bound and gagged. Fry, we have a crate to deliver.
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <img class="w-64 h-64 inline-flex items-center justify-center" src="{{ asset('/img/logos/hyperledger.svg') }}">
                    <h5 class="text-xl mt-5 font-semibold text-white">
                        Hyperledger Fabric
                    </h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        Well, thanks to the Internet, I'm now bored with sex.
                        Is there a place on the web?
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <img class="w-64 h-64 inline-flex items-center justify-center" src="{{ asset('/img/logos/akka.svg') }}">
                    <h5 class="text-xl mt-5 font-semibold text-white">
                        Akka
                    </h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        When I was first asked to make a film about my nephew, Hubert Farnsworth, I thought "Why should I?"
                    </p>
                </div>
            </div>

            <div class="flex flex-wrap justify-center">
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <img class="w-64 h-64 inline-flex items-center justify-center" src="{{ asset('/img/logos/lagom.svg') }}">
                    <h5 class="text-xl mt-5 font-semibold text-white">
                        Lagom
                    </h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        Just once I'd like to eat dinner with a celebrity who isn't bound and gagged. Fry, we have a crate to deliver.
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <img class="my-16 w-32 h-32 inline-flex items-center justify-center" src="{{ asset('/img/logos/vue.svg') }}">
                    <h5 class="text-xl mt-5 font-semibold text-white">
                        Vue.js
                    </h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        Vue.js allows us to build beautiful and intuitive user interfaces
                        to boost your productivity.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
