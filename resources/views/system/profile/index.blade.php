@include('partials.header')
@include('components.system.navbar')
@php
     $arrSideBarSettings = 
        [
            "Edit Profile " => [
                "icon" => "fa-solid fa-address-card",
                "link" => "/system/profile/edit"
            ],
            "Change Password" => [
                "icon" => "fa-sharp fa-solid fa-key",
                "link" => "/system/profile/changepass",
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