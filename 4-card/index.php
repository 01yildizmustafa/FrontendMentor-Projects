<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
  <title>4 Card</title>
  <style>
    @media (min-width: 1281px) {

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
      }

      body {
        min-height: 100vh;
        background-color: hsl(0, 0%, 98%);
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .container {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
      }

      .section-top {
        margin-top: 50px;
        width: 100%;
        height: 250px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }

      .section-top .h6 {
        width: 380px;
      }

      .section-top h6 {
        color: hsl(234, 12%, 34%);
        font-weight: 200;
        font-size: 30px;
      }

      .section-top .h1 {
        margin-bottom: 20px;
      }

      .section-top h1 {
        color: hsl(234, 12%, 34%);
      }

      .section-top .p {
        width: 550px;
        color: hsl(229, 6%, 66%);
      }

      .section-top p {
        text-align: center;
      }

      .cards {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: hsl(0, 0%, 98%);
      }

      .section-1 {
        width: 420px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .section-1 .box {
        border-radius: 5px;
        border-top: 5px solid hsl(180, 62%, 55%);
        width: 350px;
        height: 260px;
        background-color: hsl(0, 0%, 98%);
        box-shadow: 0px 1px 10px 0px hsl(180, 62%, 55%);
      }

      .section-1 .box .h2 {
        margin: 0 auto;
        width: 290px;
        margin-top: 30px;
      }

      .section-1 .box h2 {
        color: hsl(234, 12%, 34%);
      }

      .section-1 .box .p {
        width: 290px;
        margin: 0 auto;
        margin-top: 15px;
      }

      .section-1 .box .p p {
        color: hsl(229, 6%, 66%);
        font-size: 15px;
      }

      .section-1 .box .icon {
        width: 260px;
        height: 60px;
        text-align: center;
        margin: 0 auto;
        display: flex;
        align-items: flex-end;
        justify-content: right;
        margin-top: 30px;
      }

      .section-2 {
        width: 370px;
        height: 650px;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
        margin-bottom: 30px;
      }

      .section-2 .box-1 {
        border-radius: 5px;
        border-top: 5px solid hsl(0, 78%, 62%);
        width: 350px;
        height: 260px;
        background-color: hsl(0, 0%, 98%);
        box-shadow: 0px 1px 10px 0px hsl(0, 78%, 62%);
      }

      .section-2 .box-1 .h2 {
        margin: 0 auto;
        width: 290px;
        margin-top: 30px;
      }

      .section-2 .box-1 h2 {
        color: hsl(234, 12%, 34%);
      }

      .section-2 .box-1 .p {
        width: 290px;
        margin: 0 auto;
        margin-top: 15px;
      }

      .section-2 .box-1 .p p {
        color: hsl(229, 6%, 66%);
        font-size: 15px;
      }

      .section-2 .box-1 .icon {
        width: 260px;
        height: 60px;
        text-align: center;
        margin: 0 auto;
        display: flex;
        align-items: flex-end;
        justify-content: right;
        margin-top: 30px;
      }

      .section-2 .box-2 {
        border-radius: 5px;
        border-top: 5px solid hsl(34, 97%, 64%);
        width: 350px;
        height: 260px;
        background-color: hsl(0, 0%, 98%);
        box-shadow: 0px 1px 10px 0px hsl(34, 97%, 64%);
      }

      .section-2 .box-2 .h2 {
        margin: 0 auto;
        width: 290px;
        margin-top: 30px;
      }

      .section-2 .box-2 h2 {
        color: hsl(234, 12%, 34%);
      }

      .section-2 .box-2 .p {
        width: 290px;
        margin: 0 auto;
        margin-top: 15px;
      }

      .section-2 .box-2 .p p {
        color: hsl(229, 6%, 66%);
        font-size: 15px;
      }

      .section-2 .box-2 .icon {
        width: 260px;
        height: 60px;
        text-align: center;
        margin: 0 auto;
        display: flex;
        align-items: flex-end;
        justify-content: right;
        margin-top: 30px;
      }

      .section-3 {
        width: 420px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .section-3 .box {
        border-radius: 5px;
        border-top: 5px solid hsl(212, 86%, 64%);
        width: 350px;
        height: 260px;
        background-color: hsl(0, 0%, 98%);
        box-shadow: 0px 1px 10px 0px hsl(212, 86%, 64%);
      }

      .section-3 .box .h2 {
        margin: 0 auto;
        width: 290px;
        margin-top: 30px;
      }

      .section-3 .box h2 {
        color: hsl(234, 12%, 34%);
      }

      .section-3 .box .p {
        width: 290px;
        margin: 0 auto;
        margin-top: 15px;
      }

      .section-3 .box .p p {
        color: hsl(229, 6%, 66%);
        font-size: 15px;
      }

      .section-3 .box .icon {
        width: 260px;
        height: 60px;
        text-align: center;
        margin: 0 auto;
        display: flex;
        align-items: flex-end;
        justify-content: right;
        margin-top: 30px;
      }
    }





    @media (max-width: 1280px) {

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
      }

      body {
        min-height: 100vh;
        background-color: hsl(0, 0%, 98%);
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .container {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
      }

      .section-top {
        margin-top: 50px;
        margin-bottom: 50px;
        width: 350px;
        height: 250px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }

      .section-top .h6 {
        width: 320px;
      }

      .section-top h6 {
        color: hsl(234, 12%, 34%);
        font-weight: 200;
        font-size: 26px;
      }

      .section-top .h1 {
        margin-bottom: 20px;
        width: 320px;
      }

      .section-top h1 {
        color: hsl(234, 12%, 34%);
        font-size: 26px;
      }

      .section-top .p {
        width: 320px;
        color: hsl(229, 6%, 66%);
      }

      .section-top p {
        text-align: center;
      }

      .cards {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
        background-color: hsl(0, 0%, 98%);
      }

      .section-1 {
        width: 320px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .section-1 .box {
        border-radius: 5px;
        border-top: 5px solid hsl(180, 62%, 55%);
        width: 320px;
        height: 260px;
        background-color: hsl(0, 0%, 98%);
        box-shadow: 0px 1px 10px 0px hsl(180, 62%, 55%);
      }

      .section-1 .box .h2 {
        margin: 0 auto;
        width: 290px;
        margin-top: 30px;
      }

      .section-1 .box h2 {
        color: hsl(234, 12%, 34%);
      }

      .section-1 .box .p {
        width: 290px;
        margin: 0 auto;
        margin-top: 15px;
      }

      .section-1 .box .p p {
        color: hsl(229, 6%, 66%);
        font-size: 15px;
      }

      .section-1 .box .icon {
        width: 260px;
        height: 60px;
        text-align: center;
        margin: 0 auto;
        display: flex;
        align-items: flex-end;
        justify-content: right;
        margin-top: 30px;
      }

      .section-2 {
        width: 320px;
        height: 650px;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
        margin-bottom: 30px;
      }

      .section-2 .box-1 {
        border-radius: 5px;
        border-top: 5px solid hsl(0, 78%, 62%);
        width: 320px;
        height: 260px;
        background-color: hsl(0, 0%, 98%);
        box-shadow: 0px 1px 10px 0px hsl(0, 78%, 62%);
      }

      .section-2 .box-1 .h2 {
        margin: 0 auto;
        width: 290px;
        margin-top: 30px;
      }

      .section-2 .box-1 h2 {
        color: hsl(234, 12%, 34%);
      }

      .section-2 .box-1 .p {
        width: 290px;
        margin: 0 auto;
        margin-top: 15px;
      }

      .section-2 .box-1 .p p {
        color: hsl(229, 6%, 66%);
        font-size: 15px;
      }

      .section-2 .box-1 .icon {
        width: 260px;
        height: 60px;
        text-align: center;
        margin: 0 auto;
        display: flex;
        align-items: flex-end;
        justify-content: right;
        margin-top: 40px;
      }

      .section-2 .box-2 {
        border-radius: 5px;
        border-top: 5px solid hsl(34, 97%, 64%);
        width: 320px;
        height: 260px;
        background-color: hsl(0, 0%, 98%);
        box-shadow: 0px 1px 10px 0px hsl(34, 97%, 64%);
      }

      .section-2 .box-2 .h2 {
        margin: 0 auto;
        width: 290px;
        margin-top: 30px;
      }

      .section-2 .box-2 h2 {
        color: hsl(234, 12%, 34%);
      }

      .section-2 .box-2 .p {
        width: 290px;
        margin: 0 auto;
        margin-top: 15px;
      }

      .section-2 .box-2 .p p {
        color: hsl(229, 6%, 66%);
        font-size: 15px;
      }

      .section-2 .box-2 .icon {
        width: 260px;
        height: 60px;
        text-align: center;
        margin: 0 auto;
        display: flex;
        align-items: flex-end;
        justify-content: right;
        margin-top: 30px;
      }

      .section-3 {
        width: 320px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: -30px;
        margin-bottom: 100px;
      }

      .section-3 .box {
        border-radius: 5px;
        border-top: 5px solid hsl(212, 86%, 64%);
        width: 320px;
        height: 260px;
        background-color: hsl(0, 0%, 98%);
        box-shadow: 0px 1px 10px 0px hsl(212, 86%, 64%);
      }

      .section-3 .box .h2 {
        margin: 0 auto;
        width: 290px;
        margin-top: 30px;
      }

      .section-3 .box h2 {
        color: hsl(234, 12%, 34%);
      }

      .section-3 .box .p {
        width: 290px;
        margin: 0 auto;
        margin-top: 15px;
      }

      .section-3 .box .p p {
        color: hsl(229, 6%, 66%);
        font-size: 15px;
      }

      .section-3 .box .icon {
        width: 260px;
        height: 60px;
        text-align: center;
        margin: 0 auto;
        display: flex;
        align-items: flex-end;
        justify-content: right;
        margin-top: 40px;
      }
    }
  </style>
</head>

<body>
  <div class="container">

    <div class="section-top">
      <div class="h6">
        <h6>
          Reliable, efficient delivery
        </h6>
      </div>
      <div class="h1">
        <h1>
          Powered by Technology
        </h1>
      </div>
      <div class="p">
        <p>
          Our Artificial Intelligence powered tools use millions of project data points
          to ensure that your project is successful
        </p>
      </div>
    </div>

    <div class="cards">

      <div class="section-1">
        <div class="box">
          <div class="h2">
            <h2>
              Supervisor
            </h2>
          </div>
          <div class="p">
            <p>
              Monitors activity to identify project roadblocks
            </p>
          </div>
          <div class="icon">
            <img src="/4-card/images/icon-supervisor.svg">
          </div>
        </div>
      </div>


      <div class="section-2">
        <div class="box-1">
          <div class="h2">
            <h2>
              Team Builder
            </h2>
          </div>
          <div class="p">
            <p>
              Scans our talent network to create the optimal team for your project
            </p>
          </div>
          <div class="icon">
            <img src="/4-card/images/icon-team-builder.svg">
          </div>
        </div>
        <div class="box-2">
          <div class="h2">
            <h2>
              Karma
            </h2>
          </div>
          <div class="p">
            <p>
              Regularly evaluates our talent to ensure quality
            </p>
          </div>
          <div class="icon">
            <img src="/4-card/images/icon-karma.svg">
          </div>
        </div>
      </div>


      <div class="section-3">
        <div class="box">
          <div class="h2">
            <h2>
              Calculator
            </h2>
          </div>
          <div class="p">
            <p>
              Uses data from past projects to provide better delivery estimates
            </p>
          </div>
          <div class="icon">
            <img src="/4-card/images/icon-calculator.svg">
          </div>
        </div>
      </div>

    </div>

  </div>
</body>

</html>








<!--
Reliable, efficient delivery
Powered by Technology

Our Artificial Intelligence powered tools use millions of project data points
to ensure that your project is successful

Supervisor
Monitors activity to identify project roadblocks

Team Builder
Scans our talent network to create the optimal team for your project

Karma
Regularly evaluates our talent to ensure quality

Calculator
Uses data from past projects to provide better delivery estimates
-->