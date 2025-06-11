<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahkan Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .btn-google {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background-color: #4285F4;
            /* Warna biru Google */
            border: none;
        }

        .btn-google:hover {
            background-color: #357ae8;
            /* Warna hover */
        }

        .btn-google i {
            font-size: 1.2rem;
        }

        .logo-img {
            max-width: 150px;
            /* Atur ukuran logo */
            height: auto;
            display: block;
            margin: 0 auto 20px;
            /* Tengah dan beri jarak bawah */
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <!-- Tambahkan logo di sini -->
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo-img">

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Login</button>
                            <p class="text-center">or</p>
                            <a href="{{ route('auth.google') }}" class="btn btn-google w-100 mb-3">
                                <i class="fab fa-google"></i> Register with Google
                            </a>
                        </form>
                        <p class="mt-3 text-center">
                            Don't have an account? <a href="{{ route('register') }}">Register</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
