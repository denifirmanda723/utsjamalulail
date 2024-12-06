<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        p {
            font-size: 1rem;
            margin: 0.5rem 0;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Home</h1>
        <p>{{ $name }}</p>
        <p>{{ $nim }}</p>
        <p>{{ $class }}</p>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>