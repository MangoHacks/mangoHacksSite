@extends('layouts.master')
@section('body-class', 'class="home"')

@section('content')
    <div class="wrapper">
        <div id="hackerBackground"></div>
        <div class="overlay translucentBlue"></div>
        <div class="content">
            <img id="logo" src="/img/logo.png">
            <div class="tagline">Florida International University | March 4 - 6, 2016</div>
            <div class="actions">
                <a href="#" class="button register">Pre Register</a>
                <a href="mailto:team@mangohacks.com" class="button sponsor">Sponsor Us</a>
            </div>
        </div>
    </div>

    <!-- Begin MailChimp Signup Form -->
    <div id="signup-form" class="super_impose">
        <div class="form-content">
            <h3 class="title">We'll just need your email!</h3>
            <h5 class="brah">Spam isn't sweet. So we won't send any. Pinky promise.</h5>

            <form action="//mangohacks.us12.list-manage.com/subscribe/post?u=b868e956767fb6d193ac81d1e&amp;id=a973d3a603" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div class="field input-field">
                    <input value="" type="email" name="EMAIL" required="required true"/>
                    <label alt="Email" data-placeholder="Your Email"></label>
                </div>
                <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_b868e956767fb6d193ac81d1e_a973d3a603" tabindex="-1" value=""></div>
                <div class="form-actions">
                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                    <a href="#" class="button cancel">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <!--End mc_embed_signup-->
@endsection
