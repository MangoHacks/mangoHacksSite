@extends('layouts.master')

@section('head_actions')
@endsection

@section('body-class', 'class="home"')

@section('content')
<div id="app">


    <div class="wrapper">
        <a id="mlh-trust-badge" style="" href="https://mlh.io/seasons/s2016/events?utm_source=s2016&utm_medium=TrustBadge&utm_campaign=s2016" target="_blank"><img src="https://s3.amazonaws.com/logged-assets/trust-badge/s2016.png" alt="MLH Official - Spring 2016" style="width:100%;" ></a>

        <div id="hackerBackground"></div>
        <div class="overlay translucentBlue"></div>
        <div class="content">
            <img id="logo" src="/img/logo.png">
            <div class="tagline">36 Hours | Florida International University | March 4 - 6, 2016</div>
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

    <div id="about" class="about-wrap">
        <div class="container">
            <h2 class="heading">About</h2>
            <p>
                MangoHacks is a place for discovery. It is a 36 hour hackathon that encourages
                learning, collaboration, growth, thinking, and innovation. We will welcome 250+
                students from Florida and across the country, amazing mentors, and wonderful
                sponsors to create amazing things. MangoHacks is organized by students for
                students. It’ll be sweet. We promise.
            </p>
        </div>
    </div>

    <div class="what-wrap">
        <div class="container">
            <h2 class="heading">What is MangoHacks?</h2>

            <p>We want MangoHacks to create memories and experiences.</p>

            <p>
                MangoHacks is a place to meet new people, learn something, build something,
                and dream along (or just come with your friends and have fun).
            </p>

            <p>
                We want to welcome everyone - from the most experienced hackers and builders
                to the thinkers and the curious who have never heard of a hackathon. Regardless
                of your experience, there is something for you at MangoHacks. Come learn something
                new, solve problems, and build something cool.
            </p>

            <p>
                We’re introducing flavored tracks as ways to enhance your hackathon experience.
                First timer or newbie? We’ve got you covered, you’ll learn something with our
                <a href="#">Green Track</a>. More into the entrepreneurial side? That’s cool
                too, explore the possibilities of your venture with the <a href="#">Yellow Track</a>. Feel
                like improving the world? Join everyone on the <a href="#">Red Track</a> and discover great
                was to make a change.
            </p>
        </div>
    </div>

    <div id="faq" class="faqs-wrap">
        <div class="container">
            <h2 class="heading">FAQs</h2>
            <div class="faq">
                <h3>What is a Hackathon?</h3>
                <p>
                    Don’t worry, this is not the kind of place where you break into a
                    bank or do something illegal.
                </p>
                <p>
                    A hackathon is a creative coding and invention marathon. Students
                    come together with an idea or a passion, get into teams, and build that
                    idea into something tangible in 36 hours. At the end of the hackathon, the
                    teams will show what they built to judges and other participants.
                </p>
                <p>
                    At MangoHacks we welcome you to take the things you love (sports, art,
                    traveling, dogs!) and combine it with techonology to make something different,
                    something cool. A hackathon is an awesome place to push yourself, learn
                    new skills, and meet amazing people.
                </p>
            </div>
            <div class="row">

                <div class="faq">
                    <h3>When and where?</h3>
                    <p>
                        Don’t worry, this is not the kind of place where you break into a
                        bank or do something illegal.
                    </p>
                    <p>
                        MangoHacks ’16 will take place at Florida International University’s
                        PG6 Tech Station from March 4th to 6th. <a href="https://goo.gl/maps/iNav35kcQAN2">(Get Directions)</a>
                    </p>
                </div>

                <div class="faq">
                    <h3>How long is it?</h3>
                    <p>
                        People will arrive between 6pm and 8pm on Friday, March 4th. Hacking will
                        start at 10pm on Friday and go until 8am on Sunday, March 6th. Closing
                        ceremony will end by 3pm on Sunday.
                    </p>
                </div>

                <div class="faq">
                    <h3>Who can come?</h3>
                    <p>
                        Anyone that is currently a college student or that graduated in the past
                        year is welcome to participate. If it has been a while since you were a
                        student you can still participate as a mentor for the attendees.
                        <br>
                        <a href="#">Sign up to be a mentor</a>
                    </p>
                </div>

                <div class="faq">
                    <h3>Food? Oh yeah</h3>
                    <p>
                        Lots of it. Free too! We’ll make you feel right at home. Enough food to
                        keep you going for the entire 36 hours, and then some. Caffeine, energy drinks,
                        snacks and all. We’ve got you. If you have special needs, it’s all good too.
                        Did we mention there’ll be lots of food?
                    </p>
                </div>

                <div class="faq">
                    <h3>What’s the deal with teams?</h3>
                    <p>
                        It’s no biggie. You can hack solo, but the more the merrier.
                        You can join a team of up to four people. You don’t need to have a team
                        ready before the event - there will be amazing people that you can join at
                        the event. If you have some friends in mind though, you’re more than welcome
                        to stay together.
                    </p>
                </div>

                <div class="faq">
                    <h3>What do I need to bring?</h3>
                    <p>
                        You’ll need an ID and the stuff you’ll need throughout the weekend.
                        Laptop, chargers, phone, the basics. You’ll probably also want to bring
                        some basic hygiene products (toothbrush/toothpase, deodorant, a change
                        of clothes) and anything to keep you fresh through the weekend. A sleeping
                        bag might be cool too if you plan on getting some sleep.
                    </p>
                </div>

                <div class="faq">
                    <h3>How much does it cost?</h3>
                    <p>
                        ZERO! FREE! Nada. Zip. $0. Everything we privide will be free, so
                        you only need to worry about what you’ll achieve during the weekend.
                    </p>
                </div>

                <div class="faq">
                    <h3>How much experience do I need?</h3>
                    <p>
                        Don’t be afraid if you don’t think you have enough experience, a team or an idea.
                        A hackathon is meant for learning, in fact we’re even having a track for beginners
                        to learn (see <a href="#">Green Track</a>). We’ll have great mentors and tools to help you with
                        development, ideas, and everything in between as well as workshop where you can
                        pick up all kinds of skills.
                    </p>
                </div>

                <div class="faq">
                    <h3>How do I get there?</h3>
                    <p>
                        Driving, Flying, Swimming… however you can! We’d love to have anyone who really
                        wants to come, and if you need help figuring out a way that works, let us know at <a href="mailto:team@mangohacks.com">team@mangohacks.com</a>.
                        We’ll be sending a bus schools in North Florida making stops at the schools with
                        the most hackers, so get your friends to apply too. We also encourage car
                        pooling because who doesn’t love a road trip?
                    </p>
                </div>

                <div class="faq">
                    <h3>Registration Process?</h3>
                    <p>
                        You can pre-register now, and we’ll let you know when applications open.
                        Once applications are up, you can register and we’ll roll out decisions in a
                        rolling basis.
                    </p>
                </div>

                <div class="faq">
                    <h3>Can I submit and older project?</h3>
                    <p>
                        We want MangoHacks to be a fair opportunity for everyone. So we ask that
                        no code that will be part of a project is written before the event. You’re
                        are welcome to come with an idea and a plan though. Plus, making something
                        completely new is pretty sweet.
                    </p>
                </div>

                <div class="faq">
                    <h3>Code of Conduct?</h3>
                    <p>
                        Bottom line? Be cool to people around you. <a target="_blank" href="http://static.mlh.io/docs/mlh-code-of-conduct.pdf">Read more.</a>
                    </p>
                </div>

                <div class="faq">
                    <h3>Wait! What about...? </h3>
                    <p>
                        If you have any other questions, hit us up.
                        <a href="mailto:team@mangohacks.com">team@mangohacks.com</a>
                    </p>
                </div>

                <div class="faq">
                    <h3>Soo, why Mango?</h3>
                    <p>
                        Mangoes are pretty sweet, and so are we.
                    </p>
                </div>

            </div>



        </div>
    </div>

    <div id="sponsors" class="sponsors-wrap">
        <div class="container">
            <h2 class="heading mb-lg">Sponsors</h2>

            <h2 class="interest">Interested in Sponsoring Us? </h2>
            <p class="sell">Email <a href="mailto:team@mangohacks.com">team@mangohacks.com</a> for more information!</p>
        </div>
    </div>

    <div class="partners-wrap">
        <div class="container">
            <h2 class="heading mb-lg">Partners</h2>
            <div class="grid">
                <div class="row">
                    <div class="col-6">
                        <img class="logo" src="/img/logos/mlh-logo.png" alt="MLH">
                    </div>
                    <div class="col-6">
                        <img class="logo" src="/img/logos/sga.jpg" alt="FIU SGA">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <img class="logo acm" src="/img/logos/acm.png" alt="ACM">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="register-wrap">
        <div class="container">
          <h2 class="heading mb-lg">Register</h2>

          <p>
            It's time. <a href="#">Register today</a> and be sweet with us.
          </p>
        </div>
    </div>


    <pre-register-modal token="{{ csrf_token() }}"></pre-register-modal>
</div>
@endsection
