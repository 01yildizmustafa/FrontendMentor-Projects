<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <title>Fiyat Tablosu</title>
  <style>
    @media (min-width: 769px) {
      @import url('https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap');

      * {
        padding: 0;
        margin: 0;
        font-family: 'Karla', sans-serif;
        box-sizing: border-box;
      }

      body {
        min-height: 100vh;
        background-color: hsl(204, 43%, 93%);
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .container {
        width: 650px;
        height: 490px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        border-radius: 10px;
        box-shadow: 0px 10px 30px 0px lightblue;
      }

      .section-1 {
        width: 100%;
        height: 45%;
        background-color: grey;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
      }

      .box-1 {
        width: 100%;
        height: 100%;
        background-color: white;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        padding-left: 35px;
        padding-right: 35px;
      }

      .box-1 h2 {
        color: hsl(179, 62%, 43%);
      }

      .box-1 h3 {
        color: hsl(71, 73%, 54%);
      }

      .box-1 p {
        color: hsl(218, 22%, 67%);
        line-height: 25px;
        font-size: 17px;
      }

      .section-2 {
        width: 100%;
        height: 55%;
        display: flex;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
      }

      .box-2 {
        width: 50%;
        height: 100%;
        background-color: hsl(179, 62%, 43%);
        border-bottom-left-radius: 10px;
        padding-left: 35px;
        padding-top: 40px;
      }

      .box-2 h3 {
        color: white;
        opacity: .9;
        font-weight: 700;
      }

      .box-2 .price {
        display: flex;
        align-items: center;
        justify-content: left;
        padding-top: 20px;
        padding-bottom: 10px;
      }

      .box-2 .price h1 {
        color: white;
        padding-right: 10px;
      }

      .box-2 .price p {
        color: white;
        opacity: .5;
        letter-spacing: 2px;
      }

      .box-2 .a {
        color: white;
        opacity: .9;
        font-size: 16px;
        padding-bottom: 35px;
      }

      #signup {
        width: 85%;
        height: 50px;
        border: none;
        background-color: hsl(71, 73%, 54%);
        text-align: center;
        font-size: 16px;
        color: white;
        font-weight: 700;
        border-radius: 7px;
        cursor: pointer;
        box-shadow: 0px 1px 1px 0px lightblue;
      }

      .box-3 {
        width: 50%;
        height: 100%;
        background-color: hsl(179, 62%, 43%);
        border-bottom-right-radius: 10px;
        opacity: .8;
        padding-left: 35px;
        padding-top: 40px;
        padding-right: 50px;
      }

      .box-3 h3 {
        color: white;
        opacity: .8;
        font-weight: 700;
        padding-bottom: 25px;
      }

      .box-3 p {
        color: white;
        opacity: .6;
        line-height: 22px;
      }
    }

    @media (max-width: 768px) {
      @import url('https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap');

      * {
        padding: 0;
        margin: 0;
        font-family: 'Karla', sans-serif;
        box-sizing: border-box;
      }

      body {
        min-height: 100vh;
        background-color: hsl(204, 43%, 93%);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }

      .container {
        width: 350px;
        height: 650px;
        border-radius: 7px;
        box-shadow: 0px 10px 30px 0px lightblue;
      }

      .box-1 {
        width: 350px;
        height: 216px;
        background-color: #fff;
        display: flex;
        justify-content: space-evenly;
        flex-direction: column;
        padding-left: 25px;
        padding-right: 40px;
        border-top-left-radius: 7px;
        border-top-right-radius: 7px;
      }

      .box-1 h2 {
        color: hsl(179, 62%, 43%);
        font-size: 18px;
        padding-top: 10px;
      }

      .box-1 h3 {
        color: hsl(71, 73%, 54%);
        font-size: 15px;
      }

      .box-1 p {
        color: hsl(218, 22%, 67%);
        line-height: 20px;
        font-size: 15px;
      }

      .box-2 {
        width: 350px;
        height: 216px;
        background-color: hsl(179, 62%, 43%);
        padding-left: 25px;
        padding-top: 30px;
      }

      .box-2 h3 {
        padding-bottom: 20px;
        color: white;
        opacity: .9;
        font-weight: 700;
      }

      .box-2 .price {
        display: flex;
        align-items: center;
        padding-bottom: 10px;
      }

      .box-2 .price h1 {
        padding-right: 10px;
        color: white;
      }

      .box-2 .price p {
        color: white;
        opacity: .5;
        letter-spacing: 2px;
      }

      .box-2 .a {
        color: white;
        opacity: .9;
        font-size: 16px;
      }

      #signup {
        margin-top: 20px;
        width: 88%;
        height: 45px;
        border: none;
        background-color: hsl(71, 73%, 54%);
        text-align: center;
        font-size: 16px;
        color: white;
        font-weight: 700;
        border-radius: 7px;
        cursor: pointer;
        box-shadow: 0px 1px 1px 0px lightblue;
      }

      .box-3 {
        width: 350px;
        height: 218px;
        background-color: hsl(179, 62%, 43%);
        padding-left: 25px;
        padding-top: 25px;
        border-bottom-left-radius: 7px;
        border-bottom-right-radius: 7px;
        opacity: .8;
      }

      .box-3 h3 {
        padding-bottom: 20px;
        color: white;
        opacity: .8;
        font-weight: 700;
      }

      .box-3 p {
        padding-right: 120px;
        color: white;
        opacity: .6;
        line-height: 22px;
        font-size: 15px;
      }
    }
  </style>
</head>

<body>
  <div class="container">

    <div class="section-1">
      <div class="box-1">
        <h2>Join our community</h2>
        <h3>30-day, hassle-free money back guarantee</h3>
        <p>
          Gain access to our full library of tutorials along with expert code reviews.
          Perfect for any developers who are serious about honing their skills.
        </p>
      </div>
    </div>

    <div class="section-2">
      <div class="box-2">
        <h3>Monthly Subscription</h3>
        <div class="price">
          <h1>&dollar;29</h1>
          <p>per month</p>
        </div>
        <p class="a">Full access for less than &dollar;1 a day</p>
        <button type="submit" id="signup">Sign Up</button>
      </div>

      <div class="box-3">
        <h3>Why Us</h3>
        <p>
          Tutorials by industry experts
          Peer &amp; expert code review
          Coding exercises
          Access to our GitHub repos
          Community forum
          Flashcard decks
          New videos every week
        </p>
      </div>
    </div>

  </div>
</body>

</html>