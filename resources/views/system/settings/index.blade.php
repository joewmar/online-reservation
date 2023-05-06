@include('partials.header')
@include('components.system.navbar')
@php
     $arrSideBarSettings = 
        [
            "Sales " => [
                "icon" => "fa-solid fa-chart-simple",
                "link" => "/system/settings/sales"
            ],
            "Room" => [
                "icon" => "fa-sharp fa-solid fa-house",
                "link" => "/system/settings/accommodation",
            ],
            "Rides" => [
                "icon" => "fa-solid fa-motorcycle",
                "link" => "/system/settings/rides",
            ],
            "Accounts" => [
                "icon" => "fa-solid fa-users",
                "link" => "/system/settings/account",
            ],
        ];
@endphp
<main class="flex">
    <x-sidebar :items="$arrSideBarSettings" :active="$activeBar"/>

    {{-- @if(Request::is('system/home'))
        @include('system.dashboard.index')
    @elseif(Request::is('system/analytics'))
        @include('system.analytics.index')
    @elseif(Request::is('system/reservation'))
        @include('system.reservation.index')
    @elseif(Request::is('system/rooms'))
        @include('system.rooms.index')
    @elseif(Request::is('system/accommodations'))
        @include('system.accommodations.index')
    @elseif(Request::is('system/announcement'))
        @if(Request::is('system/announcement'))
            @include('system.announcement.index')
        @elseif(Request::is('/system/announcement/messages'))
            @include('system.announcement.messages')
        @endif
    @elseif(Request::is('system/feedback'))
        @include('system.feedback.index') --}}
    {{-- @endif --}}

</main>

@include('partials.footer')