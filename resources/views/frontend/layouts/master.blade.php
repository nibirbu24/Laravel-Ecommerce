<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Ecommerce Project</title>
    
    @include('frontend.partials.styles')
</head>
<body>
    <div class="wrapper">

        @include('frontend.partials.nav')
        @yield('content')
        @include('frontend.partials.footer')
    </div>
@include('frontend.partials.scripts')
</body>
</html>