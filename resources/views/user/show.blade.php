<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>user.show</title>

    </head>
    <body>
        <form method="post" action="http://local.laravel.com/user/show">
            <div>user：{{ $id }}</div>
            <div><input type="text" name="username" value="{{ old('username') }}"></div>
            <div><input type="file" name="photo" value=""></div>
            <div><input type="submit" name="" value="submit"></div>
        </form>
    </body>
</html>