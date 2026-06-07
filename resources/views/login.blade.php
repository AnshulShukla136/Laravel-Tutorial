<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box{
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            width: 300px;
            text-align: center;
        }

        h1{
            margin-bottom: 20px;
        }

        input{
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button{
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover{
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h1>Login</h1>

        <form action="login" method="post">
            @csrf

            <input type="text" name="user" placeholder="Enter Name">

            <input type="password" name="password" placeholder="Enter Password">

            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>
