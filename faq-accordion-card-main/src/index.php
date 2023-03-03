<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="/frontend-mentor/faq-accordion-card-main/images/favicon-32x32.png">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
  <title>Frontend Mentor | FAQ Accordion Card</title>
</head>

<body>

  <div class="container">


    <div class="section-1">

      <div class="picture">
        <img class="img-1">
        <img class="img-2">
      </div>

    </div>


    <div class="section-2">

      <div class="h1">
        <h1>
          FAQ
        </h1>
      </div>


      <div class="faq">
        <div class="question">
          <div class="p" id="p-1">
            <p>
              How many team members can I invite?
            </p>
          </div>

          <div class="ok">
            <button onclick="f1()"><img class="img" id="img-1"></button>
          </div>
        </div>

        <div class="answer" id="answer-1" style="display: none">
          <div class="p">
            <p>
              You can invite up to 2 additional users on the Free plan. There is no limit on
              team members for the Premium plan.
            </p>
          </div>
        </div>
      </div>


      <div class="faq">
        <div class="question">
          <div class="p" id="p-2">
            <p>
              What is the maximum file upload size?
            </p>
          </div>

          <div class="ok">
            <button onclick="f2()"><img class="img" id="img-2"></button>
          </div>
        </div>

        <div class="answer" id="answer-2" style="display: none">
          <div class="p">
            <p>
              No more than 2GB. All files in your account must fit your allotted storage space.
            </p>
          </div>
        </div>
      </div>


      <div class="faq">
        <div class="question">
          <div class="p" id="p-3">
            <p>
              How do I reset my password?
            </p>
          </div>

          <div class="ok">
            <button onclick="f3()"><img class="img" id="img-3"></button>
          </div>
        </div>

        <div class="answer" id="answer-3" style="display: none">
          <div class="p">
            <p>
              Click “Forgot password” from the login page or “Change password” from your profile page.
              A reset link will be emailed to you.
            </p>
          </div>
        </div>
      </div>


      <div class="faq">
        <div class="question">
          <div class="p" id="p-4">
            <p>
              Can I cancel my subscription?
            </p>
          </div>

          <div class="ok">
            <button onclick="f4()"><img class="img" id="img-4"></button>
          </div>
        </div>

        <div class="answer" id="answer-4" style="display: none">
          <div class="p">
            <p>
              Yes! Send us a message and we’ll process your request no questions asked.
            </p>
          </div>
        </div>
      </div>


      <div class="faq">
        <div class="question">
          <div class="p" id="p-5">
            <p>
              Do you provide additional support?
            </p>
          </div>

          <div class="ok">
            <button onclick="f5()"><img class="img" id="img-5"></button>
          </div>
        </div>

        <div class="answer" id="answer-5" style="display: none">
          <div class="p">
            <p>
              Chat and email support is available 24/7. Phone lines are open during normal business hours.
            </p>
          </div>
        </div>
      </div>




    </div>


  </div>

  <script src="main.js"></script>
</body>

</html>
<!-- 
How many team members can I invite?
You can invite up to 2 additional users on the Free plan. There is no limit on 
team members for the Premium plan.

What is the maximum file upload size?
No more than 2GB. All files in your account must fit your allotted storage space.

How do I reset my password?
Click “Forgot password” from the login page or “Change password” from your profile page.
A reset link will be emailed to you.

Can I cancel my subscription?
Yes! Send us a message and we’ll process your request no questions asked.

Do you provide additional support?
Chat and email support is available 24/7. Phone lines are open during normal business hours.
-->