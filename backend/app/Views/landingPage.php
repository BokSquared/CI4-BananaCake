<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banana Cake - Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, rgba(246, 204, 128, 0.9), rgba(240, 157, 74, 0.9)),
                        url('https://www.pixelstalk.net/wp-content/uploads/2016/10/Banana-Wallpaper-Full-HD.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
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

        .cake_container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 80px 60px;
            min-height: 90vh;
            background: transparent; 
            color: #fff;
        }

        .mainTitle h5 {
            font-size: 18px;
            font-weight: 500;
            color: #AF4B41;
        }

        .mainTitle h1 {
            font-size: 52px;
            font-weight: 800;
            margin: 15px 0;
            color: #fff;
        }

        .mainTitle p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
            color: #AF4B41;
        }

        .btn-orderMe {
            background-color: #AF4B41;
            color: #FFD369;
            padding: 14px 28px;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.3s;
        }

        .btn-orderMe:hover {
            background-color: #e6b84e;
        }

        .img-container {
            flex: 1;
            position: relative;
            display: flex;
            justify-content: center; 
            align-items: center;
        }

        .img-container::before {
            content: '';
            position: absolute;
            right: 20px;
            width: 570px;
            height: 500px;
            border: 4px solid white;
            border-radius: 82% 18% 79% 21% / 81% 69% 31% 19%;
            z-index: 0; 
        }

        .img-container::after {
            content: '';
            position: absolute;
            right: 30px;
            width: 550px;
            height: 420px;
            background-color: #FFD369; 
            border-radius: 58% 42% 63% 37% / 41% 54% 46% 59%; 
            z-index: -1;
        }

        .img-container img {
            position: relative;
            z-index: 1;
            max-width: 380px;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.25);
            transition: transform 0.3s;
        }

        .img-container img:hover {
            transform: scale(1.05);
        }

        .about_section {
            padding: 80px 60px;
            background-color: rgba(245, 225, 200, 0.65); 
            border-radius: 12px; 
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
        <li><a href="<?= base_url('/signup') ?>">Sign Up</a></li>
    </ul>
</div>

<section class="cake_container">
    <div class="mainTitle">
            <h5>Welcome to</h5>
            <h1>WYBIE'S BANANA CAKES</h1>
            <p>Bananas!
            🍌 About Our Banana Cakes</p>
    </br>
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
<footer class="bg-[#AF4B41] text-white py-8 mt-10">
  <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center">
    <div>
      <h2 class="text-2xl font-extrabold">Wybie's Banana Cake 🍌</h2>
      <p class="text-sm mt-2 max-w-xs">
        Baked with love, crafted with bananas.  
        Every slice is a taste of joy and comfort.
      </p>
    </div>

    <div class="md:col-span-2 grid grid-cols-2 gap-6"> 
        <ul class="space-y-2 text-sm">
        <li><a href="<?= base_url('/home') ?>" class="hover:text-yellow-200">Home</a></li>
        <li><a href="<?= base_url('/about') ?>" class="hover:text-yellow-200">About</a></li>
        <li><a href="<?= base_url('/contact') ?>" class="hover:text-yellow-200">Contact</a></li>
        </ul>

        <ul class="space-y-2 text-sm">
        <li><a href="<?= base_url('/login') ?>" class="hover:text-yellow-200">Login</a></li>
        <li><a href="<?= base_url('/signup') ?>" class="hover:text-yellow-200">Sign Up</a></li>
        <li><a href="<?= base_url('/moodPage') ?>" class="hover:text-yellow-200">Mood Board</a></li>
        <li><a href="<?= base_url('/roadMap') ?>" class="hover:text-yellow-200">Road Map</a></li>
        </ul>
    </div>
    </div>

    <div class="text-center text-xs text-gray-200 mt-6">
        © 2025 Wybie's Banana Cake. All rights reserved.
    </div>
</footer>
</body>
</html>