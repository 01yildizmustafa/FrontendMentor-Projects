<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;600;700&display=swap" rel="stylesheet">
  <title>Ping Coming Soon</title>
  <style>

    @media (min-width: 1281px) {

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Libre Franklin', sans-serif;
      }

      body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .container {
        width: 600px;
        height: 800px;
        display: flex;
        align-items: center;
        flex-direction: column;
      }

      .logo {
        margin-bottom: 50px;
        margin-top: 50px;
      }

      .logo img {
        width: 70px;
      }

      .h1 {
        margin-bottom: 15px;
        width: 350px;
        display: flex;
      }

      .grey h1 {
        color: hsl(0, 0%, 59%);
        font-weight: 300;
        padding-right: 8px;
      }

      .dark h1 {
        color: hsl(209, 33%, 12%);
      }

      .p {
        margin-bottom: 35px;
      }

      .p p {
        color: hsl(209, 33%, 12%);
      }

      .form {
        width: 500px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 70px;
      }

      form {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 500px;
        height: 50px;
      }

      input {
        width: 330px;
        height: 50px;
        outline: 1px solid hsl(223, 100%, 88%);
        border-radius: 100px;
        border: none;
        padding-left: 30px;
      }

      input::placeholder {
        color: hsl(0, 0%, 59%);
      }

      #button {
        display: inline;
        width: 160px;
        height: 50px;
        border-radius: 100px;
        border: none;
        background-color: hsl(223, 87%, 63%);
        color: white;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        box-shadow: 0px 4px 10px 0px hsl(223, 87%, 85%);
      }

      #button:hover {
        opacity: .8;
      }

      .illustration img {
        width: 500px;
        height: 300px;
      }

      .social-media {
        margin-top: 50px;
        width: 200px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
      }

      .social-media .f,
      .social-media .t,
      .social-media .i
      {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 1px solid hsl(223, 87%, 63%);
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .social-media .f:hover {
        background-color: hsl(223, 87%, 63%);
      }
      .social-media .t:hover {
        background-color: hsl(223, 87%, 63%);
      }
      .social-media .i:hover {
        background-color: hsl(223, 87%, 63%);
      }

      a {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .social-media img {
        width: 20px;
        height: 20px;
      }

      .copy {
        margin-top: 20px;
      }

      .copy p {
        color: hsl(0, 0%, 59%);
        font-size: 11px;
        font-weight: 300;
      }

    }

    @media (max-width: 1280px) {

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Libre Franklin', sans-serif;
      }

      body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .container {
        width: 320px;
        height: 800px;
        display: flex;
        align-items: center;
        flex-direction: column;
      }

      .logo {
        margin-bottom: 50px;
        margin-top: 50px;
      }

      .logo img {
        width: 60px;
      }

      .h1 {
        margin-bottom: 15px;
        width: 270px;
        display: flex;
      }

      .grey h1 {
        color: hsl(0, 0%, 59%);
        font-weight: 300;
        padding-right: 8px;
        font-size: 24px;
      }

      .dark h1 {
        color: hsl(209, 33%, 12%);
        font-size: 24px;
      }

      .p {
        margin-bottom: 60px;
      }

      .p p {
        color: hsl(209, 33%, 12%);
        font-size: 14px;
      }

      .form {
        width: 300px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 40px;
      }

      form {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-direction: column;
        width: 300px;
        height: 110px;
      }

      input {
        width: 290px;
        height: 50px;
        outline: 1px solid hsl(223, 100%, 88%);
        border-radius: 100px;
        border: none;
        padding-left: 30px;
      }

      input::placeholder {
        color: hsl(0, 0%, 59%);
      }

      #button {
        display: inline;
        width: 290px;
        height: 50px;
        border-radius: 100px;
        border: none;
        background-color: hsl(223, 87%, 63%);
        color: white;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        box-shadow: 0px 4px 10px 0px hsl(223, 87%, 85%);
      }

      #button:hover {
        opacity: .8;
      }

      .illustration img {
        width: 300px;
        height: 300px;
        object-fit: contain;
      }

      .social-media {
        margin-top: 50px;
        width: 200px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
      }

      .social-media .f,
      .social-media .t,
      .social-media .i
      {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 1px solid hsl(223, 87%, 63%);
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .social-media .f:hover {
        background-color: hsl(223, 87%, 63%);
      }
      .social-media .t:hover {
        background-color: hsl(223, 87%, 63%);
      }
      .social-media .i:hover {
        background-color: hsl(223, 87%, 63%);
      }

      a {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .social-media img {
        width: 20px;
        height: 20px;
      }

      .copy {
        margin-top: 20px;
      }

      .copy p {
        color: hsl(0, 0%, 59%);
        font-size: 11px;
        font-weight: 300;
      }

    }

  </style>
</head>

<body>
  <div class="container">

    <div class="logo">
      <img src="/ping-coming-soon/images/logo.svg">
    </div>

    <div class="h1">
      <div class="grey">
        <h1>
          We are launching
        </h1>
      </div>
      <div class="dark">
        <h1>
          soon!
        </h1>
      </div>
    </div>

    <div class="p">
      <p>
        Subscribe and get notified
      </p>
    </div>

    <div class="form">
      <form action="" method="post">
          <div class="input">
            <input type="email" name="" placeholder="Your email address" required autocomplete="off">
          </div>
          <button type="submit" id="button">
            Notify Me
          </button>
      </form>
    </div>

    <div class="illustration">
      <img src="/ping-coming-soon/images/illustration-dashboard.png">
    </div>

    <div class="social-media">
      <div class="f">
        <a href="https://facebook.com">
          <img src="/ping-coming-soon/images/facebook-f.svg">
        </a>
      </div>

      <div class="t">
        <a href="https://twitter.com">
          <img src="/ping-coming-soon/images/twitter.svg">
        </a>
      </div>

      <div class="i">
        <a href="https://instagram.com">
          <img src="/ping-coming-soon/images/instagram.svg">
        </a>
      </div>
    </div>

    <div class="copy">
      <p>
        &copy; Copyright Ping. All rights reserved.
      </p>
    </div>

  </div>
</body>

</html>
<!--
We are launching soon!

Subscribe and get notified

Notify Me

&copy; Copyright Ping. All rights reserved.
-->