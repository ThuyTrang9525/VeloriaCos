<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Passion+One:wght@400;700;900&family=Quicksand:wght@300..700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="" href="assets\css\register_login.css">
</head>
<body>
    <div class="container">
        <div class="tabs">
        <a href="{{route('login')}}" class="btn">Login</a>
        <button class="active">Register</button>
        </div>
        <p>There are many advantages to creating an account: the payment process is faster, shipment tracking is possible and much more.</p>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class='input'>
                <label for="name">Username *</label>
                <input type="text" id="name" name="name" placeholder="Username *" required>
            </div>

            <div class='input'>
                <label for="email">Email address *</label>
                <input type="email" id="email" name="email" placeholder="Email address *" required>
            </div>

            <div class='input'>
                <label for="password">Password *</label>
                <input type="password" id="password" name="password" placeholder="Password *" required>
            </div>

            <div class='input'>
                <label for="password_confirmation">Confirm Password *</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password *" required>
            </div>

            <p class="link">Already have an account? <a href="{{route('login')}}">Log in</a></p>
                <button class="register-btn">Register</button>
                @if ($errors->any())
                <div class="error">
                    @foreach ($errors->all() as $error)
                        <p style="color: red;">{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </form>

    </div>
</body>
</html>
