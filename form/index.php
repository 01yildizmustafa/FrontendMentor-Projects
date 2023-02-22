<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Form</title>
  <style>
    
    @media (min-width: 1281px) {

      * {
        font-family: 'Poppins', sans-serif;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      body {
        min-height: 100vh;
        background-image: url("/form/images/bg-intro-desktop.png");
        background-color: hsl(0, 100%, 74%);
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .container {
        width: 100%;
        height: 100vh;
        display: flex;
      }

      .section-1 {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 50%;
      }

      .section-1 .h1 {
        width: 500px;
        padding-bottom: 40px;
      }

      .section-1 .h1 h1 {
        color: white;
        font-size: 44px;
        font-weight: 700;
      }

      .section-1 .p {
        width: 500px;
      }

      .section-1 .p p {
        font-size: 16px;
        color: white;
      }

      .section-2 {
        width: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }

      .section-2 .price {
        width: 500px;
        height: 60px;
        background-color: hsl(248, 32%, 49%);
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 9px;
        margin-bottom: 30px;
        border: none;
        border-bottom: 7px solid hsl(248, 32%, 40%);
      }

      .section-2 .price .days {
        color: white;
        padding-right: 6px;
        font-weight: 600;
      }
      
      .section-2 .price .other {
        color: white ;
        padding-right: 6px;
        opacity: .9;
      }

      .section-2 .form-container {
        width: 500px;
        height: 450px;
        background-color: lavender;
        border-radius: 9px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        border: none;
        border-bottom: 7px solid #C85B5D;
        background-color: #fff;
      }

      .input {
        width: 420px;
        height: 50px;
        border-radius: 10px;
        margin-bottom: 20px;
      }

      input {
        width: 100%;
        height: 100%;
        border: 1px solid hsl(246, 25%, 77%);
        border-radius: 5px;
        padding-left: 30px;
        color: hsl(249, 10%, 26%);
        font-weight: 600;
      }

      input:focus {
        outline: 1px solid hsl(248, 32%, 49%);
      }

      input::placeholder {
        font-weight: 600;
      }

      #button {
        width: 420px;
        height: 53px;
        margin-bottom: 10px;
        border: none;
        border-bottom: 4px solid hsl(154, 59%, 45%);
        background-color: hsl(154, 59%, 51%);
        border-radius: 5px;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: white;
        font-weight: 500;
        cursor: pointer;
      }

      #button:hover {
        opacity: .8;
      }

      .info {
        width: 420px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 10px;
      }
      
      .info .grey {
        padding-right: 5px;
      }

      .info .grey p {
        color: hsl(246, 25%, 77%);
        font-weight: 400;
      }

      .info .red a {
        text-decoration: none;
        color: hsl(0, 100%, 74%);
        font-weight: 700;
      }
    }

    @media (max-width: 1280px) {

      * {
        font-family: 'Poppins', sans-serif;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      body {
        min-height: 100vh;
        background-image: url("/form/images/bg-intro-mobile.png");
        background-color: hsl(0, 100%, 74%);
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .container {
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        flex-direction: column;
      }

      .section-1 {
        margin-top: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 50%;
      }

      .section-1 .h1 {
        width: 320px;
        padding-bottom: 20px;
        text-align: center;
      }

      .section-1 .h1 h1 {
        color: white;
        font-weight: 700;
      }

      .section-1 .p {
        width: 320px;
        height: 180px;
      }

      .section-1 .p p {
        font-size: 16px;
        color: white;
        text-align: center;
      }

      .section-2 {
        width: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }

      .section-2 .price {
        width: 320px;
        height: 90px;
        background-color: hsl(248, 32%, 49%);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border-radius: 9px;
        margin-bottom: 30px;
        border: none;
        border-bottom: 7px solid hsl(248, 32%, 40%);
      }

      .section-2 .price .days {
        color: white;
        padding-right: 6px;
        font-weight: 600;
      }
      
      .section-2 .price .other {
        color: white ;
        padding-right: 6px;
        opacity: .9;
      }

      .section-2 .form-container {
        width: 320px;
        height: 450px;
        border-radius: 9px;
        display: flex;
        align-items: center;
        border: none;
        border-bottom: 7px solid #C85B5D;
        background-color: white;
        margin-bottom: 70px;
        padding-left: 20px;
      }

      .input {
        width: 280px;
        height: 50px;
        border-radius: 10px;
        margin-bottom: 20px;
        background-color: pink;
      }

      input {
        width: 100%;
        height: 100%;
        border: 1px solid hsl(246, 25%, 77%);
        border-radius: 5px;
        padding-left: 30px;
        color: hsl(249, 10%, 26%);
        font-weight: 600;
      }

      input:focus {
        outline: 1px solid hsl(248, 32%, 49%);
      }

      input::placeholder {
        font-weight: 600;
      }

      #button {
        width: 280px;
        height: 53px;
        margin-bottom: 10px;
        border: none;
        border-bottom: 4px solid hsl(154, 59%, 45%);
        background-color: hsl(154, 59%, 51%);
        border-radius: 5px;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: white;
        font-weight: 500;
        cursor: pointer;
        padding-left: 20px;
      }

      #button:hover {
        opacity: .8;
      }

      .info {
        width: 280px;
        height: 20px;
        display: block;
        align-items: center;
        justify-content: center;
        font-size: 10px;
        padding-left: 20px;
        text-align: center;
      }

      .info .grey {
        padding-right: 5px;
      }

      .info .grey p {
        color: hsl(246, 25%, 77%);
        font-weight: 400;
      }

      .info .red a {
        text-decoration: none;
        color: hsl(0, 100%, 74%);
        font-weight: 700;
      }
    }

  </style>
</head>

<body>
  <div class="container">

    <div class="section-1">
      <div class="h1">
        <h1>
          Learn to code by watching others
        </h1>
      </div>
      <div class="p">
        <p>
          See how experienced developers solve problems in real-time. Watching scripted tutorials is great,
          but understanding how developers think is invaluable.
        </p>
      </div>
    </div>

    <div class="section-2">
      <div class="price">
        <p>
          <div class="days">
            Try it free 7 days
          </div>
          <div class="other">
            then $20/mo. thereafter
          </div>
        </p>
      </div>
      <div class="form-container">
        <form action="" method="post">
          <div class="input">
            <input type="text" name="" placeholder="First Name" required autocomplete="off">
          </div>
          <div class="input">
            <input type="text" name="" placeholder="Last Name" required autocomplete="off">
          </div>
          <div class="input">
            <input type="" name="" placeholder="Email Address" required autocomplete="off">
          </div>
          <div class="input">
            <input type="password" name="" placeholder="Password" required autocomplete="off">
          </div>
          <button type="submit" id="button">
            Claim your free trial
          </button>
          <div class="info">
            <div class="grey">
              <p>
                By clicking the button, you are agreeing to our
              </p>
            </div>
            <div class="red">
              <a href="#">Terms and Services</a>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</body>

</html>