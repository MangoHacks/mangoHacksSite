<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $table = 'attendees';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'age',
        'gender',
        'ethnicity',
        'origin',
        'school',
        'year',
        'major',
        'hackathons',
        'heard_source',
        'shirt_size',
        'linkedin_url',
        'github_url',
        'website_url',
        'resume_url',
        'alergies',
        'food_special',
        'gif',
        'rsvp',
        'checked_in',
        'confirmations_sent',
        'registration_date',
    ];
}
