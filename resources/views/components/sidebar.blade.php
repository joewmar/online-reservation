<aside class="shadow-inner mt-16 hidden md:block z-30">
    <ul class="fixed py-3 h-full menu bg-base-100 w-56 p-2">
        @foreach ($items as $key => $item)
            @if ($key === $active)
                <li>
                    <a href="{{$item['link']}}" class="hover-bordered active my-1">
                        <i class="{{$item['icon']}} h-5 w-5"></i>
                        {{$key}}
                    </a>
                    </li>
            @else
                <li>
                    <a href="{{$item['link']}}" class="hover-bordered my-1">
                        <i class="{{$item['icon']}} h-5 w-5"></i>
                        {{$key}}
                    </a>
                </li>
            @endif
        @endforeach

    </ul>
</aside>