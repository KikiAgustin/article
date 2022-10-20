<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>template</title>

    @include('includes.style')

</head>

<body>

    @include('includes.sidebar')

    <div class=" bg-light" id="main-content">

        @include('includes.navbar')
        <!-- content -->
        <div class="row p-4">
            @yield('content')

            @include('includes.recent')
        </div>
    </div>
    </div>

    @include('includes.script')

</body>

</html>