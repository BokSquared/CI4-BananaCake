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
            background-color: #E3CA9C;
            margin: 0;
            padding: 0;
        }

        .header{
            display:flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 60px;
            background-color: #F5E1C8; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .header .title{
            font-size: 22px;
            font-weight: bold;
            color: #AF4B41;
            text-decoration: none;
        }

        .btn-header{
            list-style: none;
            display: flex;
            gap: 30px;
            margin: 0;
            padding: 0;
        }

        .btn-header li a{
            text-decoration: none;
            color: #AF4B41;
            font-weight: 500;
            transition: color 0.3s;
        }

        .btn-header li a:hover{
            color: #D29E69;
        }

        .cake_container{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 60px;
            min-height: 100vh;
            background: linear-gradient(to right, #E3CA9C, #D29E69);
        }

        .mainTitle{
            flex: 1;
            padding-right: 30px;
        }

        .mainTitle h5, p{
            color: #AF4B41;
        }

        .mainTitle h1{
            font-size: 48px;
            font-weight: bold;
            color: #AF4B41;
            margin: 10px 0;
        }

        .btn-orderMe{
            background-color: #AF4B41;
            color: #fff;
            padding: 12px 24px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s;
        }

        .btn-orderMe:hover{
            background-color: #D29E69;
        }

        .img-container{
            flex: 1;
            text-align: center;
        }

        .img-container img{
            width: 100%;
            max-width: 450px;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .img-container img:hover{
            transform: scale(1.05);
        }

        .about_section {
            padding: 80px 60px;
            background-color: #F5E1C8;
            color: #AF4B41;
        }

        .about_section div {
            max-width: 800px;
            margin: auto;
            text-align: center;
        }

        .about_section h2 {
            color: #AF4B41;
            margin-bottom: 20px;
        }

        .about_section p {
            color: #AF4B41;
            font-size: 18px;
            line-height: 1.6;
        }
        
        @media (max-width: 768px) {
            .cake_container {
                flex-direction: column;
                padding: 30px 20px;
            }

            .mainTitle {
                padding-right: 0;
                text-align: center;
                margin-bottom: 20px;
            }

            .img-container img {
                max-width: 90%;
            }
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
            <p>Bananas!
            🍌 About Our Banana Cakes</p>
            <a href="#" class="btn-orderMe">Order Now 🎂</a>
    </div>
    <div class="img-container">
        <img src="https://hips.hearstapps.com/hmg-prod/images/banana-cake-vertical-2-668d5778abfc2.jpg?resize=768:*" alt="Banana Cake">
    </div>
</section>

<section class="about_section">
        <div>
            <h2>About Our Banana Cakes!</h2>
            <p>
                Made from ripe bananas, our cakes are moist, flavorful, and perfect for any occasion. 
                Whether you're celebrating a birthday, anniversary, or just craving something sweet, 
                our banana cakes are sure to delight your taste buds.  
                Order now and treat yourself to the deliciousness of Wybie's Banana Cakes!
            </p>
        </div>
</section>
</body>
</html>