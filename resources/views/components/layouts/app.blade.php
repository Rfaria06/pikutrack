<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}" data-theme="piku">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])


    <title>{{$title ?? 'Pikutrack'}}</title>

</head>

<body class="overflow-x-hidden overflow-y-auto">
    <livewire:nav.app.app-navbar />
    <x-container>{{$slot}}</x-container>
</body>

</html>
