<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LunarPride</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif;
      background: url('background.jpg') no-repeat center center fixed;
      background-size: cover;
      color: white;
      text-align: center;
    }
    .container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    .logo {
      width: 80px;
      margin-bottom: 30px;
    }
    .button {
      display: block;
      width: 250px;
      padding: 15px;
      margin: 10px auto;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      text-decoration: none;
    }
    .discord { background-color: #5865F2; color: white; }
    .play { background-color: #2ECC71; color: white; }
    .black { background-color: #111; color: white; display: flex; align-items: center; justify-content: center; }
    .black img { margin-right: 8px; }
    .footer-icons {
      margin-top: 30px;
    }
    .footer-icons img {
      width: 40px;
      margin: 0 10px;
      cursor: pointer;
    }
    .footer {
      margin-top: 20px;
      font-size: 12px;
      color: #ccc;
    }
  </style>
</head>
<body>

  <div class="container">
    <img src="logo.png" alt="Logo" class="logo">

    <a href="https://discord.gg/yourlink" class="button discord">Join Our Discord</a>
    <a href="samp://188.165.192.24:4746" class="button play">▶️ Play Now</a>

    <a href="get-started.php" class="button black">📖 Get Started</a>
    <a href="forums.php" class="button black">🌐 Forums</a>
    <a href="server-guidance.php" class="button black">📚 Server Guidance</a>

    <div class="footer-icons">
      <a href="https://youtube.com/yourchannel"><img src="youtube.png" alt="YouTube"></a>
      <a href="https://instagram.com/yourprofile"><img src="instagram.png" alt="Instagram"></a>
      <a href="donate.php"><img src="donate.png" alt="Donate"></a>
    </div>

    <div class="footer">
      GRAND THEFT AUTO IS A REGISTERED TRADEMARK OF TAKE-TWO INTERACTIVE SOFTWARE.<br>
      MATSUNAGA IS NOT AFFILIATED WITH OR ENDORSED BY TAKE-TWO INTERACTIVE SOFTWARE AND ITS SUBSIDIARIES.<br>
      © 2024-2025 ALL RIGHTS RESERVED. © 2025 - MATSUNAGA TEAM
    </div>
  </div>

</body>
</html>
