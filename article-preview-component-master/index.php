<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">
  <title>Article Preview Component</title>
  <style>
    @media (min-width: 1281px) {

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Manrope', sans-serif;
      }

      ::selection {
        background-color: hsl(217, 19%, 35%);
        color: white;
      }

      body {
        min-height: 100vh;
        background-color: hsl(210, 46%, 95%);
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .container {
        width: 1200px;
        height: 400px;
        display: flex;
        align-items: center;
        flex-direction: row;
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0px 5px 20px 0px hsl(212, 23%, 80%);
        z-index: 1;
      }

      .content {
        width: 750px;
        height: 100%;
        background-color: white;
        border-top-right-radius: 15px;
        border-bottom-right-radius: 15px;
        display: flex;
        justify-content: space-evenly;
        flex-direction: column;
      }

      .content .h2 {
        width: 100%;
        padding-left: 80px;
        padding-right: 60px;
        -moz-user-select: -moz-none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .content .h2 h2 {
        color: hsl(217, 19%, 35%);
        font-weight: 700;
        line-height: 35px;
      }

      .content .text {
        width: 100%;
        padding-left: 80px;
        padding-right: 60px;
      }

      .content .text p {
        color: hsl(214, 17%, 51%);
        font-size: 17px;
        line-height: 30px;
      }

      .content .avatar {
        align-items: center;
        display: flex;
        width: 100%;
        padding-left: 80px;
      }

      .content .avatar img {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        -moz-user-select: -moz-none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      
      .content .avatar .info {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
        height: 60%;
        margin-left: 20px;
        -moz-user-select: -moz-none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .content .avatar .info .name p {
        color: hsl(217, 19%, 35%);
        font-weight: 700;
        font-size: 18px;
      }

      .content .avatar .info .date {
        width: 100%;
        text-align: left;
      }

      .content .avatar .info .date p {
        color: hsl(212, 23%, 69%);
      }

      #button {
        border: none;
        background-color: hsl(210, 46%, 95%);
        cursor: pointer;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        margin-left: 200px;
      }

      /* #button:focus {
        transform: scale(.97);
      } */
      
      #button:hover {
        transform: scale(.90);
        background-color: hsl(217, 19%, 35%);
      }
      
      .content .avatar .ok button img {
        width: 30px;
        height: 25px;
      }
      
      .picture {
        width: 450px;
        height: 100%;
        border-top-left-radius: 15px;
        border-bottom-left-radius: 15px;
        -moz-user-select: -moz-none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .picture .img {
        content: url("/article-preview-component-master/images/drawers.jpg");
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-top-left-radius: 15px;
        border-bottom-left-radius: 15px;
      }

      #kutu {
        background-color: hsl(217, 19%, 35%);
        width: 275px;
        height: 55px;
        display: none;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        position: absolute;
        margin-top: 70px;
        margin-left: 850px;
        z-index: 9999;
        border-radius: 10px;
        box-shadow: 0px 5px 20px 3px hsl(210, 46%, 85%);
        transition: all 1s linear;
        -moz-user-select: -moz-none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      #kutu a {
        padding-left: 20px;
      }

      #kutu a img {
        width: 22px;
        height: 22px;
      }

      #kutu p {
        color: hsl(212, 23%, 69%);
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 5px;
      }

    }



    @media (max-width: 1280px) {

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Manrope', sans-serif;
      }

      ::selection {
        background-color: hsl(217, 19%, 35%);
        color: white;
      }

      body {
        min-height: 100vh;
        background-color: hsl(210, 46%, 95%);
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .container {
        width: 360px;
        height: 500px;
        display: flex;
        align-items: center;
        flex-direction: column;
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0px 5px 20px 0px hsl(212, 23%, 80%);
        z-index: 1;
      }

      .content {
        height: 100%;
        background-color: white;
        border-radius: 15px;
        display: flex;
        justify-content: space-evenly;
        flex-direction: column;
      }

      .content .h2 {
        width: 100%;
        padding-left: 40px;
        padding-right: 40px;
        -moz-user-select: -moz-none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .content .h2 h2 {
        color: hsl(217, 19%, 35%);
        font-weight: 700;
        line-height: 35px;
        font-size: 18px;
        line-height: 24px;
      }

      .content .text {
        width: 100%;
        padding-left: 40px;
        padding-right: 40px;
      }

      .content .text p {
        color: hsl(214, 17%, 51%);
        font-size: 15px;
        line-height: 20px;
        font-size: 13px;
      }

      .content .avatar {
        align-items: center;
        display: flex;
        width: 100%;
        padding-left: 40px;
      }

      .content .avatar img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        -moz-user-select: -moz-none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .content .avatar .info {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
        height: 60%;
        margin-left: 15px;
        -moz-user-select: -moz-none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .content .avatar .info .name p {
        color: hsl(217, 19%, 35%);
        font-weight: 700;
        font-size: 14px;
      }

      .content .avatar .info .date {
        width: 100%;
        text-align: left;
      }

      .content .avatar .info .date p {
        color: hsl(212, 23%, 69%);
        font-size: 13px;
        padding-top: 3px;
      }

      #button {
        border: none;
        background-color: hsl(210, 46%, 95%);
        cursor: pointer;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        margin-left: 50px;
      }

      #button:hover {
        transform: scale(.90);
        background-color: hsl(217, 19%, 35%);
      }

      .content .avatar .ok button img {
        width: 20px;
        height: 15px;
      }

      .picture {
        width: 360px;
        height: 200px;
        border-top-left-radius: 15px;
        border-bottom-left-radius: 15px;
        -moz-user-select: -moz-none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .picture .img {
        content: url("/article-preview-component-master/images/drawers.jpg");
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
      }

      #kutu {
        background-color: hsl(217, 19%, 35%);
        width: 275px;
        height: 55px;
        display: none;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        position: absolute;
        margin-top: 250px;
        margin-left: 70px;
        z-index: 1;
        border-radius: 10px;
        box-shadow: 0px 5px 20px 3px hsl(210, 46%, 85%);
        transition: all 1s linear;
        -moz-user-select: -moz-none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      #kutu a {
        padding-left: 20px;
      }

      #kutu a img {
        width: 22px;
        height: 22px;
      }

      #kutu p {
        color: hsl(212, 23%, 69%);
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 5px;
      }
    }
  </style>
</head>

<body>

  <div class="container">

    <div class="picture">
      <img class="img">
    </div>

    <div class="content">

      <div class="h2">
        <h2>
          Shift the overall look and feel by adding these wonderful
          touches to furniture in your home
        </h2>
      </div>

      <div class="text">
        <p>
          Ever been in a room and felt like something was missing? Perhaps
          it felt slightly bare and uninviting. I’ve got some simple tips
          to help you make any room feel complete.
        </p>
      </div>

      <div class="avatar">
        
        <img src="/article-preview-component-master/images/avatar-michelle.jpg">
        
        <div class="info">
          <div class="name">
            <p>
              Michelle Appleton
            </p>
          </div>

          <div class="date">
            <p>
              28 Jun 2020
            </p>
          </div>
        </div>

        <div class="ok">
          <button onclick="f()" id="button">
            <img src="/article-preview-component-master/images/icon-share.svg">
          </button>
        </div>

      </div>
      
    </div>

  </div>

  <div class="kutu" id="kutu" style="display: none">
    <p>
      Share
    </p>
    <a href="https://facebook.com" target="_blank">
      <img src="/article-preview-component-master/images/icon-facebook.svg">
    </a>
    <a href="https://twitter.com" target="_blank">
      <img src="/article-preview-component-master/images/icon-twitter.svg">
    </a>
    <a href="https://pinterest.com" target="_blank">
      <img src="/article-preview-component-master/images/icon-pinterest.svg">
    </a>
  </div>

  <script src="/article-preview-component-master/main.js"></script>
</body>

</html>