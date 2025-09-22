<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background:linear-gradient(rgba(204, 153, 0, 0.12), rgba(204, 153, 0, 0.21)), 
    url('https://www.pixelstalk.net/wp-content/uploads/2025/08/banana-desktop-wallpaper-HD-highly-detailed-bananas-in-a-tropical-setting-with-lush-green-leaves-and-bright-lighting.jpg');
      background-size: cover;
      color: #fff;
    }

    .login-card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 12px;
      padding: 40px 30px;
      width: 400px;
      text-align: center;
      box-shadow: 0 8px 25px rgba(0,0,0,0.3);
    }

    .login-card h2 {
      margin-bottom: 20px;
      font-size: 24px;
    }

    .input-group {
      margin-bottom: 15px;
      position: relative;
    }

    .input-group input {
      width: 100%;
      padding: 12px 15px;
      border: none;
      border-radius: 8px;
      outline: none;
      font-size: 14px;
      background: rgba(255, 255, 255, 0.9); 
  color: #333; 
  box-sizing: border-box; 
    }

    .input-group input:focus {
      box-shadow: 0 0 5px #fff;
    }

    .options {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 12px;
      margin-bottom: 20px;
    }

    .options label {
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .options a {
      text-decoration: none;
      color: #ffd54f;
    }

    .options a:hover {
      text-decoration: underline;
    }

    .btn {
      width: 100%;
      padding: 12px;
      background: #fff;
      color: #6a1b9a;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .btn:hover {
      background: #ffd54f;
      color: #3b0a45;
    }

    .register {
      margin-top: 15px;
      font-size: 12px;
    }

    .register a {
      color: #ffd54f;
      text-decoration: none;
    }

    .register a:hover {
      text-decoration: underline;
    }

  </style>
</head>
<body>
  <div class="login-card">
    <h2>Login</h2>
    <form>
      <div class="input-group">
        <input type="text" placeholder="Username">
      </div>
      <div class="input-group">
        <input type="password" placeholder="Password">
      </div>
      <div class="options">
        <label>
          <input type="checkbox"> Remember me
        </label>
        <a href="#">Forgot password?</a>
      </div>
      <button type="submit" class="btn">Login</button>
      <div class="register">
        Don’t have an account? <a href="#">Sign Up</a>
      </div>
    </form>
  </div>
</body>
</html>
