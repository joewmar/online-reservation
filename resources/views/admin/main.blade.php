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
@include('partials.footer')