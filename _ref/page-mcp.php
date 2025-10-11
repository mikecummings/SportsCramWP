<?php

// get_header();

if (post_password_required()) {
    echo get_the_password_form();
} else {
    // Your HTML content here
    ?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Cram, LLC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        h1 {
            color: #2c3e50;
            font-size: 2.5em;
            margin-bottom: 0.5em;
        }

        h2 {
            color: #3498db;
            font-size: 1.5em;
            margin-bottom: 1em;
        }

        p {
            color: #7f8c8d;
            font-size: 1.1em;
            line-height: 1.6em;
            margin-bottom: 1em;
        }

        ul {
            color: #7f8c8d;
            font-size: 1.1em;
            line-height: 1.6em;
            margin-bottom: 1em;
        }

        ul li {
            margin-bottom: 0.5em;
        }

        ol {

            font-size: 1.1em;
            line-height: 1.6em;
            margin-bottom: 1em;
        }

        ol li {
            margin-bottom: 0.5em;
        }

        a {
            color: #2980b9;
            text-decoration: none;
        }

        footer {
            font-size: .7em;
        }

        .presentation {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            height: 100vh;
            padding: 20px;
            box-sizing: border-box;
        }


        .slide {
            max-width: 800px;
            padding: 40px;
            margin: auto 0;
            /* Center content within available space */
            border-radius: 8px;
            background-color: #e9f0f7;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            /* Allows scrolling if content overflows */
        }

        .visual {
            margin: 20px 0;
            padding: 20px;
            background-color: #bdc3c7;
            border-radius: 5px;
            text-align: center;
        }

        .navigation {
            display: flex;
            justify-content: center;
            width: 100%;
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin: 0 10px;
        }

        button:hover {
            background-color: #2980b9;
        }

        .slide-numbers {
            text-align: center;
            font-size: 1.2em;
            margin-top: 10px;
            /* Space between buttons and numbers */
        }

        .slide-numbers a {
            color: #3498db;
            text-decoration: none;
            margin: 0 5px;
        }

        .slide-numbers a:hover {
            text-decoration: underline;
        }

        .slide-numbers a.active {
            font-weight: bold;
            color: #2c3e50;
            /* background-color: #3498db; */
            /* text-decoration: underline; */
        }
    </style>
</head>

<body>

    <div class="presentation">
        <!-- Slide 1: Introduction -->
        <section class="slide" id="slide-1">
            <h1>Bridging the Gap: Sports Simplified for Everyone</h1>
            <h2>Making Sports Accessible and Enjoyable for Non-Sport Enthusiasts</h2>
            <p>A lot of people don’t follow sports, but sports are talked about in various social situations.</p>
        </section>

        <!-- Slide 2: Problem Statement -->
        <section class="slide" id="slide-2">
            <h1>The Challenge: Feeling Left Out</h1>
            <h2>The Dilemma Non-Sports Fans Face</h2>
            <p>
                In the U.S., millions of adults don’t follow sports, yet sports conversations are common in social and
                professional environments.
            </p>
            <p>
            <ol>
                <li>Non-sports fans often feel left out in conversations or social settings where sports topics are
                    discussed.
                </li>
                <li>Complexity of Sports. The world of sports can be overwhelming for those who don't follow it regularly, with jargon,
                    rules, and player names that are unfamiliar.
                </li>
                <li>Lack of Accessible Information. Existing sports coverage is often geared towards avid fans, making it challenging for casual
                    observers to engage with the content.
                </li>
            </ol>
            </p>
        </section>

        <!-- Slide 3: Solution -->
        <section class="slide" id="slide-3">
            <h1>Meet Sports Cram: Your Sports Whisperer</h1>
            <h2>Simple, Engaging, and User-friendly Sports Insights</h2>
            <p>
                Sports Cram is the perfect solution for those who don’t follow sports but want to feel confident in a sports conversation. Our platform transforms the complex world of sports into bite-sized, easy-to-digest insights.

                We provide clear summaries of major events, breakdowns of key moments, and engaging conversation starters. Whether you need to know who the standout players are, the essential highlights, or just want a few fun facts, Sports Cram has you covered. It’s sports made simple, so you can confidently join a discussion without feeling left out.
            </p>
        </section>

        <!-- Slide 4: How It Works -->
        <section class="slide" id="slide-4">
            <h1>Seamless Understanding in Three Steps</h1>
            <h2>Sports Insights Simplified</h2>
            <ul>
                <li><strong>Step 1:</strong> Sign up with some basic criteria such as location and sports you care
                    about.</li>
                <li><strong>Step 2:</strong> Get Insights: The platform provides a simplified summary, key players,
                    important moments, etc.</li>
                <li><strong>Step 3:</strong> Join the Conversation: Users are equipped with conversation starters and
                    fun facts.</li>
            </ul>
            <!-- <div class="visual">[Flowchart or infographic showing the process]</div> -->
        </section>

        <!-- Slide 5: Tech Stack -->
        <section class="slide" id="slide-5">
            <h1>The Sports Cram Tech Stack</h1>
            <h2>Our Secret Sauce</h2>
            <ul>
                <li><strong>AI-Powered Summaries:</strong> Advanced AI algorithms scour sports data sources, providing concise, easy-to-understand summaries that highlight essential stats and key moments.</li>
                <li><strong>Human Expertise:</strong> Sports enthusiasts refine the AI-generated summaries to ensure relevance and accuracy, adding a personal touch that resonates with non-sports fans.</li>
                <li><strong>Personalized Newsletters:</strong> Customized email newsletters deliver daily or weekly sports insights directly to users, tailored to their preferences and favorite sports.</li>
                <li><strong>Real-Time Alerts:</strong> Timely push notifications keep users updated on breaking news, game highlights, or major events so they can join conversations instantly.</li>
                <li><strong>Apple Intelligence Integration:</strong> We leverage the latest from Apple's Intelligence SDK to enhance user personalization and deliver seamless, cross-device notifications and updates.</li>
            </ul>
        </section>


        <!-- Slide 6: Market Opportunity -->
        <section class="slide" id="slide-6">
            <h1>A Vast Untapped Audience</h1>
            <h2>The Potential of Sports Cram</h2>

            <p>
            <ol>
                <li>General Interest in Sports.
                    According to a Gallup poll, about 60% of Americans consider themselves sports fans, which implies
                    that approximately 40% of Americans are not interested in sports.
                    The U.S. Census estimates the current adult population (age 18+) at around 260 million. Using the
                    40% figure, that suggests around 104 million adults may not be interested in sports.
                </li>
                <li>Desire for Basic Sports Knowledge.
                    A survey conducted by Morning Consult in 2021 found that around 1 in 5 non-sports fans express a
                    desire to understand sports better for social situations.
                    Applying this ratio to the 104 million non-sports fans would suggest that roughly 20.8 million
                    adults in the U.S. might want basic sports knowledge to feel more comfortable in social or
                    professional contexts.
                </li>
                <li>Motivations to Understand Sports.
                    Many people want to have basic sports knowledge for reasons like workplace culture, social
                    gatherings, and family or peer interactions.
                    A survey by Statista in 2022 revealed that a portion of non-sports fans is motivated by the social
                    aspect, indicating that sports conversations at work or social events can be a significant driver
                    for gaining basic knowledge.
                </li>
            </ol>
            </p>
            <p>
            <div style="font-size: 1.1em;">
                Based on these estimates, the target audience in the U.S. for a service like Sports Cram
                could be around <strong>20 to 25 million adults</strong> who don't currently follow sports but would like to
                have enough understanding to
                participate in conversations.
            </div>
            </p>
        </section>

        <!-- Slide 7: Revenue Model -->
        <section class="slide" id="slide-7">
            <h1>Sustainable and Scalable</h1>
            <h2>How Sports Cram Generates Revenue</h2>
            <ul>
                <li><strong>Subscription Plans:</strong> Premium features for subscribed users.</li>
                <li><strong>Partnerships:</strong> Collaborations with sports brands for exclusive content.</li>
                <li><strong>Advertisements:</strong> Targeted ads and sponsored content.</li>
            </ul>
        </section>

        <!-- Slide 8: Call to Action -->
        <section class="slide" id="slide-8">
            <h1>Join Us in Bridging the Gap</h1>
            <h2>Be Part of the Sports Cram Journey</h2>
            <h2>Let's Connect</h2>
            <p>Taking Sports Insights to the Next Level</p>
            <p>Email: <a href="mailto:business@sportscram.com">business@sportscram.com</a></p>
        </section>


        <div class="slide-numbers">
            <a href="#slide-1" onclick="jumpToSlide(0)">1</a> |
            <a href="#slide-2" onclick="jumpToSlide(1)">2</a> |
            <a href="#slide-3" onclick="jumpToSlide(2)">3</a> |
            <a href="#slide-4" onclick="jumpToSlide(3)">4</a> |
            <a href="#slide-5" onclick="jumpToSlide(4)">5</a> |
            <a href="#slide-6" onclick="jumpToSlide(5)">6</a> |
            <a href="#slide-7" onclick="jumpToSlide(6)">7</a> |
            <a href="#slide-8" onclick="jumpToSlide(7)">8</a>
        </div>


        <!-- Navigation Buttons -->
        <div class="navigation">
            <button id="prevBtn">Previous</button>
            <button id="nextBtn">Next</button>
        </div>

        <footer>
            <p>&copy; <span id="year"></span> Sports Cram, LLC. All rights reserved.</p>
        </footer>
        <script>
            document.getElementById("year").textContent = new Date().getFullYear();
        </script>

    </div>

</body>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = i === index ? 'block' : 'none';
        });

        // Update the active slide number link
        document.querySelectorAll('.slide-numbers a').forEach((link, i) => {
            if (i === index) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });

        // Hide "Next" button on the last slide
        if (index === slides.length - 1) {
            nextBtn.style.display = 'none';
        } else {
            nextBtn.style.display = 'inline-block';
        }

        // Hide "Previous" button on the first slide
        if (index === 0) {
            prevBtn.style.display = 'none';
        } else {
            prevBtn.style.display = 'inline-block';
        }

        // Update the URL with the current slide number
        updateURL(index);
    }


    function jumpToSlide(index) {
        currentSlide = index;
        showSlide(currentSlide);
    }


    // Function to update the URL with the current slide number
    function updateURL(index) {
        window.history.replaceState(null, null, `#slide-${index + 1}`);
    }

    // Function to get the slide number from the URL
    function getSlideFromURL() {
        const hash = window.location.hash;
        if (hash && hash.startsWith('#slide-')) {
            const slideNumber = parseInt(hash.replace('#slide-', ''), 10);
            if (!isNaN(slideNumber) && slideNumber >= 1 && slideNumber <= slides.length) {
                return slideNumber - 1; // Convert to zero-based index
            }
        }
        return 0; // Default to the first slide if no valid hash
    }

    // Navigate to the next slide
    function nextSlide() {
        if (currentSlide < slides.length - 1) {
            currentSlide++;
            showSlide(currentSlide);
        }
    }

    // Navigate to the previous slide
    function prevSlide() {
        if (currentSlide > 0) {
            currentSlide--;
            showSlide(currentSlide);
        }
    }

    // Event listeners for navigation buttons
    prevBtn.addEventListener('click', prevSlide);
    nextBtn.addEventListener('click', nextSlide);

    // Initialize the presentation based on the URL or default to the first slide
    currentSlide = getSlideFromURL();
    showSlide(currentSlide);
</script>

</html>

<?php
}