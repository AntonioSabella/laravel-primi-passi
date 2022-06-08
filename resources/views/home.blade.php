<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <title>Hello World</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
        }
        .container {
            width: 1000px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 300px;
            margin: 0 auto;
            background-color: bisque;
            text-align: center;
            border-radius: 0.5rem;
            margin-top: 5rem;
        }

        h1 {
            margin-bottom: 1rem;
        }
        ul {
            display: flex;
            justify-content: center;
            column-gap: 1rem;
            list-style: none;
            width: 60%;
            text-align: center;
            padding: 0;
            border: 1px dashed cornflowerblue;
        }
        li {
            text-align: center;
            padding: 0.2rem 0.5rem;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Hello World!</h1>
    <ul>
        <li><a href="#">{{ $name }}</a></li>
        <li><a href="#">{{ $surname }}</a></li>
        <li><a href="#">{{ $role }}</a></li>
        <li><a href="#">{{ $passions }}</a></li>

    </ul>
    <ul>
        @foreach ($informations as $key => $value)
            <li><strong>{{$key}}</strong> : {{$value}}</li>
        @endforeach
    </ul>
    </div>
</body>
</html>