<!Document HTML>
<html>
<head>
    <meta charset="utf-8" />
    @if(!empty($chat_group_name))
    <title>{{ $chat_group_name }} | {{ config('app.name') }}</title>
    @else
    <title>Main | {{ config('app.name') }}</title>
    @endif
@livewireStyles
</head>
<body>
{{ $slot }}
@livewireScripts
</body>
</html>