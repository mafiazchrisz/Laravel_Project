<!DOCTYPE html>
<html lang="{{ str_replace('', '-', app()->getLocale()) }}">

<head>

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title-m-b-md">
                Product Store
            </div>
            <div class="links">
                <a href="{{ config('app.url')}}/products"> View Products </a>
            </div>
        </div>
    </div>
</body>

</html>