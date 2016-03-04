@extends('layouts.master')

@section('title')
    Check-ins | MangoHacks '16
@endsection

@section('head_actions')
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css">
    <style>
        .tracks-wrap:after {
            background: rgba(32, 176, 86, 0.9);
        }
        @media (min-width: 490px){
            .tracks-wrap {
                padding: 60px 0;
                margin-bottom: 40px;
            }
        }
    </style>
@endsection

@section('footer_actions')
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#registrations').DataTable();
        });
    </script>
@endsection

@section('body-class', 'class="home checkins"')

@section('menu')
    <a href="/" class="logo">
        <img class="responsive-image" src="/img/logo.png" alt="MangoHacks">
    </a>
    <div class="menu">
        <a href="/#about">About</a>
        <a href="/#faq">FAQs</a>
        <a href="/live">Live</a>
    </div>
    <a class="mobile-trigger active" href="#" id="small-menu"><i class="fa fa-bars"></i></a>
    <a class="mobile-close" href="#"><i class="fa fa-times"></i></a>
@endsection


@section('content')
    <div class="tracks-wrap">
        <div class="container">
            <h1 class="heading">Checkins</h1>
            <p style="font-weight: bold;">Total Checked in: {{ $checkins }}</p>
        </div>
    </div>
    <div class="container">
        <table id="registrations" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>School</th>
                    <th>RSVP'd</th>
                    <th>Checked In</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($attendees as $attendee)
                    <tr>
                        <td>{{ $attendee['first_name'] }}</td>
                        <td>{{ $attendee['last_name'] }}</td>
                        <td>{{ $attendee['email'] }}</td>
                        <td>{{ $attendee['school'] }}</td>
                        <td>{{ ($attendee['rsvp'] == 1) ? 'yes': 'no'}}</td>
                        <td>
                            @if($attendee['checked_in'] == 0)
                                <a class="btn btn-success" href="/checkin/{{ $attendee['id'] }}">Check In</a>
                            @else
                                <a class="btn btn-default" href="/checkin/{{ $attendee['id'] }}">Uncheck in</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
