<!-- resources/views/components/guest-layout.blade.php -->
<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

        <title>{{$title ?? 'Pikutrack'}}</title>
</head>

<body>
    {{$slot}}
</body>

</html>