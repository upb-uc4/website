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
                    <h2 class="text-4xl font-semibold text-white">Our Vision</h2>
                    <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                        Universities are a place of knowledge. They stand for innovation and progress.
                        We believe their administrative processes should reflect this too!
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap mt-12 justify-center">
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <i class="fas fa-lock text-orange-400 text-5xl"></i>
                    <h5 class="text-xl mt-5 font-semibold text-white">
                        Control Who Sees What
                    </h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        Our permission based approach ensures that only those who need to access your data can see it.
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <i class="fas fa-chart-line text-orange-400 text-5xl"></i>
                    <h5 class="text-xl mt-5 font-semibold text-white">
                        Plan for Tomorrow
                    </h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        No matter how your requirements may change in the future, our system will seamlessly scale to your needs.
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <i class="fas fa-users text-orange-400 text-5xl"></i>
                    <h5 class="text-xl mt-5 font-semibold text-white">
                        Improve User Experience
                    </h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        Instead of soley focusing on the processes we build our system with the best possible user experience in mind.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 flex content-center items-center justify-center bg-gray-800">
        <div class="container mx-auto">
            <div class="md:flex w-full max-w-screen-xl mx-auto px-6">
                <div class="flex justify-center md:w-1/2">
                    <img src="{{ asset('/img/logos/hyperledger.svg') }}" class="w-2/3 mr-32">
                </div>

                <div class="md:w-1/2">
                    <div class="">
                        <h1 class="text-4xl font-semibold text-white">Building Trust with Blockchain</h1>
                        <h2 class="text-xl text-white">Distributed Ledger Technology</h2>
                    </div>

                    <div class="mt-4">
                        <p class="mt-4 text-lg leading-relaxed text-gray-500">
                            Pansy. Well, then good news! It's a suppository.
                            Anyhoo, your net-suits will allow you to experience Fry's worm infested bowels as if you were actually wriggling through them.
                            No argument here. Who said that? SURE you can die! You want to die?!
                        </p>
                        <ul class="list-none mt-6">
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <i class="fas fa-fingerprint text-3xl mr-3" style="color: #97D6D7;"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-500">
                                            Displaying random text
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <i class="fas fa-university text-3xl mr-3" style="color: #97D6D7;"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-500">Academic knowledge</h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <i class="fas fa-lock text-3xl mr-3" style="color: #97D6D7;"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-500">Secure by design</h4>
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
                    <img class="w-48 h-32 inline-flex justify-center" src="{{ asset('/img/logos/lagom-icon.svg') }}">
                    <h5 class="text-xl font-semibold text-white">
                        Lagom
                    </h5>
                    <p class="mt-2 text-gray-500">
                        Just once I'd like to eat dinner with a celebrity who isn't bound and gagged. Fry, we have a crate to deliver.
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <img class="w-48 h-32 object-scale-down inline-flex justify-center" src="{{ asset('/img/logos/docker-alt-icon.png') }}">
                    <h5 class="text-xl font-semibold text-white">
                        Docker
                    </h5>
                    <p class="mt-2 text-gray-500">
                        Well, thanks to the Internet, I'm now bored with sex.
                        Is there a place on the web?
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <img class="w-48 h-32 inline-flex justify-center" src="{{ asset('/img/logos/akka-icon.svg') }}">
                    <h5 class="text-xl font-semibold text-white">
                        Akka
                    </h5>
                    <p class="mt-2 text-gray-500">
                        When I was first asked to make a film about my nephew, Hubert Farnsworth, I thought "Why should I?"
                    </p>
                </div>
            </div>

            <div class="flex flex-wrap justify-center mt-12">
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <img class="my-8 w-24 h-16 object-scale-down inline-flex justify-center" src="{{ asset('/img/logos/scala-spiral.png') }}">
                    <h5 class="text-xl font-semibold text-white">
                        Scala
                    </h5>
                    <p class="mt-2 text-gray-500">
                        Just once I'd like to eat dinner with a celebrity who isn't bound and gagged. Fry, we have a crate to deliver.
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <img class="my-8 w-24 h-16 inline-flex justify-center" src="{{ asset('/img/logos/vue.svg') }}">
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

    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="items-center flex flex-wrap">
                <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                    <img class="max-w-full rounded-lg shadow-lg"
                         src="{{ asset('img/members/pg_team.png') }}"
                         alt="Group Picture of the Project Team"/>
                </div>
                <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                    <div class="md:pr-12">
                        <h3 class="text-3xl font-semibold">Academic Research Group</h3>
                        <h3 class="text-xl">Paderborn University, Germany</h3>
                        <p class="mt-4 text-lg leading-relaxed text-gray-600">
                            <span class="text-blue-500">University Credits 4.0</span> is a join effort of highly motivated
                            Master's student at the Paderborn University. The project is actively maintained under the
                            <a href="https://github.com/upb-uc4/"
                               class="text-blue-500 underline focus:text-blue-700 hover:text-blue-700">
                                MIT open-source licence.
                            </a>
                        </p>
                    </div>
                    <div class="mt-12">
                        <a href="/about/people" class="w-1/3 bg-blue-500 focus:outline-none text-white font-semibold tracking-widest py-4 px-4 uppercase rounded-lg focus:shadow-outline">
                            Meet our team
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
