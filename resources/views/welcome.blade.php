@extends('layouts.app')

@section('content')
    <section class="pt-16 mb-32 flex content-center items-center justify-center bg-gray-100" style="min-height: 75vh;">
        <div class="container relative mx-auto">
            <div class="md:flex w-full max-w-screen-xl mx-auto px-6">
                <div class="md:w-1/2">
                    <div class="md:mt-12">
                        <h1 class="text-5xl font-extrabold text-gray-900">Course Administration Has Never Been Easier</h1>
                    </div>

                    <div class="mt-4">
                        <p class="font-medium text-lg text-gray-600 tracking-widest leading-loose">
                            <span class="text-blue-500">University Credits 4.0</span> is an educational project with the aim to design the course enrollment system of the future.

                        </p>
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
    </section>

    <section class="pb-20 block bg-gray-900">
        <div class="container mx-auto px-4 pt-8 lg:py-32">
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
        <div class="container mx-auto px-4 pt-8 lg:py-24 lg:pb-32">
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
                    <img class="w-48 h-48 inline-flex justify-center" src="{{ asset('/img/logos/scala.svg') }}">
                    <h5 class="text-xl font-semibold text-white">
                        Scala
                    </h5>
                    <p class="mt-2 text-gray-500">
                        Just once I'd like to eat dinner with a celebrity who isn't bound and gagged. Fry, we have a crate to deliver.
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <img class="w-48 h-48 inline-flex justify-center" src="{{ asset('/img/logos/hyperledger.svg') }}">
                    <h5 class="text-xl font-semibold text-white">
                        Hyperledger Fabric
                    </h5>
                    <p class="mt-2 text-gray-500">
                        Well, thanks to the Internet, I'm now bored with sex.
                        Is there a place on the web?
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <img class="w-48 h-48 inline-flex justify-center" src="{{ asset('/img/logos/akka.svg') }}">
                    <h5 class="text-xl font-semibold text-white">
                        Akka
                    </h5>
                    <p class="mt-2 text-gray-500">
                        When I was first asked to make a film about my nephew, Hubert Farnsworth, I thought "Why should I?"
                    </p>
                </div>
            </div>

            <div class="flex flex-wrap justify-center">
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <img class="w-48 h-48 inline-flex justify-center" src="{{ asset('/img/logos/lagom.svg') }}">
                    <h5 class="text-xl font-semibold text-white">
                        Lagom
                    </h5>
                    <p class="mt-2 text-gray-500">
                        Just once I'd like to eat dinner with a celebrity who isn't bound and gagged. Fry, we have a crate to deliver.
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <img class="my-12 w-24 h-24 inline-flex justify-center" src="{{ asset('/img/logos/vue.svg') }}">
                    <h5 class="text-xl font-semibold text-white">
                        Vue.js
                    </h5>
                    <p class="mt-2 text-gray-500">
                        Vue.js allows us to build beautiful and intuitive user interfaces
                        to boost your productivity.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
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
@endsection
