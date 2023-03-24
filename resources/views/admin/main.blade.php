@include('partials.header')
@include('components.system.navbar')

<main class="flex">
    @include('components.system.sidebar', [$activeBar])
    @if (Request::is('system/analytics'))
        @include('admin.analytics.index')
    @elseif(Request::is('system/reservation'))
        @include('admin.reservation.index')
    @elseif(Request::is('system/rooms'))
        @include('admin.rooms.index')
    @elseif(Request::is('system/accommodations'))
        @include('admin.accommodations.index')
    @elseif(Request::is('system/accounts'))
        @include('admin.accounts.index')
    @endif

</main>
<script type="text/javascript" src='{{Vite::asset("resources/js/fullcalendar/dist/index.global.js")}}'></script>

<script>

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev, next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
      });
      calendar.render();
    });

  </script>
@include('partials.footer')