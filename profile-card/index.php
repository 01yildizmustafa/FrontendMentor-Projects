<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <title>Profile Card</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap');

    * {
      padding: 0;
      margin: 0;
      font-family: 'Kumbh Sans', sans-serif;
    }

    body {
      min-height: 100vh;
      background-color: hsl(185, 75%, 39%);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      background-image: url("/profile-card/images/bg-pattern-top.svg");
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }

    .container {
      min-height: 390px;
      min-width: 350px;
      height: 390px;
      width: 350px;
      background-color: whitesmoke;
      border-radius: 15px;
      position: relative;
    }

    .bg-top {
      width: 100%;
    }

    .bg-top img {
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }

    .profile {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .profile img {
      border-radius: 50%;
      border: 5px white solid;
      position: absolute;
      text-align: center;
    }

    .information {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      margin-top: 70px;
    }

    .name {
      color: hsl(229, 23%, 23%);
      font-size: 18px;
      font-weight: 700;
    }

    .age {
      color: hsl(227, 10%, 46%);
      font-size: 18px;
      font-weight: 400;
      padding-left: 10px;
    }

    .info-2 {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .location {
      color: hsl(227, 10%, 46%);
      font-size: 18px;
      font-weight: 400;
      padding-top: 10px;
    }

    .detail {
      margin-top: 25px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      border-top: 1px solid hsl(0, 0%, 59%);
    }

    .number {
      display: flex;
      align-items: center;
      justify-content: space-evenly;
      width: 100%;
      color: hsl(229, 23%, 23%);
      padding-top: 20px;
    }

    .text {
      display: flex;
      align-items: center;
      justify-content: space-evenly;
      width: 100%;
      color: hsl(227, 10%, 46%);
      padding-top: 5px;
    }

    .like {
      padding-right: 20px;
    }

  </style>
</head>
<body>
  <div class="container">
    <div class="bg-top">
      <img src="/profile-card/images/bg-pattern-card.svg">
    </div>
    <div class="profile">
      <img src="/profile-card/images/image-victor.jpg">
    </div>
    <div class="information">
        <span class="name">Victor Crest</span>
        <span class="age">26</span>
    </div>
    <div class="info-2">
      <span class="location">London</span>
    </div>
    <div class="detail">

      <div class="number">
        <h3>80K</h3>
        <h3>803K</h3>
        <h3>1.4K</h3>
      </div>

      <div class="text">
        <p>Followers</p>
        <p class="like">Likes</p>
        <p>Photos</p>
      </div>

    
    </div>




  </div>
</body>
</html>

<!-- 

Victor Crest
26
London

80K
Followers

803K
Likes

1.4K
Photos

 -->