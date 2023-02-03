<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <title>QR Kod</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      font-family: 'Outfit', sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .kapsa {
      background-color: hsl(212, 45%, 89%);
      width: 90%;
      height: 70%;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0px 10px 10px 1px #D7D7D7;
    }

    .kart {
      background-color: hsl(0, 0%, 100%);
      width: 280px;
      height: 80%;
      border-radius: 20px;
      box-shadow: 0px 10px 10px 1px lightgray;
    }

    .kart-section {
      width: 100%;
      height: 100%;
    }

    .section-1 {
      background-image: url("/QR-kod/images/image-qr-code.png");
      background-position: center;
      background-size: cover;
      width: 250px;
      height: 180px;
      margin-top: 15px;
      margin-left: 15px;
      margin-right: 15px;
      margin-bottom: 0;
      border-radius: 10px;
    }

    .section-2 {
      padding: 25px;
      margin-bottom: 300px;
      text-align: center;
    }

    h3 {
      color: hsl(218, 44%, 22%);
      padding-bottom: 20px;
    }

    span {
      color: hsl(218, 44%, 22%);
      font-size: 15px;
    }
  </style>
</head>

<body>
  <!-- yapacağım şey için iskelet yarattım -->
  <div class="kapsa">

    <!-- iskeletimden kart dediğim dizayn/tasarım için parça aldım -->
    <div class="kart">

      <!-- kartımı 2 parçadan oluşturacağım. bundan dolayı parçalar için bir parça yuvası oluşturdum. -->
      <div class="kart-section">
        
        <!-- parçaların biri -->
        <div class="section-1">

        </div>
        
        <!-- parçalardan diğeri -->
        <div class="section-2">
          <h3>Improve your front-end skills by building projects</h3>
          <span>Scan the QR code to visit Frontend Mentor and take your coding skills to the next level</span>
        </div>
      
      </div>
    
    </div>
  
  </div>
</body>

</html>