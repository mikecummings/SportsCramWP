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
        .header {
            background: #004a8d;
            color: #fff;
            text-align: center;
            padding: 2rem 1rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .header .animated-text {
            display: inline-block;
            font-size: 1.1rem;
            margin-top: 0.5rem;
            opacity: 0.95;
        }
        .content {
            padding: 2rem 1rem;
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }
        .content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
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
        @media (max-width: 600px) {
            .header h1 { font-size: 1.8rem; }
            .header .animated-text { font-size: 1rem; }
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

    <div class="thank-you-message" style="display:none;">
        <p>Thank you for joining the waitlist!</p>
        <p class="sub">We'll keep you updated on our progress.</p>
    </div>

    <div class="header">
        <h1>Welcome to Sports Cram</h1>
        <div class="animated-text-container">
            <span class="animated-text">Sports Updates for Casual Fans</span>
        </div>
    </div>

    <div class="content" id="init">
        <p>Sports Cram is your go-to platform for understanding sports through daily updates and talking points. Our unique blend of human curation and AI simplifies complex sports information, making it accessible and relatable.</p>
        <p>With Sports Cram, you gain the confidence to engage in sports discussions, armed with the essential knowledge you need to keep up with significant events without the deep dive.</p>
        <p>If you're a casual sports fan who wants to stay informed and up-to-date, Sports Cram is the perfect solution for you.</p>
        <!-- <a href="https://app.sportscram.com">
            <button class="cta-button">Get Started Now</button>
        </a> -->

        <p>
            <!-- <button class="cta-button" onclick="trackEventAndNavigate()">Get Started Now</button> -->
        <form id="signup-form" class="signup-form" method="POST" action="/">
            <input type="hidden" name="recaptcha-token" id="recaptcha-token">
            <input type="email" id="email" name="email" placeholder="Enter your email to join the waitlist" required>
            <input type="text" id="b_check_1" name="b_check_1" style="display:none">

            <!-- <button type="submit" value="Join the Waitlist" data-sitekey="6LcQiNcoAAAAAL2-vWb6oRtrRaIOoX1xqscP5NbZ"> -->
            <button class="g-recaptcha btn btn-primary cta-button" data-sitekey="6LcQiNcoAAAAAL2-vWb6oRtrRaIOoX1xqscP5NbZ"
                data-callback='submitJoinWaitlistForm' data-action='submit'>Join the Waitlist</button>
        </form>
        </p>

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
    </div>

    <div class="content" id="preferences" style="display: none;">

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
                    const response = await fetch(BASE_URL + '/regions');
                    regions = await response.json();
                } catch (error) {
                    console.error("Failed to fetch regions:", error);
                }
            }

            fetchRegions();

            // Typeahead: filter regions by displayName (or name) as user types
            regionInput.addEventListener('input', function() {
                const query = regionInput.value.toLowerCase();
                regionSuggestions.innerHTML = '';

                if (query.length < 2) return;

                const matchField = (r) => (r.displayName || r.name || '').toLowerCase().includes(query);
                const matched = regions.filter(matchField);

                matched.forEach(region => {
                    const li = document.createElement('li');
                    const label = region.displayName || region.name || String(region.id);
                    li.textContent = label;
                    li.addEventListener('click', () => selectRegion(region));
                    regionSuggestions.appendChild(li);
                });
                regionSuggestions.style.display = matched.length ? 'block' : 'none';
            });

            function selectRegion(region) {
                regionInput.value = '';
                regionSuggestions.innerHTML = '';

                const label = region.displayName || region.name || String(region.id);
                const already = [...selectedRegionsList.querySelectorAll('li')].some(li => li.getAttribute('data-region-id') === String(region.id));
                if (already) return;

                const li = document.createElement('li');
                li.setAttribute('data-region-id', region.id);
                li.innerHTML = label + ' <button type="button" class="remove-region" onclick="removeRegion(this)">Remove</button>';
                selectedRegionsList.appendChild(li);

                if (typeof gtag === 'function') {
                    gtag('event', 'add_region', { 'event_category': 'region_selection', 'event_label': label });
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
                    const id = li.getAttribute('data-region-id');
                    const displayName = li.textContent.replace('Remove', '').trim();
                    if (id != null) selectedRegions.push({ id: id, displayName: displayName });
                });

                const jsonData = {
                    "email": document.getElementsByName('email')[0].value,
                    "mode": 'landing-page-region',
                    "regions": selectedRegions
                };

                console.log('jsonData', jsonData);
                gtag_report_conversion();

                const $ = jQuery;
                $('.header').hide();
                $('.signup-form').hide();
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
            const textElement = document.querySelector('.animated-text');
            textElement.classList.add('animated');
        });
    </script>

</body>

</html>
