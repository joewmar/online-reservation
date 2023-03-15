@include('partials.header')
@php
    $arrNavItems =[
      "Home" => "/", 
      "About Us" => "/about", 
      "Accommodation" => "/accommodation",
      "Contact Us" => "/contact"
    ];
@endphp
@foreach ($arrNavItems as $key => $item)
  @if ($key === $activeNav)
    <li><a class="text-primary" href="{{$item}}">{{$key}}</a></li>
  @else
    <li><a href="{{$item}}">{{$key}}</a></li>
  @endif
@endforeach