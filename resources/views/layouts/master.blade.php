@include('partials.headcontent')

<body>

@include('partials.navbar')

<div class="container-fluid">
    @yield('content')
</div>

@include('partials.footercontent')