<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        
        <style>
            body { font-family: sans-serif; display: flex; justify-content: center; margin-top: 100px; color: #333; }
            .card { width: 400px; }
            h1 { font-size: 28px; margin-bottom: 20px; color: #034;margin-top:0;width:100%; }
            h2 { font-size: 20px; margin-bottom: 30px; }
            .form-group { display: flex; align-items: center; margin-bottom: 15px; }
            label { width: 80px; font-size: 14px; }
            input { flex: 1; padding: 8px; border: 1px solid #ddd; border-radius: 5px; outline: none; }
            .footer { display: flex; align-items: center; gap: 20px; margin-top: 20px; }
            button { background: #198754; color: white; border: none; padding: 10px 20px; border-radius: 6px; cursor: pointer; }
            a { color: #007bff; text-decoration: none; font-size:18px; line-height: 1.2; }
            p { color: #ff0000; text-decoration: none; font-size: 20px;  }
        </style>

    </head>
    <body>
        <div class="card">
            <h1>Nama : Tri Marselinus S</h1>
            <h1>NIM : 2311102209</h1>
            <h2>Login</h2>
            <form method="POST" action="/auth">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>
                <div class="footer">
                    <button type="submit">Login</button>
                </div>
            </form>
            @if(session('error'))
                <p style="color:red">{{ session('error') }}</p>
                <a href="/registration">Belum punya<br>akun? Register</a>
            @endif
        </div>
    </body>
</html>