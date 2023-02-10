<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <title>3 Card</title>
  <!--
    font-family: 'Big Shoulders Display', cursive;
    font-family: 'Lexend Deca', sans-serif;
  -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@700&family=Lexend+Deca&display=swap');

    * {
      margin: 0;
      padding: 0;
    }

    body {
      background-color: hsl(0, 0%, 95%);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
    }




    
    /* ========== container box ========== */
    
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      min-height: 100%;
      min-width: 95%;
      margin-top: 80px;
      margin-bottom: 80px;
      background-color: hsl(0, 0%, 95%);
      border-radius: 5px;
    }




    
    /* ========== otomobiles ========== */

    .sedans {
      width: 220px;
      min-width: 220px;
      height: 430px;
      min-height: 430px;
      background-color: hsl(31, 77%, 52%);
      padding-left: 50px;
      padding-right: 50px;
      padding-top: 50px;
      line-height: 25px;
    }

    .suvs {
      width: 220px;
      min-width: 220px;
      height: 430px;
      min-height: 430px;
      background-color: hsl(184, 100%, 22%);
      padding-left: 50px;
      padding-right: 50px;
      padding-top: 50px;
      line-height: 25px;
    }

    .luxury {
      width: 220px;
      min-width: 220px;
      height: 430px;
      min-height: 430px;
      background-color: hsl(179, 100%, 13%);
      padding-left: 50px;
      padding-right: 50px;
      padding-top: 50px;
      line-height: 25px;

    }




    
    /* ========== headings ========== */

    h1 {
      font-family: 'Big Shoulders Display', cursive;
      font-weight: 700;
      color: hsl(0, 0%, 95%);
      text-transform:uppercase;
      padding-top: 30px;
      padding-bottom: 30px;
    }




    
    /* ========== paragraphs ========== */

    p {
      font-family: 'Lexend Deca', sans-serif;
      font-size: 400;
      color: hsla(0, 0%, 100%, 0.75);
      padding-bottom: 80px;
    }




    
    /* ========== buttons ========== */

    .sedans button {
      border: 2px solid hsl(0, 0%, 95%);
      width: 135px;
      height: 45px;
      background-color: hsl(0, 0%, 95%);
      color: hsl(31, 77%, 52%);
      border-radius: 30px;
      font-family: 'Lexend Deca', sans-serif;
      font-size: 400;
      text-align: center;
      cursor: pointer;
      transition:all .9s ease;
      font-size: 15px;
    }

    .suvs button {
      border: 2px solid hsl(0, 0%, 95%);
      width: 135px;
      height: 45px;
      background-color: hsl(0, 0%, 95%);
      color: hsl(184, 100%, 22%);
      border-radius: 30px;
      font-family: 'Lexend Deca', sans-serif;
      font-size: 400;
      cursor: pointer;
      text-align: center;
      transition:all .9s ease;
      font-size: 15px;
    }

    .luxury button {
      border: 2px solid hsl(0, 0%, 95%);
      width: 135px;
      height: 45px;
      background-color: hsl(0, 0%, 95%);
      color: hsl(179, 100%, 13%);
      border-radius: 30px;
      font-family: 'Lexend Deca', sans-serif;
      font-size: 400;
      cursor: pointer;
      text-align: center;
      transition:all .9s ease;
      font-size: 15px;
    }





    /* ========== buttons hover ========== */

    .sedans button:hover {
      background-color: hsl(31, 77%, 52%);
      color: hsl(0, 0%, 95%);
    }

    .suvs button:hover {
      background-color: hsl(184, 100%, 22%);
      color: hsl(0, 0%, 95%);
    }

    .luxury button:hover {
      background-color: hsl(179, 100%, 13%);
      color: hsl(0, 0%, 95%);
    }
  </style>
</head>

<body>

  <div class="container">

    <div class="sedans">
      <div class="logo-content">
        <img src="/3-card/images/icon-sedans.svg">
      </div>
      <h1>Sedans</h1>
      <p>
        Choose a sedan for its affordability and excellent fuel economy. Ideal for cruising in the city
        or on your next road trip.
      </p>
      <button type="submit">Learn More</button>
    </div>

    <div class="suvs">
      <div class="logo-content">
        <img src="/3-card/images/icon-suvs.svg">
      </div>
      <h1>SUVs</h1>
      <p>
        Take an SUV for its spacious interior, power, and versatility. Perfect for your next family vacation
        and off-road adventures.
      </p>
      <button type="submit">Learn More</button>
    </div>

    <div class="luxury">
      <div class="logo-content">
        <img src="/3-card/images/icon-luxury.svg">
      </div>
      <h1>Luxury</h1>
      <p>
        Cruise in the best car brands without the bloated prices. Enjoy the enhanced comfort of a luxury
        rental and arrive in style.
      </p>
      <button type="submit">Learn More</button>
    </div>

  </div>

</body>

</html>