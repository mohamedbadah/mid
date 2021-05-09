<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Laravel Development</title>
    <link href="css/app.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">

        <div>
            <h3>Please enter you name: </h3>
            @csrf
            <form class="form-inline" method="post" action="formName">
                @csrf
                <input type="hidden" name="_token" value="ZTp076smOAQZQcLjplDuaAjj9PukkjH4VJYbJlbZ" />
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <hr>
            <h3>Hello, nobody!</h3>
        </div>
    </div>
    <script src="js/app.js" type="text/js"></script>
</body>

</html>
