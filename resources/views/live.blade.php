@extends('layouts.master')

@section('title')
    Confirm your spot | MangoHacks '16
@endsection

@section('head_actions')
    <script src="//www.parsecdn.com/js/parse-1.6.14.min.js"></script>
    <script>Parse.initialize("GLMDltnGHl8uoy8M9tzTolYjCefsvlGoVLrRSXJV", "Tb7HwGR9Q2XCZ7iA4hogxFNr9JW0oBdU3oeF0mlQ");</script>
@endsection

@section('footer_actions')

@endsection


@section('body-class', 'class="home live"')

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
    <div id="live" v-cloak>
        <div class="tracks-wrap">
            <div class="container">
                <h1 class="countdown" class="heading">@{{ message }}</h1>
                <p class="countdown-sub">
                    @{{ subtitle }}
                </p>
            </div>
        </div>
        <div id="green" class="flavor-wrap">
            <div class="container">
                <div class="grid">
                    <div class="row">
                        <div class="col-6 updates">
                            <h2>Updates</h2>
                            <div class="updates-wrap">
                                <div v-for="update in updates" class="update-item">
                                    <h3 class="title">@{{ update.get('title') }}</h3>
                                    <h5 class="date">@{{ formatParseDate(update.get('createdAt')) }}</h5>
                                    <p>
                                        @{{ update.get('subtitle') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 schedule">
                            <h2>Schedule</h2>
                            <div class="program-wrap">
                                <div v-for="entry in schedule_entries" class="schedule-item">
                                    <div class="time">
                                        @{{ formatParseDate(entry.get('startTime')) }}
                                    </div>
                                    <div class="dets">
                                        <h5 class="location">@{{ entry.get('subtitle') }}</h5>
                                        <h3 class="title">@{{ entry.get('title') }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <br><br><br>
                    <h2 class="heading mb-lg">Reminders</h2>
                    <p>
                        If you haven't already done it, join the other hackers in the
                        <a href="https://www.facebook.com/groups/596999680448749/">MangoHacks '16 Attendees Facebook group.</a>
                    </p>

                    <p>
                        Also, we want to enhance your hackathon experience with optional tracks. Tracks are
                        events and workshops that you can attend. You can subscribe to track updates in the
                        <a href="/tracks">tracks page</a>.
                    </p>
                </div>

            </div>
        </div>

    </div>
@endsection
