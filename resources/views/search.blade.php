<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Realty</title>
    @livewireStyles
</head>
<body>
<div class="container mx-auto">
    <h1 class="text-3xl text-center my-10">
        Realty
    </h1>
    @livewire('search')
</div>
@livewireScripts
</body>
</html>