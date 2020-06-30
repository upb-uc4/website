@extends('layouts.app')

@section('content')
    <landing-page
        image_hero="{{asset('/img/network.svg')}}"
        image_hyperledger="{{ asset('/img/logos/hyperledger.svg') }}"
        image_lagom="{{ asset('/img/logos/lagom-icon.svg') }}"
        image_docker="{{ asset('/img/logos/docker-alt-icon.png') }}"
        image_akka="{{ asset('/img/logos/akka-icon.svg') }}"
        image_scala="{{ asset('/img/logos/scala-spiral.png') }}"
        image_vue="{{ asset('/img/logos/vue.svg') }}"
        image_pg="{{ asset('img/members/pg_team.jpg') }}"
        route_about="{{ route('about') }}"
        >
    </landing-page>
@endsection
