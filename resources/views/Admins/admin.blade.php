<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Product List</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Passion+One:wght@400;700;900&family=Quicksand:wght@300..700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body>
    <div class="container d-flex">
        <!-- Sidebar -->
        <nav class="sidebar bg-light p-3 vh-100">
            <img src="{{ asset('images/LogoVeloriaCos.png') }}" alt="">
            <ul class="nav flex-column pt-4">
                <li class="nav-item"><a href="#" class="nav-link" onclick="showDashboard()">Dashboard</a></li>
                <li class="nav-item"><a href="#" class="nav-link" onclick="showProducts()">Products</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Customers</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Orders</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Reviews</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Favorites</a></li>
            </ul>
            <button class="btn-logout">Logout</button>
        </nav>

        <!-- Main Content -->
        <div id="dashboard"  class="content active">
            <div class="container">
                <div class="row">
                <h1>Dashboard</h1>
                    <div class="col-sm-3 content-pd">
                        <button class="stats-button">Products <br> ()</button>
                    </div>
                    <div class="col-sm-3 content-pd">
                        <button class="stats-button">Users <br> ()</button>
                    </div>
                    <div class="col-sm-3 content-pd">
                        <button class="stats-button">Orders <br> ()</button>
                    </div>
                    <div class="col-sm-3 content-pd">
                        <button class="stats-button">Reviews <br> ()</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products Content -->
        <div id="products" class="content">
            <h1>Products</h1>
            <div class="container">
                <div class="row">
                    @foreach ($products as $pd)
                        <div class="col-sm-3 content-pd">
                            <img src="{{ $pd->primaryImage ? asset($pd->primaryImage->image_url) : asset('images/default.jpg') }}" alt="">
                            <div class="product-info">
                                <p class="product-title">{{ $pd->name }}</p>
                                <p class="product-price">{{ number_format($pd->price, 0, ',', '.') }} ₫</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function showProducts() {
            document.getElementById('dashboard').classList.remove('active');
            document.getElementById('products').classList.add('active');
        }

        function showDashboard() {
            document.getElementById('products').classList.remove('active');
            document.getElementById('dashboard').classList.add('active');
        }
        function setActiveLink(link) {
            const links = document.querySelectorAll('.nav-link');
            links.forEach((l) => {
                l.classList.remove('active');
            });
            
            link.classList.add('active');
        }

        document.querySelectorAll('.nav-link').forEach((link) => {
            link.addEventListener('click', function() {
                setActiveLink(this);
            });
        });
    </script>
</body>

</html>
