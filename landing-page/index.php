<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <title>Landing Page</title>
  <style>
    @media (min-width: 1281px) {

      @import url('https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@400;600&display=swap');

      /* Headings */
      /* font-family: 'Poppins', sans-serif; */

      /* Body */
      /* font-family: 'Open Sans', sans-serif; */

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      body {
        min-height: 100vh;
        background-color: hsl(257, 40%, 49%);
        background-image: url("/landing-page/images/bg-desktop.svg");
        background-position: center;
        background-repeat: no-repeat;
      }

      .container {
        width: 100%;
        height: 100vh;
      }

      .logo {
        padding-top: 40px;
        padding-left: 60px;
      }

      .section {
        display: flex;
        padding-top: 40px;
        padding-left: 60px;
      }

      .h1 {
        width: 400px;
        padding-top: 55px;
        padding-bottom:35px;
        margin-left:50px;
      }
      
      h1 {
        font-family: 'Poppins', sans-serif;
        color: white;
        opacity: .9;
        line-height: 48px;
        font-size: 36px;
      }

      .p {
        width: 440px;
        margin-left:50px;
      }

      p {
        font-family: 'Open Sans', sans-serif;
        color: white;
        opacity: .8;
        line-height: 28px;
      }

      #register {
        font-family: 'Open Sans', sans-serif;
        margin-left: 40px;
        margin-top: 20px;
        width: 170px;
        height: 50px;
        border-radius: 75px;
        border: none;
        text-align: center;
        color: hsl(257, 40%, 49%);
        box-shadow: 0px 2px 10px 1px black;
        cursor: pointer;
        font-weight: 400;
        font-size: 16px;
      }

      #register:hover {
        color: white;
        background-color: hsl(300, 69%, 71%);
      }

      .social-media {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row-reverse;
        width: 300px;
        height: 70px;
        float: right;
        padding-bottom: 30px;
      }
      
      .t {
        margin-right: 15px;
      }
      
      .f {
        margin-right: 15px;
      }
      
      a {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        border: 1px solid white;
      }

      a:hover {
        border: 1px solid hsl(300, 69%, 71%);
      }
      
      .social-media img {
        width: 22px;
      }

      .social-media .f img {
        width: 13px;
      }

    }

    @media (max-width: 1280px) {
    
      @import url('https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@400;600&display=swap');
    
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
    
      body {
        min-height: 100vh;
        background-color: hsl(257, 40%, 49%);
        background-image: url("/landing-page/images/bg-mobile.svg");
        background-position: center;
        background-repeat: no-repeat;
      }

      .container {
        width: 100%;
        height: 100vh;
      }

      .logo {
        padding-top: 50px;
        padding-left:35px;
      }

      .logo img {
        width: 200px;
      }

      .section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: column;
        padding-top: 60px;
      }
      
      .picture img {
        width: 350px;
      }
      
      .text {
        height: 400px;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
        padding-top: 30px;
      }
      
      .h1 {
        width: 350px;
      }
      
      h1 {
        font-family: 'Poppins', sans-serif;
        color: white;
        line-height: 44px;
        font-size: 30px;
        text-align: center;
      }

      .p {
        width: 350px;
        text-align: center;
      }

      p {
        font-family: 'Open Sans', sans-serif;
        color: white;
        line-height: 28px;
        font-size: 20px;
        font-weight: 400;
      }

      #register {
        font-family: 'Open Sans', sans-serif;
        width: 260px;
        height: 50px;
        border-radius: 75px;
        border: none;
        text-align: center;
        color: hsl(257, 40%, 49%);
        box-shadow: 0px 2px 10px 1px black;
        cursor: pointer;
        font-weight: 400;
        font-size: 16px;
        margin-top: 20px;
      }

      #register:hover {
        color: white;
        background-color: hsl(300, 69%, 71%);
      }

      .social-media {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row-reverse;
        width: 300px;
        height: 200px;
        margin: 0 auto;
      }
      
      .t {
        margin-right: 15px;
      }
      
      .f {
        margin-right: 15px;
      }
      
      a {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        border: 1px solid white;
      }

      a:hover {
        border: 1px solid hsl(300, 69%, 71%);
      }
      
      .social-media img {
        width: 22px;
      }

      .social-media .f img {
        width: 13px;
      }

    }
    
    /* @media (max-width: 768px) {
      body {
        background-color: red;
      }
    } */
  </style>
</head>

<body>
  <div class="container">
    <div class="logo">
      <img src="/landing-page/images/logo.svg">
    </div>
    <div class="section">
      <div class="picture">
        <div class="content">
          <img src="/landing-page/images/illustration-mockups.svg">
        </div>
      </div>
      <div class="text">
        <div class="h1">
          <h1>
            Build The Community Your Fans Will Love
          </h1>
        </div>
        <div class="p">
          <p>
            Huddle re-imagines the way we build communities. You have a voice, but so does your audience.
            Create connections with your users as you engage in genuine discussion.
          </p>
        </div>
        <button type="submit" id="register">
          Register
        </button>
      </div>
    </div>
    <div class="social-media">
      <div class="i">
        <a href="https://www.instagram.com/" target="_blank"><img src="/landing-page/images/instagram.svg"></a>
      </div>
      <div class="t">
        <a href="https://www.twitter.com/" target="_blank"><img src="/landing-page/images/twitter.svg"></a>
      </div>
      <div class="f">
        <a href="https://www.facebook.com/" target="_blank"><img src="/landing-page/images/facebook-f.svg"></a>
      </div>
    </div>
  </div>
</body>

</html>

<!--
Build The Community Your Fans Will Love

Huddle re-imagines the way we build communities. You have a voice, but so does your audience. 
Create connections with your users as you engage in genuine discussion. 

Register
-->