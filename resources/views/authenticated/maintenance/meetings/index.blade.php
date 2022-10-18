@extends('layouts.auth')
@section('content')

    <div id='test'></div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('test');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridWeek'
            });
            calendar.render();
        });
    </script>
@endsection
