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
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        .header {
            background: #1e1e2f;
            color: #fff;
            padding: 60px 20px;
            text-align: center;
        }

        .header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .header .animated-text {
            display: inline-block;
            font-size: 1.5rem;
            color: #f8d210;
        }

        .content {
            padding: 20px;
            max-width: 800px;
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
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1rem;
            margin-top: 20px;
            transition: background 0.3s;
        }

        .cta-button:hover {
            background-color: #e0bc00;
        }

        @keyframes textAnimation {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animated {
            display: inline-block;
            animation: textAnimation 1s ease-in-out forwards;
            opacity: 0;
        }

        @media (max-width: 600px) {
            .header h1 {
                /* font-size: 2rem; */
            }

            .header .animated-text {
                font-size: 1.2rem;
            }
        }

        .recaptcha-container {
            display: flex;
            justify-content: center;
            margin-top: 10px;
            /* Optional: Add some space between the button and reCAPTCHA */
        }

        .signup-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* width: 100%; */
            text-align: center;
        }

        .signup-form input[type="email"] {
            width: 90%;
            padding: 20px;
            margin-bottom: 20px;
            border: 2px solid #003f8a;
            border-radius: 4px;
            font-size: 1em;
        }

        .signup-form input[type="submit"] {
            background-color: #0056b3;
            color: #fff;
            border: none;
            font-size: 1em;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .signup-form input[type="submit"]:hover {
            background-color: blue;
        }

        .thank-you-message {

            background-color: rgba(0, 0, 0, 0.6);
            text-align: center;
            padding-top: 50px;
            height: 250px;
        }

        .thank-you-message p {
            color: #ffffff !important;
            font: 1.5em sans-serif;
        }

        .thank-you-message p.sub {
            color: #ffffff !important;
            font: 1.2em sans-serif;
        }

        @media (max-width: 600px) {
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
                form.reportValidity();
                return;
            }

            // Attach the reCAPTCHA token to the form
            document.getElementById('recaptcha-token').value = token;

            document.getElementById('init').style.display = 'none';
            document.getElementById('preferences').style.display = 'block';


            // Create a new FormData object using the form reference
            var formData = new FormData(form);

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
                        "mode": 'landing-page-two'
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
            /* Preference Section Styling */
            .preference {
                margin: 20px 0;
                text-align: left;
                padding: 15px;
                border-left: 5px solid #3498db;
                background-color: #f5f5f5;
                border-radius: 5px;
            }

            /* Checkbox Styling */
            .preference input[type="checkbox"] {
                width: 20px;
                height: 20px;
                accent-color: #228ee6;
                /* Sets the checkbox color in modern browsers */
                cursor: pointer;
                margin-right: 10px;
                /* Adds spacing between the checkbox and label text */
            }

            .preference input[type="text"] {
                width: 100%;
                height: 30px;
                accent-color: #228ee6;
                /* Sets the checkbox color in modern browsers */
                margin-right: 10px;
                /* Adds spacing between the checkbox and label text */
            }


            .preference p {
                margin-top: 5px;
                font-size: 0.9em;
                color: #7f8c8d;
            }

            /* Teams and Sports Selector Styling */
            .teams-selector,
            .sports-selector {
                display: none;
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
                /* Adjusted width to fit with button */
                font-size: 1em;
                border-radius: 5px 0 0 5px;
                border: 1px solid #ccc;
                margin-right: -1px;
                /* Align input with button */
            }

            button[type="submit"],
            button[type="button"] {
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
                background-color: #3498db;
            }

            button[type="button"] {
                padding: 10px;
                background-color: #3498db;
                color: white;
                border: none;
                border-radius: 0 5px 5px 0;
                cursor: pointer;
            }

            button[type="button"]:hover {
                background-color: #2980b9;
            }

            /* List Styling for Selected Teams and Sports */
            #favoriteTeamsList,
            #sportsList {
                list-style-type: none;
                padding: 0;
                margin-top: 10px;
            }

            #favoriteTeamsList li,
            #sportsList li {
                background-color: #ecf0f1;
                margin: 5px 0;
                padding: 8px;
                border-radius: 5px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            /* Suggestions Dropdown Styling */
            #suggestions {
                list-style-type: none;
                padding: 0;
                margin: 0;
                position: absolute;
                top: 100%;
                /* Place directly below the input-wrapper */
                left: 0;
                width: 100%;
                background-color: #ffffff;
                border: 1px solid #dcdcdc;
                max-height: 150px;
                overflow-y: auto;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                z-index: 100;
            }

            #suggestions li {
                padding: 8px;
                cursor: pointer;
            }

            #suggestions li:hover {
                background-color: #f0f0f0;
            }

            /* Adjusted Remove Team Button */
            button.remove-team {
                /* width: auto;  */
                max-width: fit-content;
                display: inline;
                border-radius: 0;
                margin-top: 0;
                padding: 5px 10px;
                font-size: 0.9em;
            }

            /* Responsive Styling for Mobile */
            @media (max-width: 768px) {
                body {
                    padding: 10px;
                    /* Reduced padding for mobile */
                }

                h1 {
                    font-size: 1.5em;
                    /* Smaller font size for header */
                }

                p {
                    font-size: 0.9em;
                    /* Reduce general text size slightly */
                }

                .input-wrapper {
                    flex-direction: column;
                    align-items: flex-start;
                }

                .input-wrapper input[type="text"] {
                    width: 100%;
                    border-radius: 5px;
                    margin-right: 0;
                }

                button[type="button"] {
                    width: 100%;
                    border-radius: 5px;
                    margin-top: 5px;
                }

                #suggestions {
                    position: absolute;
                    width: 100%;
                }

                button[type="submit"] {
                    width: 100%;
                    font-size: 1em;
                    margin-top: 15px;
                }
            }
        </style>
        <h1>Sports Cram Preferences</h1>
        <p>Customize your sports updates. Choose what matters most to you.</p>

        <form id="preferencesForm">
            <!-- Daily Summary Option -->
            <div class="preference">
                <label>
                    <input type="checkbox" name="daily_summary" checked>
                    <strong>Daily Sports Summary</strong>
                    <p>Receive a daily recap of top sports stories.</p>
                </label>
            </div>

            <!-- Big Events Option -->
            <div class="preference">
                <label>
                    <input type="checkbox" name="big_news" checked>
                    <strong>Big Events</strong>
                    <p>Receive alerts for major sports events.</p>
                </label>
            </div>

            <!-- Game Schedule Option -->
            <div class="preference">
                <label>
                    <input type="checkbox" name="game_schedule">
                    <strong>Game Schedules</strong>
                    <p>See upcoming and recent game schedules for your favorite sports.</p>
                </label>
            </div>

            <!-- Favorite Teams Option -->
            <div class="preference">
                <label>
                    <input type="checkbox" name="favorite_teams" id="favoriteTeamsCheckbox">
                    <strong>Updates on My Favorite Teams</strong>
                    <p>Get news and scores for the teams you care about most.</p>
                </label>
                <div class="teams-selector" id="teamsSelector">
                    <div class="input-wrapper">
                        <input type="text" placeholder="Add a team (e.g., New York Yankees)" id="teamInput">
                        <ul id="suggestions"></ul>
                    </div>
                    <ul id="favoriteTeamsList"></ul>
                </div>
            </div>

            <!-- Choose Sport Option -->
            <div class="preference">
                <label>
                    <input type="checkbox" name="choose_sport" id="chooseSportCheckbox">
                    <strong>Choose sports you want included in your emails</strong>
                    <p>Select specific sports to follow closely.</p>
                </label>
                <div class="sports-selector" id="sportsSelector">
                    <ul id="sportsList"></ul>
                </div>
            </div>

            <!-- EDU / Facts Option -->
            <div class="preference">
                <label>
                    <input type="checkbox" name="learn" checked>
                    <strong>Facts and Learning</strong>
                    <p>Learn sports with little bits of facts.</p>
                </label>
            </div>


            <!-- Additional Info -->
            <div class="preference">
                <label>
                    <strong>Feedback</strong>
                    <p>We'd love to hear any feature requests you may have.</p>
                    <input type="text" id="additional_info" name="additional_info">
                </label>
            </div>

            <!-- Submit Button -->
            <button class="cta-button" type="submit">Save Preferences</button>
        </form>


        <script>
            const BASE_URL = 'https://app.sportscram.com/api/pub/v1.0';

            let sports = [];
            let teams = [];

            const chooseSportCheckbox = document.getElementById('chooseSportCheckbox');
            const sportsSelector = document.getElementById('sportsSelector');
            const sportsList = document.getElementById('sportsList');

            // // Toggle team selector based on checkbox
            const favoriteTeamsCheckbox = document.getElementById('favoriteTeamsCheckbox');

            const teamsSelector = document.getElementById('teamsSelector');
            favoriteTeamsCheckbox.addEventListener('change', function() {
                teamsSelector.style.display = this.checked ? 'block' : 'none';
            });

            const teamInput = document.getElementById('teamInput');
            const suggestions = document.createElement('ul');
            suggestions.id = 'suggestions';
            teamInput.parentElement.appendChild(suggestions);

            // Fetch teams from the API and populate the teams array
            async function fetchTeams() {
                try {
                    const response = await fetch(BASE_URL + '/all_teams');
                    // const response = await fetch('https://app.sportscram.com/api/pub/v1.0/all_teams');
                    teams = await response.json(); // Assume the API returns an array of team objects
                    // console.log("Teams fetched:", teams);
                } catch (error) {
                    console.error("Failed to fetch teams:", error);
                }
            }

            // Call fetchTeams when the page loads
            fetchTeams();

            // Show typeahead suggestions based on input
            teamInput.addEventListener('input', function() {
                const query = teamInput.value.toLowerCase();
                suggestions.innerHTML = ''; // Clear any previous suggestions

                if (query.length < 2) return; // Only suggest when 2 or more characters are typed

                const matchedTeams = teams.filter(team => team.displayName.toLowerCase().includes(query));

                matchedTeams.forEach(team => {
                    const listItem = document.createElement('li');
                    let teamVal = '<img style="width:25px;" src="'+team.logo + '"/>&nbsp;' + team.displayName + ' - ' + team.leagueDisplay;
                    listItem.innerHTML = teamVal;
                    listItem.addEventListener('click', () => selectTeam(teamVal));

                    suggestions.appendChild(listItem);
                });
            });

            // Add selected team to the list and clear suggestions
            function selectTeam(teamName) {
                teamInput.value = '';
                suggestions.innerHTML = '';

                // Check if team is already in the list
                if ([...favoriteTeamsList.children].some(item => item.textContent.includes(teamName))) return;

                const listItem = document.createElement('li');
                listItem.innerHTML = `
    ${teamName}
    <button type="button" class="remove-team" onclick="removeTeam(this)">Remove</button>
`;
                favoriteTeamsList.appendChild(listItem);

                //console.log('add team', teamName);
                // GA4 event for adding a team
                if (typeof gtag === 'function') {
                    gtag('event', 'add_team', {
                        'event_category': 'team_selection',
                        'event_label': teamName,
                        'team_name': teamName,
                    });
                }
            }

            // Remove team from the list
            function removeTeam(button) {
                const teamName = button.parentElement.textContent.replace("Remove", "").trim();
                button.parentElement.remove();

                // console.log('remove team', teamName);
                // GA4 event for removing a team
                if (typeof gtag === 'function') {
                    gtag('event', 'remove_team', {
                        'event_category': 'team_selection',
                        'event_label': teamName,
                        'team_name': teamName,
                    });
                }
            }

            // Handle form submission
            document.getElementById('preferencesForm').addEventListener('submit', function(e) {
                e.preventDefault();

                let emailPreferences = [];

                if (document.querySelector('input[name="daily_summary"]').checked) {
                    emailPreferences.push('digest');
                }

                if (document.querySelector('input[name="big_news"]').checked) {
                    emailPreferences.push('alerts');
                }

                if (document.querySelector('input[name="game_schedule"]').checked) {
                    emailPreferences.push('gameSchedule');
                }

                if (document.querySelector('input[name="learn"]').checked) {
                    emailPreferences.push('learn');
                }

                //additional_info

                let jsonData = {
                    "email": document.getElementsByName('email')[0].value,
                    "mode": 'landing-page',
                    "email_preferences": emailPreferences,
                    "additional_info": document.getElementById('additional_info').value.replace(/<.*?>|script/gi, '')
                    // "email_preferences" : [
                    //     "alerts",
                    //     "digest"
                    // ]
                };
                // bigNews | dailySummary | learn | gameSchedule

                // Get selected teams
                //================================================================================================

                let selectedTeams = [];
                favoriteTeamsList.querySelectorAll('li').forEach(li => {
                    let val = li.textContent.replace("Remove", "").trim();
                    // console.log('val', val);
                    selectedTeams.push(val);
                });

                function transformSelectedTeams(teamList, selectedTeams) {
                    const transformedTeams = {};

                    // Convert the selected teams array to a map for easier lookup
                    const selectedTeamsMap = selectedTeams.reduce((map, teamString) => {
                        const [displayName, leagueDisplay] = teamString.split(" - ");
                        map[displayName.trim()] = leagueDisplay.trim();
                        return map;
                    }, {});

                    teamList.forEach(team => {
                        // Check if the team is in the selectedTeamsMap based on displayName and leagueDisplay
                        if (selectedTeamsMap[team.displayName] === team.leagueDisplay) {
                            const key = `${team.sport}_${team.league}_teams`;

                            // Initialize the array if this key doesn't exist yet
                            if (!transformedTeams[key]) {
                                transformedTeams[key] = [];
                            }

                            // Add the selected team in the desired format
                            transformedTeams[key].push({
                                id: team.id,
                                displayName: team.displayName
                            });
                        }
                    });

                    return transformedTeams;
                }

                const xteams = transformSelectedTeams(teams, selectedTeams);
                for (const key in xteams) {
                    jsonData[key] = xteams[key];
                }


                // Get selected sports
                //================================================================================================

                let selectedLeagues = [];

                function getSportsPreferences(sportsData, selectedLeagues) {
                    const sportsPreferences = sportsData
                        .filter(sport => selectedLeagues.includes(sport.name) && sport.active) // Filter by selected leagues and active status
                        .map(sport => `${sport.sport}@${sport.league}`); // Format as "sport@league"

                    return {
                        "sports_preferences": sportsPreferences
                    };
                }

                // Get selected sports
                document.querySelectorAll('input[name="sports"]:checked').forEach(checkbox => {
                    selectedLeagues.push(checkbox.value);
                });

                const result = getSportsPreferences(sports, selectedLeagues);
                jsonData.sports_preferences = result.sports_preferences;

                //Now Save
                //================================================================================================

                console.log('jsonData', jsonData);

                //
                gtag_report_conversion();

                let $ = jQuery;

                $('.header').hide();
                $('.signup-form').hide();
                $('#preferences').hide();
                $('.thank-you-message').show();

                // GA4 event for form submission
                if (typeof gtag === 'function') {
                    gtag('event', 'submit_preferences', {
                        'event_category': 'form_submission',
                        'event_label': 'Save Preferences',
                        'preferences': preferences,
                    });
                }

                $.ajax({
                    type: 'POST',
                    url: 'https://app.sportscram.com/register',
                    data: JSON.stringify(jsonData), // Ensure jsonData is converted to a JSON string
                    contentType: 'application/json', // Specify the content type
                    success: function(response) {
                        console.log('success', response);
                    },
                    error: function(response) {
                        console.log('err', response);
                        // alert('Error submitting form. Please try again later.');
                    }
                });

            });

            // Track checkbox changes for preference selections
            document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                checkbox.addEventListener('change', (event) => {
                    const isChecked = event.target.checked;
                    const checkboxName = event.target.name;

                    // console.log('evt cb', checkboxName);
                    // console.log('evt v', isChecked);
                    // GA4 event for each checkbox selection
                    if (typeof gtag === 'function') {
                        gtag('event', 'preference_update', {
                            'event_category': 'preference_selection',
                            'event_label': checkboxName,
                            'preference': checkboxName,
                            'selected': isChecked ? 'true' : 'false',
                        });
                    }
                });
            });

            // Hide suggestions when clicking outside the input or suggestions dropdown
            document.addEventListener('click', function(event) {
                //console.log('evt',event.target.id) // "teamInput"
                const isClickInside = event.target.id == 'teamInput'; //teamInput.contains(event.target) || suggestions.contains(event.target);
                if (!isClickInside) {
                    suggestions.style.display = 'none';
                } else {
                    suggestions.style.display = 'block';
                }
            });


            // Fetch sports from the API and populate the sports list
            async function fetchSports() {
                try {
                    const response = await fetch(BASE_URL + '/all_sports'); // Update with actual sports API
                    sports = await response.json(); // Assume the API returns an array of sport objects

                    console.log("Sports fetched:", sports);

                    // Populate the sports list with checkboxes
                    sports.forEach(sport => {
                        const listItem = document.createElement('li');
                        listItem.innerHTML = `
            <label>
                <input type="checkbox" name="sports" value="${sport.name}">
                ${sport.name}
            </label>
        `;
                        sportsList.appendChild(listItem);
                    });
                } catch (error) {
                    console.error("Failed to fetch sports:", error);
                }
            }

            // Show or hide sports selector based on checkbox
            chooseSportCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    sportsSelector.style.display = 'block';
                    if (!sportsList.hasChildNodes()) {
                        fetchSports(); // Fetch sports data only once when first checked
                    }
                } else {
                    sportsSelector.style.display = 'none';
                }
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