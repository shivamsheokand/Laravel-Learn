<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Styled Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f7f7f7, #e0e0e0);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 350px;
            text-align: center;
            box-sizing: border-box;
            transition: transform 0.3s ease-in-out;
        }

        .form-container:hover {
            transform: translateY(-10px);
        }

        h1 {
            font-size: 28px;
            margin-bottom: 30px;
            color: #333;
            font-weight: bold;
            text-transform: uppercase;
        }

        input[type="email"],
        input[type="text"] {
            width: 100%;
            padding: 15px;
            margin: 15px 0;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            transition: all 0.3s ease-in-out;
            background-color: #f9f9f9;
        }

        input[type="email"]:focus,
        input[type="text"]:focus {
            outline: none;
            border-color: #007BFF;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.3);
            background-color: #f0f8ff;
        }

        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.2);
            transition: all 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
            box-shadow: 0 10px 20px rgba(0, 123, 255, 0.3);
            transform: translateY(-5px);
        }

        button:active {
            background-color: #004085;
            box-shadow: 0 5px 10px rgba(0, 123, 255, 0.2);
            transform: translateY(2px);
        }

        .form-container p {
            font-size: 14px;
            color: #777;
            margin-top: 10px;
        }

        .form-container p a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        .form-container p a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h1>Mail Form</h1>
    <form action="/sendmail" method="post">
        @csrf
        <input name="email" type="email" placeholder="Enter your Email" required />
        <input name="subject" type="text" placeholder="Enter your Subject" required />
        <input name="message" type="text" placeholder="Enter your message" required />
        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
