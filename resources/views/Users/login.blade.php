<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Passion+One:wght@400;700;900&family=Quicksand:wght@300..700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="" href="assets\css\register_login.css">

</head>
<body>
    <div class="container">
        <div class="tabs">
            <button class="active">Login</button>
            <a href="{{route('register')}}" class="btn">Register</a>
            </div>
        <p>If you have an account, sign in with your username or email address.</p>
        <input type="email" placeholder="Email address *">
        <input type="password" placeholder="Password *">
        <p class="link">Don't have an account? <a href="{{route('register')}}">Sign up</a></p>
        <button class="register-btn">Register</button>
    </div>
</body>
</html>