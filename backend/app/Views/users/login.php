<!DOCTYPE html>
<html lang="en">
<head>
<?= view('components/head', ['title' => '🍌Login']) ?>
  <style>
    body {
      margin: 0;
      font-family: Lato;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: url('https://s1.1zoom.me/big0/381/Bananas_Kettle_Still-life_Sugar_581880_722x1024.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
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
      color: #9E2A2B;
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
        Don’t have an account? <a href="/signup">Sign Up</a>
      </div>
    </form>
  </div>
</body>
</html>
