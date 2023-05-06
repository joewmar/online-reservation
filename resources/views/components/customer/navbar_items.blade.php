@foreach ($custNavbar as $key => $item)
  @if ($key === $activeNav)
    <li><a class="text-primary font-semibold" href="{{$item}}">{{$key}}</a></li>
  @else
    <li><a href="{{$item}}">{{$key}}</a></li>
  @endif
@endforeach
