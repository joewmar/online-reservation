@php
    $arrSideBarItems = 
   [
       "Analytics" => [
           "icon" => "fa-solid fa-chart-simple",
           "link" => "/system/analytics"
       ],
       "Reservation" => [
           "icon" => "fa-sharp fa-solid fa-book",
           "link" => "/system/reservation",
       ],
       "Rooms" => [
           "icon" => "fa-solid fa-house",
           "link" => "/system/rooms",
       ],
       "Accommodations" => [
           "icon" => "fa-solid fa-location-dot",
           "link" => "/system/accommodations",
       ],
       "Accounts" => [
           "icon" => "fa-solid fa-user",
           "link" => "/system/accounts",
       ],
   ];   
@endphp
  {{-- Sidebar --}}
<aside class="mt-16 hidden md:block">
<ul class="fixed h-full menu bg-base-100 w-56 p-2">
    @foreach ($arrSideBarItems as $key => $item)
        @if ($key === $activeBar)
            <li>
                <a href="{{$item['link']}}" class="active">
                    <i class="{{$item['icon']}} h-5 w-5"></i>
                    {{$key}}
                </a>
                </li>
        @else
            <li>
                <a href="{{$item['link']}}">
                    <i class="{{$item['icon']}} h-5 w-5"></i>
                {{$key}}
            </a>
            </li>
        @endif
    @endforeach

</ul>

</aside>
    {{-- Mobile bottom bar --}}
<div class="btm-nav md:hidden">
    @foreach ($arrSideBarItems as $key => $item)
            @if ($key === $activeBar)
                <a href="{{$item['link']}}" class="active">
                    <i class="{{$item['icon']}} h-5 w-5"></i>
                    <span class="btm-nav-label">{{$key}}</span>
                </a>
            @else
            <a href="{{$item['link']}}">
                <i class="{{$item['icon']}} h-5 w-5"></i>
                <span class="btm-nav-label">{{$key}}</span>
            </a>
            @endif
    @endforeach
</div>