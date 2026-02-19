<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>404 - Page Not Found</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0
    }

    body {
      font-family: Poppins, sans-serif;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #0f172a, #020617);
      color: #fff;
      overflow: hidden;
    }

    .container {
      text-align: center;
      max-width: 700px;
      padding: 40px;
      animation: fadeIn 1.2s ease;
    }

    .error {
      font-size: 160px;
      font-weight: 700;
      background: linear-gradient(90deg, #22d3ee, #a78bfa);
      -webkit-background-clip: text;
      color: transparent;
      text-shadow: 0 0 40px rgba(167, 139, 250, .25);
      line-height: 1;
    }

    .title {
      font-size: 32px;
      margin-top: 10px;
      font-weight: 600;
    }

    .desc {
      opacity: .75;
      margin: 15px 0 30px;
      line-height: 1.6;
    }

    .btn {
      display: inline-block;
      padding: 14px 32px;
      border-radius: 40px;
      background: linear-gradient(90deg, #22d3ee, #a78bfa);
      color: #020617;
      text-decoration: none;
      font-weight: 600;
      transition: .35s;
      box-shadow: 0 10px 25px rgba(34, 211, 238, .35);
    }

    .btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 20px 35px rgba(167, 139, 250, .45);
    }

    /* Floating circles */
    .circle {
      position: absolute;
      border-radius: 50%;
      filter: blur(90px);
      opacity: .4;
      animation: float 12s infinite ease-in-out;
    }

    .c1 {
      width: 350px;
      height: 350px;
      background: #22d3ee;
      top: -80px;
      left: -80px
    }

    .c2 {
      width: 300px;
      height: 300px;
      background: #a78bfa;
      bottom: -80px;
      right: -80px;
      animation-delay: 3s
    }

    .c3 {
      width: 200px;
      height: 200px;
      background: #38bdf8;
      bottom: 10%;
      left: 10%;
      animation-delay: 6s
    }

    @keyframes float {

      0%,
      100% {
        transform: translateY(0)
      }

      50% {
        transform: translateY(-40px)
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px)
      }

      to {
        opacity: 1;
        transform: translateY(0)
      }
    }

    svg {
      margin: 20px 0
    }
  </style>
</head>

<body>

  <div class="circle c1"></div>
  <div class="circle c2"></div>
  <div class="circle c3"></div>

  <div class="container">

    <div class="error">404</div>

    <svg width="140" height="140" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5">
      <circle cx="12" cy="12" r="10" opacity="0.2" />
      <path d="M9 10h.01M15 10h.01M8 15s1.5-2 4-2 4 2 4 2" />
    </svg>

    <div class="title">Oops! Page not found</div>
    <p class="desc">The page you're looking for doesn't exist or has been moved. Let's get you back home.</p>

    <a href="/" class="btn">Back to Homepage</a>

  </div>

</body>

</html>
