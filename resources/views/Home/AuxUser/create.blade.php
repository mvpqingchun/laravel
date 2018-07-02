<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>create</title>

    </head>
    <body>
        <form method="post" action="store">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div><input type="text" name="nickname" value=""></div>
            <br />
            <div><input type="text" name="status" value=""></div>
            <br />
            <div><input type="file" name="avatar" value=""></div>
            <br />
            <div><input type="submit" name="" value="submit"></div>
        </form>
        
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </body>
</html>