<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Awal</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(to right, #4b0082, #2c003e);
            font-family: Arial, sans-serif;
            color: #fff;
            text-align: center;
            border: 5px solid #fff;
            box-sizing: border-box;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        a {
            display: inline-block;
            margin: 0.5rem;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            color: #fff;
            text-decoration: none;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50px;
            transition: all 0.3s ease-in-out;
        }
        a:hover {
            background: rgba(255, 255, 255, 0.4);
            transform: scale(1.1);
        }
        p {
            margin-top: 2rem;
            font-size: 0.9rem;
        }
        p br {
            display: block;
        }
        .container {
            border: 2px solid #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang</h1>
        <a href="/register">Daftar</a>
        <a href="/login">Login</a>
        <a href="/home">Home</a>
        <p>Created By <br><br>
        Jamlulail MI22B 2257401096</p>
    </div>
</body>
</html>