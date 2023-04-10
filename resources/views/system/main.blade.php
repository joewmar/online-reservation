@include('partials.header')
@include('components.system.navbar')

<main class="flex">
    @include('components.system.sidebar', [$activeBar])
    @if(Request::is('system/home'))
        @include('system.dashboard.index')
    @elseif(Request::is('system/analytics'))
        @include('system.analytics.index')
    @elseif(Request::is('system/reservation'))
        @include('system.reservation.index')
    @elseif(Request::is('system/rooms'))
        @include('system.rooms.index')
    @elseif(Request::is('system/accommodations'))
        @include('system.accommodations.index')
    @elseif(Request::is('system/accounts'))
        @include('system.accounts.index')
    @endif

</main>

{{-- Calendar Control --}}
@if(Request::is('system/reservation'))
    <script type="text/javascript" src='{{Vite::asset("resources/js/fullcalendar/dist/index.global.js")}}'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            aspectRatio: 2,
            height: 450,
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
        });
        calendar.render();
        });

  </script>
@endif

@include('partials.footer')