@extends('layouts.template')
@section('contenido')

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js'></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'es',
            events: [
                @foreach($alumnos as $alumno)
                    {
                        title: '{{ $alumno->nombre_alumno }}',
                        start: '{{ $alumno->fecha_alumno }}'
                    },
                @endforeach
            ]
        });
        calendar.render();
    });
</script>
<div class="container mt-5">
    <div id='calendar'></div>
</div>




@endsection
