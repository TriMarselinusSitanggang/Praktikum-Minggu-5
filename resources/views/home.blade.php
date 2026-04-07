<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body { font-family: sans-serif; text-align: center; margin-top: 100px; background-color: #f8f9fa; }
        .container { background: white; padding: 40px; display: inline-block; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        .logout-btn { color: #dc3545; text-decoration: none; font-weight: bold; margin-top: 20px; display: block; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halo, {{ Auth::user()->name }}!</h1>
        <p>Anda berhasil masuk ke halaman utama.</p>
        
        <form action="/logout" method="GET">
            @csrf
            <button type="submit" style="background:none; border:none; color:red; cursor:pointer; font-weight:bold;">Logout</button>
        </form>
    </div>
</body>
</html>