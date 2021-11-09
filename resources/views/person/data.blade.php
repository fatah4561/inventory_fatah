<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Nama nama mahasiswa</h1>
    <ol>
        @if($names)
            @foreach($names as $name)
                <li>{{$name}}</li>
            @endforeach
        @endif
    </ol>
</body>
</html>