@extends('layouts.master')

@section('title')
    Confirm your spot | MangoHacks '16
@endsection

@section('head_actions')
    <style>
        .tracks-wrap:after {
            background: rgba(32, 176, 86, 0.9);
        }
        @media (min-width: 490px){
            .tracks-wrap {
                padding: 100px 0;
            }
        }
    </style>
@endsection


@section('body-class', 'class="home"')

@section('menu')
    <a href="/" class="logo">
        <img class="responsive-image" src="/img/logo.png" alt="MangoHacks">
    </a>
    <div class="menu">
        <a href="/#about">About</a>
        <a href="/#faq">FAQs</a>
        <a href="/#sponsors">Sponsors</a>
    </div>
    <a class="mobile-trigger active" href="#" id="small-menu"><i class="fa fa-bars"></i></a>
    <a class="mobile-close" href="#"><i class="fa fa-times"></i></a>
@endsection


@section('content')
    <div id="app">
        <div class="tracks-wrap">
            <div class="container">
                <h1 class="heading">Boom! You're coming to MangoHacks {{ $attendee['first_name'] }}!</h1>

                <p>
                    We can't wait to have you here!
                </p>
            </div>
        </div>
        <div id="green" class="flavor-wrap">
            <div class="container">
                <p>
                    If you haven't already done it, join the other hackers in the
                    <a href="https://www.facebook.com/groups/596999680448749/">MangoHacks '16 Attendees Facebook group.</a>
                </p>

                <p>
                    Also, we want to enhance your hackathon experience with options tracks. Tracks are
                    events and workshops that you can attend. You can subscribe to track updates in the
                    <a href="/tracks">tracks page</a>.
                </p>

                <h2>Check our schedule</h2>

                @include('_schedule')

                <h3>See you soon!</h3>
            </div>
        </div>

    </div>
@endsection
