<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;700&display=swap" rel="stylesheet">
  <title>Social Proof</title>
  <style>
    @media (min-width: 1281px) {

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'League Spartan', sans-serif;
      }

      body {
        min-height: 100vh;
        background-image: url("/social-proof/images/bg-pattern-top-desktop.svg");
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .container {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }

      .section-1 {
        width: 1200px;
        height: 300px;
        display: flex;
      }

      .section-1 .part-1 {
        width: 600px;
        height: 300px;
        display: flex;
        justify-content: space-evenly;
        flex-direction: column;
      }

      .section-1 .part-1 .h1 {
        width: 350px;
        background-color: #fff;
      }

      .section-1 .part-1 .h1 h1 {
        font-size: 50px;
        color: hsl(300, 43%, 22%);
        font-family: 'League Spartan', sans-serif;
      }

      .section-1 .part-1 .p {
        width: 370px;
      }

      .section-1 .part-1 .p p {
        color: hsl(303, 10%, 53%);
        line-height: 23px;
        font-size: 17px;
      }

      .section-1 .part-2 {
        width: 600px;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
      }

      .section-1 .part-2 .star-1 {
        display: flex;
        align-items: center;
        justify-content: left;
        flex-direction: row-reverse;
        background-color: hsl(300, 24%, 96%);
        width: 70%;
        height: 50px;
        border-radius: 5px;
        margin-right: 100px;
      }

      .section-1 .part-2 .star-1 .p {
        padding-left: 30px;
      }

      .section-1 .part-2 .star-1 .p p {
        color: hsl(300, 43%, 22%);
        font-weight: 700;
      }

      .section-1 .part-2 .star-1 .img {
        padding-left: 30px;
      }

      .section-1 .part-2 .star-2 {
        display: flex;
        align-items: center;
        justify-content: left;
        flex-direction: row-reverse;
        background-color: hsl(300, 24%, 96%);
        width: 70%;
        height: 50px;
        border-radius: 5px;
        margin-right: 10px;
      }

      .section-1 .part-2 .star-2 .p {
        padding-left: 30px;
      }

      .section-1 .part-2 .star-2 .p p {
        color: hsl(300, 43%, 22%);
        font-weight: 700;
      }

      .section-1 .part-2 .star-2 .img {
        padding-left: 30px;
      }

      .section-1 .part-2 .star-3 {
        display: flex;
        align-items: center;
        justify-content: left;
        flex-direction: row-reverse;
        background-color: hsl(300, 24%, 96%);
        width: 70%;
        height: 50px;
        border-radius: 5px;
        margin-right: -90px;
      }

      .section-1 .part-2 .star-3 .p {
        padding-left: 30px;
      }

      .section-1 .part-2 .star-3 .p p {
        color: hsl(300, 43%, 22%);
        font-weight: 700;
      }

      .section-1 .part-2 .star-3 .img {
        padding-left: 30px;
      }

      .section-2 {
        background-color: white;
        width: 1200px;
        height: 300px;
        display: flex;
        justify-content: left;
      }

      .section-2 .box-1 {
        width: 370px;
        height: 250px;
        background-color: hsl(300, 43%, 22%);
        border-radius: 8px;
      }

      .section-2 .box-1 .part-1 {
        display: flex;
        align-items: center;
      }

      .section-2 .box-1 .part-1 .img {
        margin-left: 30px;
        margin-top: 40px;
      }

      .section-2 .box-1 .part-1 img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
      }

      .section-2 .box-1 .part-1 .profile {
        margin-left: 20px;
        margin-top: 40px;
      }

      .section-2 .box-1 .part-1 .profile .name p {
        color: #fff;
        font-weight: 500;
        padding-bottom: 7px;
      }

      .section-2 .box-1 .part-1 .profile .identity p {
        color: hsl(333, 80%, 67%);
        font-weight: 400;
      }

      .section-2 .box-1 .part-2 .p {
        width: 80%;
        padding-top: 30px;
        margin: 0 auto;
      }

      .section-2 .box-1 .part-2 .p p {
        color: #fff;
        line-height: 23px;
      }

      .section-2 .box-2 {
        width: 370px;
        height: 250px;
        background-color: hsl(300, 43%, 22%);
        margin-left: 45px;
        margin-top: 25px;
        border-radius: 8px;
      }

      .section-2 .box-2 .part-1 {
        display: flex;
        align-items: center;
      }

      .section-2 .box-2 .part-1 .img {
        margin-left: 30px;
        margin-top: 40px;
      }

      .section-2 .box-2 .part-1 img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
      }

      .section-2 .box-2 .part-1 .profile {
        margin-left: 20px;
        margin-top: 40px;
      }

      .section-2 .box-2 .part-1 .profile .name p {
        color: #fff;
        font-weight: 500;
        padding-bottom: 7px;
      }

      .section-2 .box-2 .part-1 .profile .identity p {
        color: hsl(333, 80%, 67%);
        font-weight: 400;
      }

      .section-2 .box-2 .part-2 .p {
        width: 80%;
        padding-top: 30px;
        margin: 0 auto;
      }

      .section-2 .box-2 .part-2 .p p {
        color: #fff;
        line-height: 23px;
      }

      .section-2 .box-3 {
        width: 370px;
        height: 250px;
        background-color: hsl(300, 43%, 22%);
        margin-left: 45px;
        margin-top: 50px;
        border-radius: 8px;
      }

      .section-2 .box-3 .part-1 {
        display: flex;
        align-items: center;
      }

      .section-2 .box-3 .part-1 .img {
        margin-left: 30px;
        margin-top: 40px;
      }

      .section-2 .box-3 .part-1 img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
      }

      .section-2 .box-3 .part-1 .profile {
        margin-left: 20px;
        margin-top: 40px;
      }

      .section-2 .box-3 .part-1 .profile .name p {
        color: #fff;
        font-weight: 500;
        padding-bottom: 7px;
      }

      .section-2 .box-3 .part-1 .profile .identity p {
        color: hsl(333, 80%, 67%);
        font-weight: 400;
      }

      .section-2 .box-3 .part-2 .p {
        width: 80%;
        padding-top: 30px;
        margin: 0 auto;
      }

      .section-2 .box-3 .part-2 .p p {
        color: #fff;
        line-height: 23px;
      }

    }

    @media (max-width: 1280px) {

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'League Spartan', sans-serif;
      }

      body {
        min-height: 100vh;
        background-image: url("/social-proof/images/bg-pattern-top-mobile.svg");
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .container {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }

      .section-1 {
        width: 350px;
        height: 550px;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
        margin-top: 50px;
      }

      .section-1 .part-1 {
        width: 350px;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
      }

      .section-1 .part-1 .h1 {
        width: 250px;
        background-color: #fff;
      }
      
      .section-1 .part-1 .h1 h1{
        text-align: center;
        color: hsl(300, 43%, 22%);
        font-family: 'League Spartan', sans-serif;
      }

      .section-1 .part-1 .p {
        text-align: center;
        width: 310px;
      }

      .section-1 .part-1 .p p {
        color: hsl(303, 10%, 53%);
        line-height: 23px;
        font-size: 17px;
      }

      .section-1 .part-2 {
        width: 350px;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
      }

      .section-1 .part-2 .star-1 {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column-reverse;
        background-color: hsl(300, 24%, 96%);
        width: 85%;
        height: 65px;
        border-radius: 5px;
      }

      .section-1 .part-2 .star-1 .p p {
        color: hsl(300, 43%, 22%);
        font-weight: 700;
      }
      .section-1 .part-2 .star-2 {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column-reverse;
        background-color: hsl(300, 24%, 96%);
        width: 85%;
        height: 65px;
        border-radius: 5px;
      }

      .section-1 .part-2 .star-2 .p p {
        color: hsl(300, 43%, 22%);
        font-weight: 700;
      }
      
      .section-1 .part-2 .star-3 {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column-reverse;
        background-color: hsl(300, 24%, 96%);
        width: 85%;
        height: 65px;
        border-radius: 5px;
      }

      .section-1 .part-2 .star-3 .p p {
        color: hsl(300, 43%, 22%);
        font-weight: 700;
      }

      .section-2 {
        background-color: white;
        width: 350px;
        height: 900px;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        flex-direction: column;
        margin-bottom: 50px;
      }

      .section-2 .box-1 {
        width: 350px;
        height: 250px;
        background-color: hsl(300, 43%, 22%);
        border-radius: 8px;
      }

      .section-2 .box-1 .part-1 {
        display: flex;
        align-items: center;
      }

      .section-2 .box-1 .part-1 .img {
        margin-left: 30px;
        margin-top: 40px;
      }

      .section-2 .box-1 .part-1 img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
      }

      .section-2 .box-1 .part-1 .profile {
        margin-left: 20px;
        margin-top: 40px;
      }

      .section-2 .box-1 .part-1 .profile .name p {
        color: #fff;
        font-weight: 500;
        padding-bottom: 7px;
      }

      .section-2 .box-1 .part-1 .profile .identity p {
        color: hsl(333, 80%, 67%);
        font-weight: 400;
      }

      .section-2 .box-1 .part-2 .p {
        width: 80%;
        padding-top: 30px;
        margin: 0 auto;
      }

      .section-2 .box-1 .part-2 .p p {
        color: #fff;
        line-height: 23px;
      }

      .section-2 .box-2 {
        width: 350px;
        height: 250px;
        background-color: hsl(300, 43%, 22%);
        border-radius: 8px;
      }

      .section-2 .box-2 .part-1 {
        display: flex;
        align-items: center;
      }

      .section-2 .box-2 .part-1 .img {
        margin-left: 30px;
        margin-top: 40px;
      }

      .section-2 .box-2 .part-1 img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
      }

      .section-2 .box-2 .part-1 .profile {
        margin-left: 20px;
        margin-top: 40px;
      }

      .section-2 .box-2 .part-1 .profile .name p {
        color: #fff;
        font-weight: 500;
        padding-bottom: 7px;
      }

      .section-2 .box-2 .part-1 .profile .identity p {
        color: hsl(333, 80%, 67%);
        font-weight: 400;
      }

      .section-2 .box-2 .part-2 .p {
        width: 80%;
        padding-top: 30px;
        margin: 0 auto;
      }

      .section-2 .box-2 .part-2 .p p {
        color: #fff;
        line-height: 23px;
      }

      .section-2 .box-3 {
        width: 350px;
        height: 250px;
        background-color: hsl(300, 43%, 22%);
        border-radius: 8px;
      }

      .section-2 .box-3 .part-1 {
        display: flex;
        align-items: center;
      }

      .section-2 .box-3 .part-1 .img {
        margin-left: 30px;
        margin-top: 40px;
      }

      .section-2 .box-3 .part-1 img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
      }

      .section-2 .box-3 .part-1 .profile {
        margin-left: 20px;
        margin-top: 40px;
      }

      .section-2 .box-3 .part-1 .profile .name p {
        color: #fff;
        font-weight: 500;
        padding-bottom: 7px;
      }

      .section-2 .box-3 .part-1 .profile .identity p {
        color: hsl(333, 80%, 67%);
        font-weight: 400;
      }

      .section-2 .box-3 .part-2 .p {
        width: 80%;
        padding-top: 30px;
        margin: 0 auto;
      }

      .section-2 .box-3 .part-2 .p p {
        color: #fff;
        line-height: 23px;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="section-1">
      <div class="part-1">
        <div class="h1">
          <h1>
            10,000+ of our users love our products.
          </h1>
        </div>
        <div class="p">
          <p>
            We only provide great products combined with excellent customer service.
            See what our satisfied customers are saying about our services.
          </p>
        </div>
      </div>
      <div class="part-2">
        <div class="star-1">
          <div class="p">
            <p>
              Rated 5 Stars in Reviews
            </p>
          </div>
          <div class="img">
            <img src="/social-proof/images/icon-star.svg">
            <img src="/social-proof/images/icon-star.svg">
            <img src="/social-proof/images/icon-star.svg">
            <img src="/social-proof/images/icon-star.svg">
            <img src="/social-proof/images/icon-star.svg">
          </div>
        </div>
        <div class="star-2">
          <div class="p">
            <p>
              Rated 5 Stars in Report Guru
            </p>
          </div>
          <div class="img">
            <img src="/social-proof/images/icon-star.svg">
            <img src="/social-proof/images/icon-star.svg">
            <img src="/social-proof/images/icon-star.svg">
            <img src="/social-proof/images/icon-star.svg">
            <img src="/social-proof/images/icon-star.svg">
          </div>
        </div>
        <div class="star-3">
          <div class="p">
            <p>
              Rated 5 Stars in BestTech
            </p>
          </div>
          <div class="img">
            <img src="/social-proof/images/icon-star.svg">
            <img src="/social-proof/images/icon-star.svg">
            <img src="/social-proof/images/icon-star.svg">
            <img src="/social-proof/images/icon-star.svg">
            <img src="/social-proof/images/icon-star.svg">
          </div>
        </div>
      </div>
    </div>
    <div class="section-2">
      <div class="box-1">
        <div class="part-1">
          <div class="img">
            <img src="/social-proof/images/image-colton.jpg">
          </div>
          <div class="profile">
            <div class="name">
              <p>
                Colton Smith
              </p>
            </div>
            <div class="identity">
              <p>
                Verified Buyer
              </p>
            </div>
          </div>
        </div>
        <div class="part-2">
          <div class="p">
            <p>
              "We needed the same printed design as the one we had ordered a week prior.
              Not only did they find the original order, but we also received it in time.
              Excellent!"
            </p>
          </div>
        </div>
      </div>
      <div class="box-2">
        <div class="part-1">
          <div class="img">
            <img src="/social-proof/images/image-irene.jpg">
          </div>
          <div class="profile">
            <div class="name">
              <p>
                Irene Roberts
              </p>
            </div>
            <div class="identity">
              <p>
                Verified Buyer
              </p>
            </div>
          </div>
        </div>
        <div class="part-2">
          <div class="p">
            <p>
              "Customer service is always excellent and very quick turn around. Completely
              delighted with the simplicity of the purchase and the speed of delivery."
            </p>
          </div>
        </div>
      </div>
      <div class="box-3">
        <div class="part-1">
          <div class="img">
            <img src="/social-proof/images/image-anne.jpg">
          </div>
          <div class="profile">
            <div class="name">
              <p>
                Anne Wallace
              </p>
            </div>
            <div class="identity">
              <p>
                Verified Buyer
              </p>
            </div>
          </div>
        </div>
        <div class="part-2">
          <div class="p">
            <p>
              "Put an order with this company and can only praise them for the very high
              standard. Will definitely use them again and recommend them to everyone!"
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>



<!--
10,000+ of our users love our products.

We only provide great products combined with excellent customer service.
See what our satisfied customers are saying about our services.

Rated 5 Stars in Reviews
Rated 5 Stars in Report Guru
Rated 5 Stars in BestTech

Colton Smith 
Verified Buyer
"We needed the same printed design as the one we had ordered a week prior.
Not only did they find the original order, but we also received it in time.
Excellent!"

Irene Roberts 
Verified Buyer
"Customer service is always excellent and very quick turn around. Completely
delighted with the simplicity of the purchase and the speed of delivery."

Anne Wallace 
Verified Buyer
"Put an order with this company and can only praise them for the very high
standard. Will definitely use them again and recommend them to everyone!"
-->