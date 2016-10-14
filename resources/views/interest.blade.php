@extends('layouts.bare')

@section('title')
    MangoHacks | A Student Hackathon at FIU
@endsection

@section('head_actions')
@endsection

@section('body-class', 'class="home interest"')

@section('content')
    <div id="app">
        <div class="wrapper">
            <div id="hackerBackground"></div>
            <div class="overlay translucentBlue"></div>
            <div class="content">
                <img id="logo" src="/img/logoTemp.png">
                <div class="tagline">A Hackathon at Florida International University</div>
                <div class="actions">
                    {{--<a href="#" class="button register">Registrations Closed</a>--}}
                    {{--<a href="#sponsors" class="button sponsor main-button">Sponsor Us</a>--}}
                    {{--<a @click="onExternalModal" href="#" class="button register">Register For Updates</a>--}}
                    <a href="https://www.facebook.com/events/264190797309786/" class="button register">Join the MangoHacks Crew</a>
                </div>
                <div class="social_media">
                    <a target="_blank" href="https://www.facebook.com/MangoHacks">
                        <i class="fa fa-facebook-official"></i>
                    </a>
                    <a target="_blank" href="https://twitter.com/fiumangohacks">
                        <i class="fa fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{--<pre-register-modal token="{{ csrf_token() }}"></pre-register-modal>--}}
@endsection
