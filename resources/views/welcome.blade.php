<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Selamat Datang di ToDoList Keren</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('#'); /* Ganti dengan path gambar Anda */
            background-size: cover;
            background-position: center;
        }

        .landing-container {
            background-color: rgba(255, 255, 255, 0.9); /* Sedikit transparan */
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            max-width: 800px;
            width: 90%;
        }

        .logo-container {
            margin-bottom: 30px;
        }

        .logo {
            /* Anda bisa mengganti ini dengan gambar logo Anda */
            width: 150px;
            height: 150px;
            background-color: #007bff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2em;
            color: white;
            margin: 0 auto 20px;
            animation: pulse 2s infinite alternate;
        }

        .logo img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 50%;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 2.5em;
        }

        p {
            color: #555;
            font-size: 1.1em;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .auth-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        .auth-button {
            display: inline-block;
            padding: 12px 30px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .login-button {
            background-color: #007bff;
        }

        .register-button {
            background-color: #28a745;
        }

        .login-button:hover, .register-button:hover {
            opacity: 0.8;
            transform: translateY(-2px); /* Efek hover sedikit naik */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Animasi sederhana */
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.05);
            }
        }
    </style>
</head>
<body class="antialiased">
    <div class="landing-container">
        <div class="logo-container">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Aplikasi">
            </div>
        </div>
        <h1>Selamat Datang di Aplikasi ToDoList Elegan</h1>
        <p>Kelola tugas-tugas Anda dengan mudah dan efisien. Tingkatkan produktivitas Anda dengan antarmuka yang bersih dan intuitif.</p>
        <div class="auth-buttons">
            @if (Route::has('login'))
                <a href="{{ route('login') }}" class="auth-button login-button">Masuk</a>
            @endif

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="auth-button register-button">Daftar</a>
            @endif
        </div>
    </div>
</body>
</html>
