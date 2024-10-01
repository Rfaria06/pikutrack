<!-- resources/views/components/guest-layout.blade.php -->
<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}" data-theme="synthwave">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.scss')

        <title>{{$title ?? 'Pikutrack'}}</title>
</head>

<body>
    <livewire:nav.guest.guest-navbar />
    <x-container>{{$slot}}</x-container>
</body>

</html>