<div class="email-bg" style="background: #20396D;padding: 30px 0px 30px 0px;color: white;">
    <div class="pre-head" style="max-width: 600px;margin: 0 auto;padding: 10px 20px 10px 20px;background: #20396D;font-size: 10px;color: white;">
        <a href="http://mangohacks.com/confirm/{{ $attendee['hashed_id'] }}" style="color: #00E35C;">Confirm your spot at MangoHacks!</a>
    </div>
    <div class="header" style="max-width: 480px;margin: 0 auto;">
        <img src="http://mangohacks.com/img/logo.png" alt="MRE" style="max-width: 100%;">
    </div>
    <div class="email-container" style="max-width: 600px;margin: 0 auto;padding: 0px 20px 20px 20px;background: #20396D;">
        <p class="greeting" style="color: white;font-size: 36px;font-weight: bold;">You're coming to MangoHacks {{ $attendee['first_name'] }}!</p>
        <p>This is the first wave of decisions, and you've made the cut.</p>

        <p>
            We're super excited to have you join us in <strong>Miami, FL</strong> this upcoming <strong>March 4th - 6th</strong> for a sweet weekend.
        </p>
        <p>
            We will be sending a bus to north Florida, stopping at FSU, UF, and UCF. We'll release details on social media and through email.
        </p>
        <p>
            Unfortunately we can't provide individual travel reinbursements this year. But if you have
            any questions, let us know.
        </p>
        <p>
            For next steps, we'll need to confirm your attendace. So just follow the link bellow and you'll be set.
        </p>
        <a class="cto" href="http://mangohacks.com/confirm?h={{ $attendee['hashed_id'] }}" style="color: white;display: block;margin: 24px auto;width: 240px;background: #00E35C;border-radius: 5px;text-align: center;text-decoration: none;font-weight: bold;padding: 16px 24px;font-size: 20px;">Confirm Attendance</a>
        <p>
            Also, join our <a href="https://www.facebook.com/groups/596999680448749/" style="color: #00E35C;">Attendees Facebook Group</a> to start meeting other hackers, organize carpools, share gifs, and get the HYPE going. We'll also be posting info on the bus there.
        </p>

        <p>
            If you still have any questions, hit us up at <a href="mailto:team@mangohacks.com" style="color: #00E35C;">team@mangohacks.com</a> or on <a href="https://www.facebook.com/MangoHacks" style="color: #00E35C;">Facebook</a> and <a href="https://twitter.com/fiumangohacks" style="color: #00E35C;">Twitter</a>.
        </p>

        <p>&lt;3</p>
        <p>The MangoHacks Team</p>

        <div class="footer" style="background-color: #20396D;margin-top: 10px;color: white;padding: 5px;font-size: 11px;">
            <p>
                &copy; 2016 MangoHacks
            </p>
        </div>
    </div>
</div>
