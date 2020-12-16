<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('login.submit') }}" method="post">
    @csrf
    username:
    <input type="text" name="username">
    password:
    <input type="password" name="password">
    <button type="submit">Login</button>
</form>
<div class="form-group row mb-0">
    <div class="col-md-8 offset-md-4">
        <a href="{{ route('login.github','github') }}" class="btn btn-primary"><i class="fa fa-github"></i> Github</a>
    </div>
</div>
</body>
</html>
