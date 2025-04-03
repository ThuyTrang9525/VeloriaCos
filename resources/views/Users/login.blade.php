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
        <a href="{{ route('register') }}" class="btn">Register</a>
        <button class="active">Login</button>
    </div>
    
    <p>If you have an account, sign in with your email address.</p>

    @if(session('error'))
        <p class="error-message">{{ session('error') }}</p>
    @endif

    <form action="{{ route('postlogin') }}" method="POST">
    @csrf
    <div class="input">
        <label for="email">Email address *</label>
        <input type="email" id="email" name="email" placeholder="Email address *" required>
    </div>

    <div class="input">
        <label for="password_hash">Password *</label>
        <input type="password" id="password_hash" name="password_hash" placeholder="Password *" required>
    </div>

    <button type="submit" class="register-btn">Login</button>
</form>
</div>

</body>
</html>