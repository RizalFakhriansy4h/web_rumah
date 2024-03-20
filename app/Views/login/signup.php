<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/login.css">
</head>
<body class="bg-dark">
        <div class="container py-5 d-flex justify-content-center align-items-center h-100">
            <form class="login-form bg-light p-4 rounded shadow" method="post" autocomplete="off" action="/signuping">
                <h2 class="text-dark mb-4">Daftar</h2>
                <div class="mb-3">
                    <label for="nama" class="form-label text-dark">Nama :</label> 
                    <input type="text" id="nama" name="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-dark">Email:</label> 
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-dark">Password:</label> 
                    <input type="password" id="password" name="password1" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="repeat-password" class="form-label text-dark">Repeat Password:</label> 
                    <input type="password" id="repeat-password" name="password2" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>
                <p class="text-dark mt-3">Sudah Punya Akun ? <a href="/login">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>
