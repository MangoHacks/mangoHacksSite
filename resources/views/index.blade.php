@extends('layouts.master')

@section('head_actions')
@endsection

@section('body-class', 'class="home"')

@section('content')
<div id="app">
    <div class="wrapper">
        <div id="hackerBackground"></div>
        <div class="overlay translucentBlue"></div>
        <div class="content">
            <img id="logo" src="/img/logo.png">
            <div class="tagline">Florida International University | March 4 - 6, 2016</div>
            <div class="actions">
                <a @click="onExternalModal" href="#" class="button register">Pre Register</a>
                <a href="mailto:team@mangohacks.com" class="button sponsor">Sponsor Us</a>
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

    <pre-register-modal token="{{ csrf_token() }}"></pre-register-modal>
</div>
@endsection
