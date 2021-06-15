
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
    <h1>Hello Welcome</h1>
    <h3>Enter you username and password to login</h3><br><br>

    <form action="profile" method="post">
        @csrf
        Username
        <input type="text" name="user"><span>@error('user')* {{$message}}
         @enderror</span><br><br>

        Password
        <input type="password" name="password"><span>@error('password')* {{$message}}
        @enderror</span><br><br>
        <button type="submit">Submit</button>
    
    </form>
</body>
</html>