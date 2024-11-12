<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('empleado.password')}}" method="PUT">
        @csrf
        @method('PUT')
        <input type="hidden" value="{{ $token }}">
        <input type="text" value="{{ old('usuario') }}">
        
    </form>
</body>
</html>