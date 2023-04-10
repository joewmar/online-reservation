<aside class="mt-16 hidden md:block">
<ul class="fixed py-3 h-full menu bg-base-100 w-56 p-2">
    @foreach ($sidebarItems as $key => $item)
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