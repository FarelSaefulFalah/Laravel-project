<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Hewan</title>
</head>

<body>
    @foreach ($hewan as $data)
        @if ($data == 'FireFly')
            <li>{{ $data }} - Dia adalah hewan terimoet</li>
        @else
            <li>{{ $data }}</li>
        @endif
    @endforeach
</body>

</html>
