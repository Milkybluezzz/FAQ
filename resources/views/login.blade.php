<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - BandungAppFAQ</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="signup-container">
        <h2>Daftar ke BandungAppFAQ</h2>
        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>        
        <p>Sudah punya akun? <a href="/login">Masuk di sini</a></p>
    </div>
</body>
</html>
