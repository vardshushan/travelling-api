<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.head')
</head>
<body>
@include('admin.layouts.nav')

@include('admin.layouts.side')

<main id="main" class="main">
    @include('admin.layouts.alerts')

    @yield('admin.content')
</main>

@include('admin.layouts.scripts')

</body>
</html>
