@extends('layouts.index')
@section('content')
@include('calendar.components.modal')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    // left: 'dayGridMonth,timeGridWeek,timeGridDay',
                    // center: 'prev title next',
                    // right: 'listMonth,listWeek,listDay'

                    left: 'prev,today,next',
                    center:'title' ,
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                views: {
                    timeGridWeek: {
                        buttonText: 'Week', 
                    },
                    timeGridDay: {
                        buttonText: "Day",
                    },
                    dayGridMonth: {
                        buttonText: "Month",
                    },
                    // title:{
                    //     buttonText :'Today',
                    // }


                    listDay: { // Customize the name for listDay
                        buttonText: 'Day events',
                    },
                    listWeek: { // Customize the name for listWeek
                        buttonText: 'Week events'
                    },
                    listMonth: { // Customize the name for listMonth
                        buttonText: 'Month events'
                    },

                },
                initialView: "timeGridWeek",
                slotMinTime: "06:00:00", // 
                slotMaxTime: "24:00:00",
                nowIndicator: true,
                selectable: true,
                selectMirror: true,
                selectOverlap: true,
                weekends: true,

                selectAllow: (info) => {
                    let instant = new Date()
                    return info.start > instant
                },
                select: (info)=> {
                    let start = info.start
                    let end = info.end
                    console.log(info);


                    if (end.getDate() - start.getDate() > 0 && !info.allDay) {
                        alert("test test allah")
                        calendar.unselect()
                        return
                    }
                    document.getElementById("date-start").value = formatDate(start).day
                    if (info.allDay) {
                        document.getElementById("date-end").value = formatDate(start).day
                        document.getElementById("time-start").value = "06:00:00"
                        document.getElementById("time-end").value = "24:00:00"
                    } else {
                        document.getElementById("date-end").value = formatDate(end).day
                        document.getElementById("time-start").value = formatDate(start).time
                        document.getElementById("time-end").value = formatDate(end).time
                    }

                }
                
            });
            calendar.render();
        });
    </script>
    <div class="ml-[15vw] ">
        <div class="py-4 px-8" id='calendar'></div>
    </div>
@endsection
