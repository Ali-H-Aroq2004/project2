<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello {{$name}}</h1>
    <form action="about" method="post">
        @csrf
        <input type="text" name="name" id="name">
        <select name="" id="">
            @foreach ($departments as $key => $department)
                <option value="{{$key}}">{{$department}}</option>
            @endforeach
        </select>
        <input type="submit" value="send">
    </form>
</body>
</html>
