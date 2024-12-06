<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
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
        .container {
            border: 2px solid #fff;
            padding: 2rem;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input {
            width: 80%;
            padding: 0.75rem;
            margin: 0.5rem 0;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        button {
            margin-top: 1rem;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            color: #fff;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }
        button:hover {
            background: rgba(255, 255, 255, 0.4);
            transform: scale(1.1);
        }
        a {
            display: inline-block;
            margin-top: 0.5rem;
            font-size: 1rem;
            color: #fff;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }
        a:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="/login" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <a href="http://127.0.0.1:8000/">Kembali</a>
    </div>
</body>
</html>
