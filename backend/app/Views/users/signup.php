<!DOCTYPE html>
<html lang="en">
<head>
<?= view('components/head', ['title' => '🍌Sign Up']) ?>
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

    .signup-card {
      background: rgba(255,255,255,0.10);
      backdrop-filter: blur(10px);
      border-radius: 12px;
      padding: 40px 30px;
      width: 400px;
      text-align: center;
      box-shadow: 0 8px 25px rgba(0,0,0,0.3);
    }

    .signup-card h2 {
      margin-bottom: 20px;
      font-size: 24px;
    }

    .input-group { margin-bottom: 15px; }

    .input-group input {
      width: 100%;
      padding: 12px 15px;
      border: none;
      border-radius: 8px;
      outline: none;
      font-size: 14px;
      background: rgba(255,255,255,0.9);
      color: #333;
      box-sizing: border-box;
    }

    .input-group input:focus { box-shadow: 0 0 5px #fff; }

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
      margin-bottom: 15px;
    }

    .btn:hover { background: #ffd54f; color: #3b0a45; }

    .options {
      font-size: 12px;
      margin-bottom: 20px;
      display: flex;
      justify-content: flex-start; /* checkbox left aligned */
      align-items: center;
      gap: 8px;
    }

    .options label { display: flex; align-items: center; gap: 5px; }

    /* Divider styling for "Access Quickly" */
    .divider {
      display: flex;
      align-items: center;
      gap: 12px;
      margin: 20px 0;
      font-size: 12px;
      color: #ffd54f;
      text-transform: uppercase;
      letter-spacing: 0.8px;
      font-weight: 600;
    }
    .divider::before,
    .divider::after {
      content: "";
      flex: 1;
      height: 1px;
      background: rgba(255,255,255,0.25);
    }

    .socials {
      display: flex;
      justify-content: space-between;
      gap: 10px;
      margin-bottom: 15px;
    }

    .socials button {
      flex: 1;
      padding: 10px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 12px;
      font-weight: bold;
      transition: background 0.3s;
    }

    .socials .google { background: #db4437; color: #fff; }
    .socials .facebook { background: #1877f2; color: #fff; }
    .socials .twitter { background: #1da1f2; color: #fff; }

    .socials button:hover { opacity: 0.85; }

    .login-link { margin-top: 15px; font-size: 12px; }
    .login-link a { color: #ffd54f; text-decoration: none; }
    .login-link a:hover { text-decoration: underline; }
  </style>
</head>
<body>
  <div class="signup-card">
    <h2>Sign Up</h2>
    <form>
      <div class="input-group">
        <input type="text" placeholder="Name" />
      </div>
      <div class="input-group">
        <input type="email" placeholder="Email" />
      </div>
      <div class="input-group">
        <input type="password" placeholder="Password" />
      </div>

      <div class="options">
        <label><input type="checkbox" /> Remember me</label>
      </div>

      <button type="submit" class="btn">Sign Up</button>

      <div class="divider">Access Quickly</div>

      <div class="socials">
        <button type="button" class="google">Google</button>
        <button type="button" class="facebook">Facebook</button>
        <button type="button" class="twitter">Twitter</button>
      </div>

      <div class="login-link">
        Already have an account? <a href="/login">Log In</a>
      </div>
    </form>
  </div>
</body>
</html>
