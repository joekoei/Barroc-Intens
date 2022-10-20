@extends('layouts.auth')
@section('content')

    <div id='test'></div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('test');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                nextDayThreshold:'23:59',
                initialView: 'dayGridMonth',
                headerToolbar: {
                    start: 'title',
                    center: 'dayGridMonth timeGridWeek timeGridDay',
                    end: 'prev next'
                },
            });
            <?php
            foreach ($meetings as $meeting):
            ?>
            calendar.addEvent({
                title: '<?php echo $meeting->remark ?>',
                start: '<?php echo $meeting->date_added ?>',
                end: '<?php echo $meeting->date_added ?>',
                allDay: true
            });
            <?php endforeach;?>
            setTimeout(() => {
                calendar.render();
            },10)
        });
    </script>
@endsection
