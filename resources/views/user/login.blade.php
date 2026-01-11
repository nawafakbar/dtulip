<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bgd Hydrofarm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="user-assets/style.css">
    <link rel="stylesheet" href="user-assets/loginregis.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* CSS Tambahan agar ikon mata bisa diklik dengan nyaman */
        .input-group-text {
            cursor: pointer;
            background-color: transparent; /* Opsional: biar background nyatu sama input */
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center auth-image-panel">
                <div class="auth-image-arch">
                    <img src="Images/image1.png" alt="Hydroponic Greens">
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="auth-form-container">
                    <h2 class="auth-title">Welcome Back</h2>
                    <p class="auth-subtitle">Don't have an account? <a href="register.html">Sign Up</a></p>

                    <form action="#" method="POST" class="mt-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="youremail@example.com">
                        </div>
                        
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" placeholder="••••••••">
                                <span class="input-group-text" id="togglePassword">
                                    <i class="bi bi-eye-slash" id="toggleIcon"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-auth-primary">Login</button>
                        </div>
                    </form>

                    <div class="auth-separator">
                        <span>or</span>
                    </div>

                    <div class="d-grid">
                        <a href="#" class="btn btn-auth-secondary">
                            <img src="Images/google.png" alt="Google logo" class="me-2">
                            Login with Google
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        const toggleIcon = document.querySelector('#toggleIcon');

        togglePassword.addEventListener('click', function () {
            // Toggle tipe input antara password dan text
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            
            // Toggle ikon mata (slash atau biasa)
            toggleIcon.classList.toggle('bi-eye');
            toggleIcon.classList.toggle('bi-eye-slash');
        });
    </script>
</body>

</html>