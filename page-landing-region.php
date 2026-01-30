<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Cram - Daily Sports Insights</title>
    <link rel="icon" href="https://www.sportscram.com/wp-content/uploads/2025/04/favicon-32x32-1.png" sizes="32x32" />
    <link rel="icon" href="https://www.sportscram.com/wp-content/uploads/2025/04/favicon-32x32-1.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://www.sportscram.com/wp-content/uploads/2025/04/favicon-32x32-1.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <script src="https://www.google.com/recaptcha/api.js"></script>

    <?php
    if (is_user_logged_in()) {
    } else {
    ?>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-BY584TLEMM"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-BY584TLEMM');
        </script>

        <script>
            function gtag_report_conversion(url) {
                var callback = function() {
                    if (typeof(url) != 'undefined') {
                        window.location = url;
                    }
                };
                gtag('event', 'conversion', {
                    'send_to': 'AW-801568427/Qsz8CLProOUZEKvtm_4C',
                    'event_callback': callback
                });
                return false;
            }
        </script>


    <?php
    }
    ?>

    <style>
        /* page-sign-up.php styles applied to landing-two structure */
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom right, #fefefe, #e3f2fd);
            color: #222;
            line-height: 1.6;
        }
        header,
        .header {
            background: #004a8d;
            color: #fff;
            text-align: center;
            padding: 2rem 1rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        header h1,
        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: bold;
        }
        header .tagline,
        header .animated-text,
        .header .tagline,
        .header .animated-text {
            display: inline-block;
            font-size: 1.1rem;
            margin-top: 0.5rem;
            opacity: 0.95;
        }
        main {
            padding: 2rem 1rem;
            max-width: 900px;
            margin: auto;
        }
        .content {
            padding: 2rem 1rem;
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
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
            padding-left: 1.75rem;
        }
        li::before {
            content: '\2713';
            position: absolute;
            left: 0;
            margin-right: 0.5rem;
            color: #007bff;
            font-weight: bold;
        }
        .premium {
            background: #fff8e1;
            border-left: 5px solid #ffca28;
        }
        .content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
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
        .cta-button {
            background-color: #f8d210;
            color: #1e1e2f;
            padding: 15px 30px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1.1rem;
            margin-top: 20px;
            transition: background 0.3s;
        }
        .cta-button:hover {
            background-color: #e0bc00;
        }
        @keyframes textAnimation {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animated {
            display: inline-block;
            animation: textAnimation 1s ease-in-out forwards;
            opacity: 0;
        }
        .recaptcha-container {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        .signup-form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            text-align: center;
            border-top: 1px solid #ccc;
        }
        .signup-form input[type="email"] {
            width: 90%;
            max-width: 300px;
            padding: 0.9rem;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1em;
        }
        .signup-form input[type="submit"],
        .signup-form .cta-button,
        .signup-form .g-recaptcha {
            background-color: #f8d210;
            color: #1e1e2f;
            border: none;
            font-size: 1.1rem;
            border-radius: 6px;
            cursor: pointer;
            padding: 15px 30px;
            transition: background 0.3s;
        }
        .signup-form input[type="submit"]:hover,
        .signup-form .cta-button:hover,
        .signup-form .g-recaptcha:hover {
            background-color: #e0bc00;
        }
        .thank-you-message {
            background-color: rgba(0, 0, 0, 0.6);
            text-align: center;
            padding: 50px 20px;
            height: 250px;
            color: #fff;
        }
        .thank-you-message p {
            color: #ffffff !important;
            font: 1.5em sans-serif;
        }
        .thank-you-message p.sub {
            color: #ffffff !important;
            font: 1.2em sans-serif;
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
        .header-title {
            font-size: 5rem;
            font-weight: bold;
            color: #fff;
        }
        @media (max-width: 600px) {
            header h1, .header h1 { font-size: 1.8rem; }
            header .tagline, header .animated-text, .header .tagline, .header .animated-text { font-size: 1rem; }
            .header-title { font-size: 3rem; }
            h2 { font-size: 1.3rem; }
            .signup-form input[type="email"] {
                padding: 15px;
                width: 90%;
            }
        }
    </style>


    <script>
        function submitJoinWaitlistForm(token) {

            console.log('submit Join Waitlist Form');

            // Prepare form data
            var form = document.getElementById('signup-form');

            // Check if the form is valid before proceeding
            if (!form.checkValidity()) {
                // If the form is invalid, trigger native HTML5 form validation
                console.log('form is invalid');
                form.reportValidity();
                return;
            }

            console.log('form is valid');

            // Attach the reCAPTCHA token to the form
            document.getElementById('recaptcha-token').value = token;

            document.getElementById('init').style.display = 'none';
            document.getElementById('preferences').style.display = 'block';


            // Create a new FormData object using the form reference
            var formData = new FormData(form);

            console.log('formData', formData);

            formData.append('action', 'handle_recaptcha_form_v3');

            // Send AJAX request
            fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                method: 'POST',
                body: formData
            }).then(response => response.json()).then(data => {


                if (data.success) {

                    // GA4 event for form submission
                    if (typeof gtag === 'function') {
                        gtag('event', 'joined_waitlist', {
                            'event_category': 'form_submission',
                            'event_label': 'Joined Waitlist'
                        });
                    }

                    let jsonData = {
                        "email": document.getElementsByName('email')[0].value,
                        "mode": 'landing-page-region'
                    };

                    jQuery.ajax({
                        type: 'POST',
                        url: 'https://app.sportscram.com/register',
                        data: JSON.stringify(jsonData), // Ensure jsonData is converted to a JSON string
                        contentType: 'application/json', // Specify the content type
                        success: function(response) {
                            //console.log('success', response);
                            gtag_report_conversion();
                        },
                        error: function(response) {
                            console.log('err', response);
                            // alert('Error submitting form. Please try again later.');
                        }
                    });

                }
            }).catch(error => console.error('Error:', error));

        }
    </script>

</head>

<body>

    <div id="thank-you" class="thank-you-message" style="display:none;">
        <p>Thank you for signing up!</p>
        <p class="sub">You will start getting emails soon.</p>
    </div>

    <div id="init">
        <header>
            <div class="header-title">Sports Cram</div>
            <h1>Welcome to Sports Cram</h1>
            <p class="tagline">Sports Updates for Casual Fans</p>
        </header>
        <main>
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
            <h2>Sign up for our newsletter</h2>
            <p>Enter your email to get started and get relevant sports updates for your region.</p>
            <form id="signup-form" method="POST" action="/">
                <input type="hidden" name="recaptcha-token" id="recaptcha-token">
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                <input type="text" id="b_check_1" name="b_check_1" style="display:none">
                <button class="g-recaptcha cta-button" data-sitekey="6LcQiNcoAAAAAL2-vWb6oRtrRaIOoX1xqscP5NbZ" data-callback="submitJoinWaitlistForm" data-action="submit">Sign Up</button>
            </form>
        </div>
    </div>

    <script>
        function gtag_report_conversion(url) {
            var callback = function() {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
            };
            if (typeof gtag === 'function') {
                gtag('event', 'conversion', {
                    'send_to': 'AW-801568427/Qsz8CLProOUZEKvtm_4C',
                    'event_callback': callback
                });
            }
            return false;
        }
    </script>

    <div id="preferences" style="display: none;">
        <main>
        <style>
            .preference {
                margin: 20px 0;
                text-align: left;
                padding: 15px;
                border-left: 5px solid #3498db;
                background-color: #f5f5f5;
                border-radius: 5px;
            }
            .preference p {
                margin-top: 5px;
                font-size: 0.9em;
                color: #7f8c8d;
            }
            .region-selector {
                margin-top: 10px;
                position: relative;
            }
            .input-wrapper {
                position: relative;
                display: flex;
                align-items: center;
                width: 100%;
            }
            .input-wrapper input[type="text"] {
                padding: 10px;
                width: calc(100% - 80px);
                font-size: 1em;
                border-radius: 5px 0 0 5px;
                border: 1px solid #ccc;
                margin-right: -1px;
            }
            button[type="submit"] {
                padding: 12px 24px;
                font-size: 1em;
                background-color: #3498db;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-weight: bold;
                transition: background-color 0.3s;
            }
            button[type="submit"]:hover {
                background-color: #2980b9;
            }
            #selectedRegionsList {
                list-style-type: none;
                padding: 0;
                margin-top: 10px;
            }
            #selectedRegionsList li::before,
            #regionSuggestions li::before {
                content: none;
            }
            #selectedRegionsList li {
                background-color: #ecf0f1;
                margin: 5px 0;
                padding: 8px;
                border-radius: 5px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            #regionSuggestions {
                list-style-type: none;
                padding: 0;
                margin: 0;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: #ffffff;
                border: 1px solid #dcdcdc;
                max-height: 150px;
                overflow-y: auto;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                z-index: 100;
                display: none;
            }
            #regionSuggestions li {
                padding: 8px;
                cursor: pointer;
            }
            #regionSuggestions li:hover {
                background-color: #f0f0f0;
            }
            button.remove-region {
                max-width: fit-content;
                display: inline;
                border-radius: 0;
                margin-top: 0;
                padding: 5px 10px;
                font-size: 0.9em;
                background-color: #3498db;
                color: white;
                border: none;
                cursor: pointer;
            }
            button.remove-region:hover {
                background-color: #2980b9;
            }
            @media (max-width: 768px) {
                .input-wrapper { flex-direction: column; align-items: flex-start; }
                .input-wrapper input[type="text"] { width: 100%; border-radius: 5px; margin-right: 0; }
                button[type="submit"] { width: 100%; font-size: 1em; margin-top: 15px; }
            }
        </style>
        <h1>Sports Cram Preferences</h1>
        <p>Choose your region to get relevant sports updates.</p>

        <form id="preferencesForm">
            <div class="preference">
                <strong>Your Region</strong>
                <p>Select the region you're interested in for localized sports news.</p>
                <div class="region-selector" id="regionSelector">
                    <div class="input-wrapper">
                        <input type="text" placeholder="Search for a region (e.g., Washington D.C.)" id="regionInput">
                        <ul id="regionSuggestions"></ul>
                    </div>
                    <ul id="selectedRegionsList"></ul>
                </div>
            </div>
            <button class="cta-button" type="submit">Save Preferences</button>
        </form>


        <script>
            const BASE_URL = 'https://app.sportscram.com/api/pub/v1.0';

            let regions = [];

            const regionInput = document.getElementById('regionInput');
            const regionSuggestions = document.getElementById('regionSuggestions');
            const selectedRegionsList = document.getElementById('selectedRegionsList');

            // Fetch regions from the API (same pattern as fetchTeams but /regions)
            async function fetchRegions() {
                try {
                    console.log('fetching regions');
                    const response = await fetch(BASE_URL + '/regions');
                    regions = await response.json();
                    console.log('regions', regions);
                } catch (error) {
                    console.error("Failed to fetch regions:", error);
                }
            }

            fetchRegions();

            // Typeahead: filter regions (API returns array of strings) as user types
            regionInput.addEventListener('input', function() {
                const query = regionInput.value.toLowerCase();
                regionSuggestions.innerHTML = '';

                if (query.length < 2) return;

                const matched = regions.filter(r => String(r).toLowerCase().includes(query));

                matched.forEach(regionName => {
                    const li = document.createElement('li');
                    li.textContent = regionName;
                    li.addEventListener('click', () => selectRegion(regionName));
                    regionSuggestions.appendChild(li);
                });
                regionSuggestions.style.display = matched.length ? 'block' : 'none';
            });

            function selectRegion(regionName) {
                regionInput.value = '';
                regionSuggestions.innerHTML = '';

                const already = [...selectedRegionsList.querySelectorAll('li')].some(li => li.getAttribute('data-region-id') === String(regionName));
                if (already) return;

                const li = document.createElement('li');
                li.setAttribute('data-region-id', regionName);
                li.innerHTML = regionName + ' <button type="button" class="remove-region" onclick="removeRegion(this)">Remove</button>';
                selectedRegionsList.appendChild(li);

                if (typeof gtag === 'function') {
                    gtag('event', 'add_region', { 'event_category': 'region_selection', 'event_label': regionName });
                }
            }

            function removeRegion(button) {
                const li = button.parentElement;
                const label = li.textContent.replace('Remove', '').trim();
                li.remove();
                if (typeof gtag === 'function') {
                    gtag('event', 'remove_region', { 'event_category': 'region_selection', 'event_label': label });
                }
            }

            document.getElementById('preferencesForm').addEventListener('submit', function(e) {
                e.preventDefault();

                const selectedRegions = [];
                selectedRegionsList.querySelectorAll('li').forEach(li => {
                    const name = li.getAttribute('data-region-id');
                    if (name != null) selectedRegions.push(name);
                });

                const jsonData = {
                    "email": document.getElementsByName('email')[0].value,
                    "mode": 'landing-page-region',
                    "regions": selectedRegions
                };

                console.log('jsonData', jsonData);
                gtag_report_conversion();

                const $ = jQuery;
                $('#init').hide();
                $('#preferences').hide();
                $('.thank-you-message').show();

                if (typeof gtag === 'function') {
                    gtag('event', 'submit_preferences', { 'event_category': 'form_submission', 'event_label': 'Save Preferences' });
                }

                $.ajax({
                    type: 'POST',
                    url: 'https://app.sportscram.com/register',
                    data: JSON.stringify(jsonData),
                    contentType: 'application/json',
                    success: function(response) { console.log('success', response); },
                    error: function(response) { console.log('err', response); }
                });
            });

            document.addEventListener('click', function(event) {
                const isInside = event.target.id === 'regionInput' || regionSuggestions.contains(event.target);
                regionSuggestions.style.display = isInside ? 'block' : 'none';
            });
        </script>

        </main>
    </div>
    <footer style="text-align: center; padding: 20px;">
        <a href="https://www.sportscram.com/privacy-policy" target="_blank">Privacy Policy</a> | <a href="https://www.sportscram.com/terms-of-service" target="_blank">Terms of Service</a>
        <br>
        <p>&copy; <span id="year"></span> Sports Cram, LLC. All rights reserved.</p>
    </footer>
    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const textElement = document.querySelector('.tagline');
            if (textElement) textElement.classList.add('animated');
        });
    </script>

</body>

</html>
