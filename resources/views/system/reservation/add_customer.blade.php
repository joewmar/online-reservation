@include('partials.header')
<x-system_navbar />

<main class="flex">
    <x-sidebar :items="$sidebarItems" :active="$activeBar"/>

    <x-step1_reservation :action=""/>

</main>
@include('partials.footer')