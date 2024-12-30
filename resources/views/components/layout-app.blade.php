<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}} @isset($pageTitle) - {{$pageTitle}} @endisset</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-user-bar/>
    {{$slot}}


    @vite(['resources/js/app.js'])
</body>
</html>