<template>
    <div>
        <section class="lg:pt-16 mb-32 flex content-center items-center justify-center bg-gray-100" style="min-height: 75vh;">
            <div class="container relative mx-auto">
                <div class="md:flex w-full max-w-screen-xl mx-auto px-6">
                    <div class="md:w-1/2">
                        <div class="md:mt-12">
                            <h1 class="text-5xl font-extrabold text-gray-900">Course Administration Has Never Been Easier</h1>
                        </div>

                        <div class="mt-4">
                            <p class="font-medium text-lg text-gray-600 tracking-widest leading-loose">
                                <span class="text-blue-500">University Credits 4.0</span> is an educational project with the aim to prototype the credit management system of the future.

                            </p>
                        </div>

                        <div class="mt-12">
                            <button @click="scrollToVision" class="w-1/3 bg-blue-700 hover:bg-blue-800 focus:outline-none text-white font-semibold tracking-widest py-4 px-4 uppercase rounded-lg focus:shadow-outline">
                                Learn more
                            </button>
                        </div>
                    </div>

                    <div class="md:w-1/2 md:mt-0 mt-16">
                        <img :src="image_hero" class="md:mt-8">
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-20 block bg-gray-900">
            <div class="container mx-auto px-4 pt-8 lg:py-32">
                <div class="flex flex-wrap text-center justify-center">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold text-white" ref="vision">Our Vision</h2>
                        <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                            Universities are a place of knowledge. They represent innovation and progress like no other.
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
                            Our permission based blockchain ensures that only those who need to access your data can see it.
                        </p>
                    </div>
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <i class="fas fa-upload text-orange-400 text-5xl"></i>
                        <h5 class="text-xl mt-5 font-semibold text-white">
                            Automate Your Workflow
                        </h5>
                        <p class="mt-2 mb-4 text-gray-500">
                            Digitalize your administrative processes and reduce the overhead of wasteful paperwork.
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

        <section class="py-8 md:py-32 flex content-center items-center justify-center bg-gray-800 bg-hero-circuit-board">
            <div class="container mx-auto">
                <div class="md:flex w-full max-w-screen-xl mx-auto px-6">
                    <div class="flex justify-center md:w-1/2">
                        <img :src="image_hyperledger" @click="linkTo('https://www.hyperledger.org/use/fabric')" class="w-2/3 mr-32 cursor-pointer">
                    </div>

                    <div class="md:w-1/2">
                        <div class="">
                            <h1 class="text-4xl font-semibold text-white">Building Trust with Blockchain</h1>
                            <h2 class="text-xl text-white">Distributed Ledger Technology</h2>
                        </div>

                        <div class="mt-4">
                            <p class="mt-4 text-lg leading-relaxed text-gray-500">
                                The core of our application, the ledger, is based upon <a href="https://www.hyperledger.org/use/fabric"><span style="color: #97D6D7;">Hyperledger Fabric</span></a>,
                                an open-source project by the Linux Foundation. It allows for a decentralized
                                credit management system. This eliminates the current single point
                                of failure, the university's server.
                            </p>
                            <ul class="list-none mt-6">
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <i class="fas fa-fingerprint text-3xl mr-3" style="color: #97D6D7;"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-500">
                                                Digital proof of students' credit record
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
                                            <h4 class="font-semibold text-gray-500">No single point of failure due to decentralisation</h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <i class="fas fa-lock text-3xl mr-3" style="color: #97D6D7;"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-500">Secure by state of the art cryptography</h4>
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
                        <p class="text-lg leading-relaxed mt-4 md:mb-4 text-gray-500">
                            We believe that in order to supply you with the best possible product,
                            it is inevitable to rely only on the best and most fitting technologies.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap mt-2 md:mt-12 justify-center">
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <img class="w-48 h-32 inline-flex justify-center cursor-pointer" :src="image_lagom" @click="linkTo('https://www.lagomframework.com')">
                        <h5 class="text-xl font-semibold text-white">
                            Lagom
                        </h5>
                        <p class="mt-2 text-gray-500">
                            We utilize the power of microservices to build a flexible system that easily adjusts to your needs.
                        </p>
                    </div>
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <img class="w-48 h-32 object-scale-down inline-flex justify-center cursor-pointer" :src="image_docker" @click="linkTo('https://www.docker.com')">
                        <h5 class="text-xl font-semibold text-white">
                            Docker
                        </h5>
                        <p class="mt-2 text-gray-500">
                            Unleash the full potential of UC4 without compromises on nearly every operating system, thanks to Docker.
                        </p>
                    </div>
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <img class="w-48 h-32 inline-flex justify-center cursor-pointer" :src="image_akka" @click="linkTo('https://akka.io')">
                        <h5 class="text-xl font-semibold text-white">
                            Akka
                        </h5>
                        <p class="mt-2 text-gray-500">
                            Lightning fast communication between highly concurrent and distributed system due to Akka.
                        </p>
                    </div>
                </div>

                <div class="flex flex-wrap justify-center mt-2 md:mt-12">
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <img class="my-8 w-24 h-16 object-scale-down inline-flex justify-center cursor-pointer" :src="image_scala" @click="linkTo('https://www.scala-lang.org')">
                        <h5 class="text-xl font-semibold text-white">
                            Scala
                        </h5>
                        <p class="mt-2 text-gray-500">
                            Because we realize that reliability is extremely important in the context of university administration.
                        </p>
                    </div>
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <img class="my-8 w-24 h-16 inline-flex justify-center cursor-pointer" :src="image_vue" @click="linkTo('https://vuejs.org')">
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

        <section class="py-8 md:py-20 bg-gray-100">
            <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                        <img class="max-w-full rounded-lg shadow-lg"
                             :src="image_pg"
                             alt="Group Picture of the Project Team"/>
                    </div>
                    <div class="w-full md:w-5/12 mt-4 md:mt-0 ml-auto mr-auto px-4">
                        <div class="lg:pr-12">
                            <h3 class="text-3xl font-semibold">Academic Project Group</h3>
                            <h3 class="text-xl">Paderborn University, Germany</h3>
                            <p class="mt-4 text-lg leading-relaxed text-gray-600">
                                <span class="text-blue-500">University Credits 4.0</span> is a joint effort of highly motivated
                                Master's students at Paderborn University. The one-year project is actively maintained under the
                                <a href="https://github.com/upb-uc4/"
                                   class="text-blue-500 underline focus:text-blue-700 hover:text-blue-800">
                                    Apache-2.0 open-source licence.
                                </a>
                            </p>
                        </div>
                        <div class="mt-12">
                            <a :href="route_about" class="w-1/3 bg-blue-700 hover:bg-blue-800 focus:outline-none text-white font-semibold tracking-widest py-4 px-4 uppercase rounded-lg focus:shadow-outline">
                                Meet our team
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: "landingpage",
        props: [
            'image_hero',
            'image_hyperledger',
            'image_docker',
            'image_lagom',
            'image_scala',
            'image_vue',
            'image_akka',
            'image_pg',
            'route_about',
        ],
        methods: {
            linkTo(destination) {
                window.location.href = destination;
            },
            scrollToVision() {
                const visionSection = this.$refs.vision;
                if (visionSection) {
                    visionSection.scrollIntoView({behavior: 'smooth'});
                }
            }
        }
    }
</script>
