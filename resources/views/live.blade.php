@extends('layouts.master')

@section('title')
    Live Updates | MangoHacks '16
@endsection

@section('head_actions')
    <meta http-equiv="refresh" content="60" />
    <link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/edlendmgfkojcpmfmjcnijnbmmobmhnn">
    <script src="//www.parsecdn.com/js/parse-1.6.14.min.js"></script>
    <script>Parse.initialize("GLMDltnGHl8uoy8M9tzTolYjCefsvlGoVLrRSXJV", "Tb7HwGR9Q2XCZ7iA4hogxFNr9JW0oBdU3oeF0mlQ");</script>
@endsection

@section('footer_actions')
    <script>
        if (!chrome.app.isInstalled) {
            document.getElementById('install-button').style.display = 'inline-block';
        }
    </script>
@endsection


@section('body-class', 'class="home live"')

@section('menu')
    <a href="/" class="logo">
        <img class="responsive-image" src="/img/logo.png" alt="MangoHacks">
    </a>
    <div class="menu">
        <a href="/#about">About</a>
        <a href="/#faq">FAQs</a>
        <a href="/tracks">Track Events</a>
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
                <br>
                <button class="button" style="display: none;" onclick="chrome.webstore.install()" id="install-button">Get Notifications</button>
            </div>
        </div>
        <div class="links">
            <div class="container">
                <a href="#reminders" class="button">Reminders</a>
                <a href="#map" class="button">Venue Map</a>
                <a href="/tracks" class="button">Track Events</a>
                <a href="http://slack.mangohacks.com" target="_blank" class="button">Request Slack Invite</a>
                <a href="http://hardware.mlh.io" target="_blank" class="button secondary">MLH Hardware Request</a>
                <a href="http://mangohacks16.devpost.com/" target="_blank" class="button secondary">Devpost</a>
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
                <div class="container" id="map">
                    <br><br><br>
                    <h2 class="heading mb-lg">Venue Map</h2>
                    <a href="/img/map2.jpg"><img class="responsive-image" src="/img/map2.jpg" alt=""></a>
                </div>
                <div class="container" id="reminders">
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
