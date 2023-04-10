@include('partials.header')
@include('components.system.navbar')

<main class="flex">
    @include('components.system.sidebar', [$activeBar])
    
    
</main>

{{-- Calendar Control --}}

@include('partials.footer')