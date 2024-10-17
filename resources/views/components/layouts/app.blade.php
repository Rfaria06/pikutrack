<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}" data-theme="piku">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])


        <title>{{$title ?? 'Pikutrack'}}</title>

        <!-- Include Bubble Theme -->
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

        <!-- Include the Quill library -->
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

</head>

<body class="overflow-x-hidden overflow-y-auto">
    <livewire:nav.app.app-navbar />
    <x-layouts.flash />
    <x-container>{{$slot}}</x-container>
</body>

</html>