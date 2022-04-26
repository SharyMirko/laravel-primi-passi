<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First steps in Laravel</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                @foreach ($menu as $link)
                <li><a href="{{ $link['link'] }}">{{ $link['name'] }}</a></li>
                @endforeach
            </ul>
        </nav>
    </header>
    <main>
        <h1>Hello world</h1>
    </main>
</body>
</html>