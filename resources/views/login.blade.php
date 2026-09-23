<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .login-box {
            width: 350px;
            margin: 100px auto;
            padding: 25px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #3490dc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2779bd;
        }
    </style>
</head>

<body>

<div class="login-box">

    <h2>Login</h2>

    <form>

        <label for="email">Email</label>

        <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email"
        >

        <label for="password">Password</label>

        <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your password"
        >

        <button type="submit">Login</button>

    </form>

</div>

</body>
</html>