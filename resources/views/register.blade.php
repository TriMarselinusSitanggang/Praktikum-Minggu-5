<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; margin-top: 80px; color: #333; }
        .card { width: 380px; }
        h2 { font-size: 28px; margin-bottom: 30px; }
        .form-group { display: flex; align-items: center; margin-bottom: 15px; }
        label { width: 120px; font-size: 14px; }
        input { flex: 1; padding: 8px; border: 1px solid #ddd; border-radius: 5px; }
        .footer { display: flex; align-items: center; gap: 20px; margin-top: 20px; }
        button { background: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 6px; cursor: pointer; }
        a { color: #198754; text-decoration: none; font-size: 13px; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Register</h2>
        <form method="POST" action="/register">
            @csrf
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <label>Ulangi Pass</label>
                <input type="password" name="password_confirmation" required>
            </div>
            <div class="footer">
                <button type="submit">Daftar</button>
                <a href="/login">Sudah punya akun? Login</a>
            </div>
            @if (session('success'))
                <div style="color: #155724; background-color: #d4edda; border: 1px solid #c3e6cb; padding: 10px; border-radius: 5px; font-size: 14px; margin-bottom: 15px;">
                    <p>{{ session('success') }}</p>
                </div>
            @endif
        </form>
    </div>
</body>
</html>