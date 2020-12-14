<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Signup page </title>
    <style> 

    </style>
</head>
<body>
    <form action="signup" method="POST">
        @csrf
        <div class="from-design">
            <h1> Create Your account here </h1>
            <input type="radio" name="utype" value="customer" required>Customer
            <input type="radio" name="utype" value="seller" required>Seller <br>
            <input type="email" name="email" placeholder="Enter Email" required> <br>
            <input type="text" name="uname" placeholder="Enter Username" required> <br>
            <input type="password" name="pass" placeholder="Enter Password" required> <br>
            <input type="submit">
        </div>
    </form>
</body>
</html>