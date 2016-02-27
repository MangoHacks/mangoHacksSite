@extends('layouts.master')

@section('title')
    Tracks | MangoHacks '16
@endsection

@section('head_actions')

@endsection


@section('body-class', 'class="home"')

@section('menu')
    <a href="/" class="logo">
        <img class="responsive-image" src="/img/logo.png" alt="MangoHacks">
    </a>
    <div class="menu">
        <a href="/#about">About</a>
        <a href="/#faq">FAQs</a>
        <a href="/#schedule">Schedule</a>
        <a href="/#sponsors">Sponsors</a>
	<!-- <a href="#">Register</a> -->
    </div>
    <a class="mobile-trigger active" href="#" id="small-menu"><i class="fa fa-bars"></i></a>
    <a class="mobile-close" href="#"><i class="fa fa-times"></i></a>
@endsection


@section('content')
<div id="app">

    <div class="tracks-wrap">
        <div class="container">
            <h2 class="heading">Flavored Tacks</h2>
            <p>
                We’re introducing optional flavored tracks as ways to enhance your hackathon experience.
                Tracks are meant to give you some direction while you work on your hack
                and cater to different interests and skill levels.
            </p>

            {{--<a href="https://mangohacks.typeform.com/to/YyBEYF" class="button">Sign Up!</a>--}}

        </div>
    </div>

    <div class="anchors-wrap">
        <div class="container">
            <a href="#green">Green Track</a>
            <a href="#yellow">Yellow Track</a>
            <a href="#red">Red Track</a>
        </div>
    </div>

    <div id="green" class="flavor-wrap">
        <div class="container">
            <h2 class="heading">Green Track</h2>
            <p>
                The green track is a guided intro for beginners and hackers that want to learn something new. If you are not entirely sure
                of what you're doing, this track is for you. There will be workshops to guide you through
                the process of starting a project, using APIs and deploying your ideas as well as
                opportunities for you to meet cool new friends.
            </p>

            <br>
            <div class="schedule">
                <h3>Events <small>updating</small></h3>
                <div class="day">
                    <ul class="times">
                        <li>Intro to HTML and CSS</li>
                        <li>Git/Github by Jacob Jenkins</li>
                        <li>MeteorJS by Gregory Johnson</li>
                        <li>Swift by Ngoma Mbaku Davy</li>
                        <li>Node.js by Jacob Jenkins</li>
                        <li>Web apps in Sinatra by Ben Botwin</li>
                        <li>React.js by Kennet Postigo</li>
                        <li>Deploying your app</li>
                    </ul>
                </div>
                <a href="https://mangohacks.typeform.com/to/YyBEYF">Signup for updates.</a>
            </div>
        </div>
    </div>

    <div id="yellow" class="flavor-wrap">
        <div class="container">
            <h2 class="heading">Yellow Track</h2>
            <p>
                Calling all social innovators! This track is for anyone that wants to make the
                change they want to see in the world. Meet people who share your drive to
                solve problems facing people and the planet in South Florida and beyond.
                No matter your major, if you want to disrupt the status quo, this track is for you.
            </p>

            <div class="schedule">
                <h3>Events <small>updating</small></h3>
                <div class="day">
                    <ul class="times">
                        <li>Team Building for Social Change</li>
                    </ul>
                </div>
                <a href="https://mangohacks.typeform.com/to/YyBEYF">Signup for updates.</a>
            </div>
        </div>
    </div>

    <div id="red" class="flavor-wrap">
        <div class="container">
            <h2 class="heading">Red Track</h2>
            <p>
                Everyone likes to imagine the most vibrant of ideas. However,
                dreams often need action. The red track will let you do just that.
                Approach your hack from a entrepreneurship point of view and engage with
                people and mentors that will let you use all of your skills to build
                something great.
            </p>

            <div class="schedule">
                <h3>Events <small>updating</small></h3>
                <div class="day">
                    <ul class="times">
                        <li>Pitch Workshop / Pitch Off</li>
                    </ul>
                </div>
                <a href="https://mangohacks.typeform.com/to/YyBEYF">Signup for updates.</a>
            </div>
        </div>
    </div>

</div>
@endsection
