<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600&display=swap" rel="stylesheet">
  <title>Apparel Coming Soon Page</title>
  <style>

    @media (min-width: 1281px) {

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Josefin Sans', sans-serif;
      }

      body {
        background-image: url("/base-apparel-coming-soon-master/images/bg-pattern-desktop.svg");
        min-height: 100vh;
      }

      ::selection {
        background-color: hsl(0, 36%, 70%);
        color: white;
      }

      .container {
        width: 100%;
        display: flex;
      }

      .main {
        width: 60%;
        padding-top: 60px;
        display: flex;
        align-items: center;
        flex-direction: column;
      }

      .logo {
        padding-bottom: 90px;
        margin-left: -300px;
      }

      .logo img {
        -moz-user-select: -moz-none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .pink {
        padding-bottom: 10px;
        margin-left: -220px;
      }

      .pink h1 {
        color: hsl(0, 36%, 70%);
        font-weight: 300;
        text-transform: uppercase;
        letter-spacing: 12px;
        font-size: 60px;
        -moz-user-select: -moz-none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .black {
        width: 300px;
        padding-bottom: 30px;
        margin-left: -170px;
      }

      .black h1 {
        color: hsl(0, 6%, 24%);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 12px;
        font-size: 60px;
        -moz-user-select: -moz-none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .p {
        width: 450px;
        padding-bottom: 30px;
        margin-left: -10px;
      }

      .p p {
        line-height: 25px;
        color: hsl(0, 36%, 70%);
        font-weight: 400;
      }

      .form {
        width: 450px;
        height: 50px;
        margin-left: -20px;
      }

      form {
        display: flex;
        justify-content: space-between;
        border-radius: 100px;
        position: relative;
      }

      .input {
        width: 90%;
        height: 55px;
        user-select: none;
      }

      input {
        width: 100%;
        height: 100%;
        outline: none;
        border: 1px solid hsl(0, 36%, 70%);
        padding-left: 30px;
        padding-right: 90px;
        border-top-left-radius: 100px;
        border-bottom-left-radius: 100px;
        border-right: none;
        font-size: 16px;
      }

      input::placeholder {
        color: hsl(0, 36%, 70%);
        font-weight: 400;
        font-size: 16px;
        user-select: none;
      }

      #button {
        position: absolute;
        cursor: pointer;
        margin-left: 350px;
        width: 100px;
        height: 55px;
        border-radius: 100px;
        border: none;
        background: linear-gradient(135deg, hsl(0, 80%, 86%), hsl(0, 74%, 74%));
        box-shadow: 0px 5px 4px 5px linear-gradient(135deg, hsl(0, 0%, 100%), hsl(0, 100%, 98%));
      }

      #button:hover {
        background: linear-gradient(135deg, hsl(0, 74%, 74%), hsl(0, 80%, 86%));
      }

      .picture {
        width: 40%;
        height: 100vh;
        display: flex;
      }

      .picture .img {
        content: url("/base-apparel-coming-soon-master/images/hero-desktop.jpg");
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    }

    @media (max-width: 1280px) {

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Josefin Sans', sans-serif;
      }

      body {
        background-image: url("/base-apparel-coming-soon-master/images/bg-pattern-desktop.svg");
        min-height: 100vh;
      }

      ::selection {
        background-color: hsl(0, 36%, 70%);
        color: white;
      }

      .container {
        width: 100%;
      }

      .main {
        width: 100%;
        padding-top: 50px;
        display: flex;
        align-items: center;
        flex-direction: column;
      }

      .logo {
        padding-bottom: 50px;
        margin-left: -300px;
      }

      .logo img {
        -moz-user-select: -moz-none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .pink {
        padding-top: 20px;
      }

      .pink h1 {
        color: hsl(0, 36%, 70%);
        font-weight: 300;
        text-transform: uppercase;
        letter-spacing: 12px;
        font-size: 40px;
        -moz-user-select: -moz-none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .black {
        width: 250px;
        padding-bottom: 20px;
        text-align: center;
      }

      .black h1 {
        color: hsl(0, 6%, 24%);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 12px;
        font-size: 40px;
        -moz-user-select: -moz-none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .p {
        width: 300px;
        padding-bottom: 40px;
      }

      .p p {
        line-height: 25px;
        color: hsl(0, 36%, 70%);
        font-weight: 400;
        text-align: center;
      }

      .form {
        width: 250px;
        height: 50px;
        margin-bottom: 100px;
        margin-left: -50px;
      }

      form {
        display: flex;
        justify-content: space-between;
        border-radius: 100px;
      }

      .input {
        width: 100%;
        height: 55px;
        user-select: none;
      }

      input {
        width: 100%;
        height: 100%;
        outline: none;
        border: 1px solid hsl(0, 36%, 70%);
        padding-left: 30px;
        padding-right: 90px;
        border-top-left-radius: 100px;
        border-bottom-left-radius: 100px;
        border-right: none;
        font-size: 16px;
      }

      input::placeholder {
        color: hsl(0, 36%, 70%);
        font-weight: 400;
        font-size: 16px;
        user-select: none;
      }

      #button {
        position: absolute;
        cursor: pointer;
        margin-left: 200px;
        width: 100px;
        height: 55px;
        border-radius: 100px;
        border: none;
        background: linear-gradient(135deg, hsl(0, 80%, 86%), hsl(0, 74%, 74%));
        box-shadow: 0px 5px 4px 5px linear-gradient(135deg, hsl(0, 0%, 100%), hsl(0, 100%, 98%));
      }

      #button:hover {
        background: linear-gradient(135deg, hsl(0, 74%, 74%), hsl(0, 80%, 86%));
      }

      .picture {
        width: 100%;
        display: flex;
        background-color: yellow;
      }
      
      .picture .img {
        content: url("/base-apparel-coming-soon-master/images/hero-mobile.jpg");
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

    }

  </style>
</head>

<body>
  <div class="container">


    <div class="main">

      <div class="logo">
        <img src="/base-apparel-coming-soon-master/images/logo.svg">
      </div>

      <div class="pink">
        <h1>
          We're
        </h1>
      </div>

      <div class="black">
        <h1>
          coming soon
        </h1>
      </div>

      <div class="p">
        <p>
          Hello fellow shoppers! We're currently building our new fashion store.
          Add your email below to stay up-to-date with announcements and our launch deals.
        </p>
      </div>

      <div class="form">
        <form action="post">
          <div class="input">
            <input type="email" name="email" placeholder="Email Address" required autocomplete="off" onpaste="return false" oncopy="return false">
          </div>
          <button type="submit" id="button">
            <img src="/base-apparel-coming-soon-master/images/icon-arrow.svg">
          </button>
        </form>
      </div>

    </div>

    <div class="picture">
      <img class="img"/>
    </div>


  </div>
</body>

</html>