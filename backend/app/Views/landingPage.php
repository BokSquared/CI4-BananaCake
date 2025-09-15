<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banana Cake - Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #fdf4ec;
            margin: 0;
            padding: 0;
        }

        .header{
            display:flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 60px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .header .title{
            font-size: 22px;
            font-weight: bold;
            color: #5a2e0f;
            text-decoration: none;
        }

        .btn-header{
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .btn-header li a{
            text-decoration: none;
            color: #5a2e0f;
            font-weight: 500;
            transition: color 0.3s;
        }

        .btn-header li a:hover{
            color: #d9822b
        }

        .cake_container{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 60px;
            min-height: 100vh;
            background: linear-gradient(to right, #fdf4ec, #f9c89b);
        }

        .mainTitle{
            flex: 1;
            padding-right: 30px;
        }

        .mainTitle h5{
            font-size: 20px;
            color: #6c4c3a;
        }

        .mainTitle h1{
            font-size: 48px;
            font-weight: bold;
            color: #5a2e0f;
            margin: 10px 0;
        }

        .mainTitle p{
            font-size: 16px;
            color: #6c4c3a;
            margin-bottom: 20px;
        }

        .btn-orderMe{
            background-color: #5a2e0f;
            color: #fff;
            padding: 12px 24px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s;
        }

        .btn-orderMe:hover{
            background-color: #402010;
        }

        .img-container{
            flex: 1;
            text-align: center;
        }

        .img-container img{
            max-width: 400px;
            border-radius: 12px;
        }
    </style>
</head>
<body>
<div class="header" id="headerID">
    <a class = "title" href="#">Wybie's Banana Cake</a>
    <ul class="btn-header">
        <li><a href="<?= base_url('/home') ?>">Home</a></li>
        <li><a href="<?= base_url('/about') ?>">About</a></li>
        <li><a href="<?= base_url('/contact') ?>">Contact</a></li>
        <li><a href="<?= base_url('/login') ?>">Login</a></li>
        <li><a href="<?= base_url('/register') ?>">Sign Up</a></li>
    </ul>
</div>

<section class="cake_container">
    <div class="mainTitle">
            <h5>Welcome to</h5>
            <h1>WYBIE'S BANANA CAKES</h1>
            <p>Bananas!</p>
            <a href="#" class="btn-orderMe">Order Now</a>
    </div>

    <div class="img-container">
        <!-- Lagyan mo to -->
    </div>
</section>
</body>
</html>