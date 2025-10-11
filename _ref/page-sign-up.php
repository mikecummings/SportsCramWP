<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BY584TLEMM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BY584TLEMM');
</script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sports Cram - Sports Cheat Sheet</title>
  <link rel="icon" href="https://www.sportscram.com/wp-content/uploads/2025/04/favicon-32x32-1.png" sizes="32x32">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(to bottom right, #fefefe, #e3f2fd);
      color: #222;
      line-height: 1.6;
    }
    header {
      background: #004a8d;
      color: #fff;
      text-align: center;
      padding: 2rem 1rem;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    header img {
      width: 300px;
      height: auto;
      margin-bottom: 0.5rem;
    }
    .tagline {
      font-size: 1.1rem;
      margin-top: 0.5rem;
      opacity: 0.95;
    }
    main {
      padding: 2rem 1rem;
      max-width: 900px;
      margin: auto;
    }
    section {
      background: #fff;
      border-radius: 12px;
      padding: 1.5rem;
      margin-bottom: 2rem;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    h2 {
      font-size: 1.5rem;
      margin-bottom: 1rem;
      color: #004a8d;
    }
    ul {
      list-style: none;
      padding: 0;
    }
    li {
      margin-bottom: 1rem;
      position: relative;
      padding-left: 1.5rem;
    }
    li::before {
      content: '\2713';
      position: absolute;
      left: 0;
      color: #007bff;
      font-weight: bold;
    }
    .premium {
      background: #fff8e1;
      border-left: 5px solid #ffca28;
    }
    .cta {
      text-align: center;
      padding: 2rem 1rem;
      background: #fff;
      border-top: 1px solid #ccc;
    }
    .cta h2 {
      font-size: 1.7rem;
      margin-bottom: 1rem;
    }
    .cta p {
      margin-bottom: 1rem;
    }
    .cta input[type="email"] {
      padding: 0.9rem;
      width: 90%;
      max-width: 300px;
      border: 1px solid #ccc;
      border-radius: 6px;
      margin-bottom: 1rem;
    }
    .cta button {
      background-color: #f8d210;
      color: #1e1e2f;
      padding: 15px 30px;
      border: none;
      border-radius: 6px;
      font-size: 1.1rem;
      cursor: pointer;
      transition: background 0.3s;
    }
    .cta button:hover {
      background-color: #e0bc00;
    }
    footer {
      text-align: center;
      padding: 20px;
      font-size: 0.9rem;
      color: #555;
    }
    footer a {
      color: #505050;
      text-decoration: none;
      margin: 0 5px;
    }
    .thank-you-message {
      background-color: rgba(0, 0, 0, 0.6);
      text-align: center;
      padding: 50px 20px;
      height: 250px;
      color: #fff;
    }
    .header-title {
        font-size: 5rem; 
        font-weight: bold;
        color: #fff;
    }
    @media (max-width: 600px) {
      header img {
        width: 220px;
      }
      h2 {
        font-size: 1.3rem;
      }
      .header-title {
        font-size: 3rem;
      }
    }
  </style>
</head>
<body>
  <div id="thank-you" class="thank-you-message" style="display:none;">
    <p>Thank you for signing up!</p>
    <p class="sub">You should receive an email to confirm your subscription before we send any content.</p>
  </div>
  <div id="error-section" class="thank-you-message" style="display:none;">
    <p>Sorry!</p>
    <p class="sub">There was a problem with the signup. Please try again in a few minutes.</p>
  </div>
  <div id="init">
    <header>
        <div class="header-title">Sports Cram</div>
      <!-- <img src="https://www.sportscram.com/wp-content/uploads/2025/04/logo_1.png" alt="logo"> -->
      <h1>Your Sports Cheat Sheet</h1>
      <p class="tagline">Know just enough to join the conversation—no sports expertise needed.</p>
    </header>
    <main>
      <section style="display:none;">

        <div id="countdown-container" style="display:none;text-align: center; padding: 40px 20px; font-family: sans-serif; color: #333;">
          <div style="display:none;font-size: 20px; letter-spacing: 1px; margin-bottom: 10px; color: #999;">Coming Soon:</div>
          <div style="display:none;font-size: 28px; font-weight: 600; margin-bottom: 15px;">September 1st, 2025</div>
          <div id="countdown-title" style="font-size: 36px; color: #7C53ED; font-weight: bold;"></div>
        </div>

        <script>
          const countdownTitle = document.getElementById("countdown-title");
          const targetDate = new Date("2025-09-01T08:00:00-04:00"); // Adjust timezone if needed

          function updateCountdown() {
            const now = new Date();
            const diff = targetDate - now;

            if (diff <= 0) {
              countdownTitle.innerText = "It's game time!";
              return;
            }

            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            countdownTitle.innerText = `${days} Days`;
          }

          updateCountdown();
          setInterval(updateCountdown, 1000 * 60 * 60); // update every hour
        </script>


      </section>


      <section>
        <h2>Why Sports Cram?</h2>
        <ul>
          <li><strong>For Busy People:</strong> Skim it in 60 seconds—no time wasted.</li>
          <li><strong>No Sports Knowledge Needed:</strong> We keep it simple.</li>
          <li><strong>Be Socially Ready:</strong> Have basic sports current events knowledge.</li>
        </ul>
      </section>
      <section>
        <h2>What You Get</h2>
        <ul>
          <li><strong>Weekly Email (1 Minute Read):</strong> No jargon, just the basics.<br><em>Example:</em> “March Madness - college basketball's big tournament is what most people are watching.”</li>
          <li><strong>What’s In Season:</strong> A quick list of active sports.<br><em>Example:</em> “Basketball, hockey, soccer, baseball (pre-season), golf.”</li>
          <li><strong>Major Events:</strong> Key dates and surprises.<br><em>Example:</em> “Golf’s Masters runs April 10-13.”</li>
          <li><strong>Talking Points:</strong> 2-3 lines to sound in-the-know.<br><em>Example:</em> “March Madness - Florida won big last night against Maryland.”</li>
        </ul>
      </section>
      <section class="premium" style="display:none;">
        <h2>Want More? Go Premium ($4.99/month):</h2>
        <ul>
          <li><strong>Your Teams:</strong> Pick teams to follow. <em>Example:</em> “Lakers won big yesterday—they’re playoff-bound!”</li>
          <li><strong>First 500 Get 50% Off:</strong> Lock in $2.49/month forever—sign up now!</li>
        </ul>
      </section>
    </main>
    <div class="cta">
      <h2>Get Started Free</h2>
      <p>Enter your email to get start getting weekly updates!</p>
      <form id="signup-form" method="POST" action="/">
        <input type="hidden" name="recaptcha-token" id="recaptcha-token">
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        <input type="text" id="b_check_1" name="b_check_1" style="display:none">
        <button id="main-button" class="g-recaptcha" data-sitekey="6LcQiNcoAAAAAL2-vWb6oRtrRaIOoX1xqscP5NbZ" data-callback='submitSignup' data-action='submit'>Sign Up</button>
      </form>
    </div>
  </div>
  <footer>
    <a href="https://www.sportscram.com/privacy-policy" target="_blank">Privacy Policy</a> |
    <a href="https://www.sportscram.com/terms-of-service" target="_blank">Terms of Service</a>
    <br>
    <p>&copy; <span id="year"></span> Sports Cram, LLC. All rights reserved.</p>
  </footer>
  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
    let isSubmitting = false;
    function submitSignup(token) {
      if (isSubmitting) return;
      isSubmitting = true;
      let form = document.getElementById('signup-form');
      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }
      document.getElementById('recaptcha-token').value = token;
      let formData = new FormData(form);
      formData.append('action', 'handle_recaptcha_form_v3');
      document.getElementById('main-button').disabled = true;
      document.getElementById('main-button').innerHTML = 'Submitting...';
      fetch('https://www.sportscram.com/wp-admin/admin-ajax.php', {
        method: 'POST',
        body: formData
      }).then(response => response.json()).then(data => {
        if (data.success) {
          let email = document.getElementById('email').value;
          $.ajax({
            type: 'POST',
            url: 'https://app.sportscram.com/register',
            data: JSON.stringify({ email, mode: 'landing-page-two' }),
            contentType: 'application/json',
            success: function () { document.getElementById('init').style.display = 'none'; document.getElementById('thank-you').style.display = 'block'; },
            error: function () { document.getElementById('init').style.display = 'none'; document.getElementById('thank-you').style.display = 'block'; }
          });
        } else {
          document.getElementById('init').style.display = 'none';
          document.getElementById('error-section').style.display = 'block';
        }
      }).catch(() => {
        document.getElementById('init').style.display = 'none';
        document.getElementById('error-section').style.display = 'block';
      });
    }
  </script>
</body>
</html>
