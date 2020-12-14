<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
</head>
<body>
    <div class="container"> 
        @if (session('isLogged') != "true")
            <h1> Welcome to Home page </h1>
            <a href="login"> Login </a> <br>
            <a href="signup"> Sign Up </a>    
        @else
            <form action="logout" method="POST">@csrf<button name="logout"> Logout </button></form>           
        @endif
        
    </div>
</body>
</html>