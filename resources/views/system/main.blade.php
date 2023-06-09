@include('partials.header')
<x-system_navbar />

<main class="flex">
    <x-sidebar :items="$sidebarItems" :active="$activeBar"/>
    @if(Request::is('system/home'))
        @include('system.dashboard.index')
    @elseif(Request::is('system/analytics'))
        @include('system.analytics.index')
    @elseif(Request::is('system/reservation'))
        @include('system.reservation.index')
    @elseif(Request::is('system/rooms'))
        @include('system.rooms.index')
    @elseif(Request::is('system/tour'))
        @include('system.tour.index')
    @elseif(Request::is('system/announcement'))
        @if(Request::is('system/announcement'))
            @include('system.announcement.index')
        @elseif(Request::is('/system/announcement/messages'))
            @include('system.announcement.messages')
        @endif
    @elseif(Request::is('system/feedback'))
        @include('system.feedback.index')
    @elseif(Request::is('system/webcontent'))
        @include('system.webcontent.index')
    @endif

</main>
@include('partials.footer')