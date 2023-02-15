<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <title>Sipariş Özeti Kartı</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500;700;900&display=swap');

    * {
      padding: 0;
      margin: 0;
      font-family: 'Red Hat Display', sans-serif;
    }

    body {
      min-height: 100vh;
      background-image: url("/siparis-ozeti-card/images/pattern-background-desktop.svg");
      background-repeat: no-repeat;
      background-position: top;
      background-size: contain;
      background-color: hsl(225, 100%, 94%);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .contain {
      min-height: 650px;
      min-width: 270px;
      height: 650px;
      width: 450px;
      background-color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-direction: column;
      border-radius: 30px;
      margin-left: 15px;
      margin-right: 15px;
      overflow: hidden;
    }

    .illustration img {
      background-size: contain;
      border-top-left-radius: 30px;
      border-top-right-radius: 30px;
    }

    h1 {
      color: hsl(223, 47%, 23%);
      font-weight: 900;
    }

    p {
      color: hsl(224, 23%, 55%);
      text-align: center;
      padding-left: 40px;
      padding-right: 40px;
      font-weight: 400;
      line-height: 25px;
      font-weight: 500;
      font-size: 16px;
    }

    .grey {
      display: flex;
      align-items: center;
      justify-content: space-around;
      width: 80%;
      background-color: hsl(225, 100%, 98%);
      padding-top: 20px;
      padding-bottom: 20px;
      border-radius: 15px;
    }

    .icon {
      padding-left: 10px;
      padding-right: 10px;
    }

    .main {
      display: inline-block;
      justify-content: left;
      width: 60%;
    }

    .plan {
      color: hsl(223, 47%, 23%);
      font-weight: 900;
    }

    .price {
      font-weight: 500;
      color: hsl(224, 23%, 55%);
      line-height: 30px;
    }

    #change {
      padding-right: 10px;
      color: hsl(245, 75%, 52%);
      font-weight: 700;
      border: none;
      background-color: hsl(225, 100%, 98%);
      cursor: pointer;
      text-decoration:underline;
      margin-right: 10px;
    }

    #change:hover {
      text-decoration: none;
      color: hsl(223, 47%, 23%);
    }

    #payment {
      width: 80%;
      height: 55px;
      color: white;
      background-color: hsl(245, 75%, 52%);
      font-weight: 700;
      border: none;
      border-radius: 15px;
      font-size: 16px;
      text-align: center;
      /* margin-top: 20px; */
      box-shadow: 0px 20px 10px hsl(225, 100%, 94%);
      cursor: pointer;
    }

    #payment:hover {
      background-color: #6C00FF;
    }

    #cancel {
      width: 80%;
      height: 55px;
      color: hsl(224, 23%, 55%);
      background-color: white;
      font-weight: 900;
      border: none;
      border-radius: 15px;
      font-size: 16px;
      text-align:center;
      /* margin-top: 20px; */
      cursor: pointer;
    }

    #cancel:hover {
      color:hsl(223, 47%, 23%);
    }

  </style>
</head>

<body>
  <div class="contain">
    <div class="illustration">
      <img src="/siparis-ozeti-card/images/illustration-hero.svg">
    </div>
    <h1>
      Order Summary
    </h1>
    <p>
      You can now listen to millions of songs, audiobooks, and podcasts on any
      device anywhere you like!
    </p>
    <div class="grey">
      <div class="icon">
        <img src="/siparis-ozeti-card/images/icon-music.svg">
      </div>
      <div class="main">
        <div class="plan">
          Annual Plan
        </div>
        <div class="price">
          $59.99/year
        </div>
      </div>
      <button type="submit" id="change">
        Change
      </button>
    </div>
    <button type="submit" id="payment">
      Proceed to Payment
    </button>
    <button type="submit" id="cancel">
      Cancel Order
    </button>

  </div>
</body>

</html>