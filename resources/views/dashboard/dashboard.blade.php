{{-- start TOP --}}
@include('dashboard.include.top')
{{-- end TOP --}}



<div class="container-scroller">

    {{-- start NAV --}}
    @include('dashboard.include.nav')
    {{-- end NAV --}}

    <div class="container-fluid page-body-wrapper">

        {{-- start TODO --}}
        @include('dashboard.include.todo')
        {{-- end TODO --}}

        {{-- start SIDE --}}
        @include('dashboard.include.side')
        {{-- end SIDE --}}
        @yield('content')
    </div>


</div>

{{-- start FOOTER --}}
@include('dashboard.include.footer')
{{-- end FOOTER --}}



{{-- start BOTTOM --}}
@include('dashboard.include.bottom')
{{-- end BOTTOM --}}
