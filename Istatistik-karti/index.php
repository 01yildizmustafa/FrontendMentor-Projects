<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- displays site properly based on user's device -->
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <title>İstatistik Kartı</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Lexend+Deca&display=swap');

    /* @media (min-width: 376px) and (max-width: 3000px) { */
      @media (min-width: 1440px) {
      * {
        padding: 0;
        margin: 0;
      }

      body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .kapsa {
        background-color: hsl(233, 47%, 7%);
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .kart {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: hsl(244, 38%, 16%);
        width: 64%;
        height: 56%;
        border-radius: 7px;
      }

      .sections {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      .section-1 {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-direction: column;
        width: 51.5%;
        height: 100%;
      }

      h1 {
        font-family: 'Inter', sans-serif;
        font-weight: 700;
        color: hsl(0, 0%, 100%);
        padding-top: 60px;
        padding-left: 60px;
        padding-right: 60px;
      }

      span {
        font-size: 13px;
        font-family: 'Inter', sans-serif;
        line-height: 24px;
        color: hsla(0, 0%, 100%, 0.6);
        padding-left: 60px;
        padding-right: 120px;
      }

      .special {
        color: hsl(277, 64%, 61%);
        font-family: 'Inter', sans-serif;
        font-weight: 700;
        display: inline-block;
      }

      .part {
        width: 100%;
        height: 150px;
        display: flex;
        flex-direction: column;
      }

      .stats {
        width: 60%;
        height: 100%;
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        padding-left: 60px;
      }

      h2 {
        font-family: 'Inter', sans-serif;
        color: purple;
        font-size: 22px;
        color: hsl(0, 0%, 100%);
      }

      .text {
        width: 60%;
        height: 100%;
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        padding-left: 60px;
      }

      h5 {
        text-transform: uppercase;
        font-family: 'Lexend Deca', sans-serif;
        font-weight: 400;
        font-size: 13px;
        line-height: 23px;
        color: hsla(0, 0%, 100%, 0.6);
      }

      .section-2 {
        width: 50%;
        height: 100%;
        background-color: hsl(277, 64%, 61%);
        border-top-right-radius: 7px;
        border-bottom-right-radius: 7px;
      }

      .img {
        width: 100%;
        height: 100%;
        background-image: url("/Istatistik-karti/images/image-header-desktop.jpg");
        background-position:right;
        background-repeat: no-repeat;
        background-size: cover;
        opacity: .7;
        border-top-right-radius: 7px;
        border-bottom-right-radius: 7px;
      }
    }
  </style>
</head>

<body>
  <div class="kapsa">
    <div class="kart">
      <div class="sections">
        <div class="section-1">
          <h1>Get <div class="special">insights</div> that help your business grow.</h1>
          <span>
            Discover the benefits of data analytics and make better decisions regarding revenue, customer
            experience, and overall efficiency.
          </span>
          <div class="part">
            <div class="stats">
              <h2>10k+</h2>
              <h2>314</h2>
              <h2>12M+</h2>
            </div>
            <div class="text">
              <h5>companıes</h5>
              <h5>templates</h5>
              <h5>querıes</h5>
            </div>
          </div>
        </div>
        <div class="section-2">
          <div class="img">

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>