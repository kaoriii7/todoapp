<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="../css/reset.css" />
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            background: #483D8B;
            display: flex;
            
        }
        .container {
            width: 60%;
            background: #fff;
            margin: auto;
            padding: 20px 30px;
            border-radius: 10px;
        }
        h1 {
            font-size: 25px;
            margin: 0;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>@yield('title')</h1>
        <div class="content">
            @yield('content')
        </div>
        <div class="list">
            @yield('list')
        </div>
    </div>
</body>
</html>