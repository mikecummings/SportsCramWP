<?php
function write_game($atts)
{

    $default = array(
        'sport' => '',
        'league' => '',
        'game_name' => '',
        'mode' => '',
        'day' => '',
        'event_id' => ''
    );

    // sport, league, day

    $a = shortcode_atts($default, $atts);

    $game_name = $a['game_name']; // nfl_thursday_night nfl_sunday_night nfl_monday_night
    $sport = $a['sport']; 
    $league = $a['league']; 
    $day = $a['day']; 
    $mode = $a['mode']; 
    $event_id = $a['event_id']; 

    // API endpoint
    $url = 'https://app.sportscram.com/api/pub/v1.0/get_game?1=1';

    if ($game_name) {
        $url .= '&' . $game_name .'=true';
    }

    if ($sport) {
        $url .= '&sport=' . $sport;
    }

    if ($league) {
        $url .= '&league=' . $league;
    }

    if ($day) {
        $url .= '&day=' . $day;
    }

    if ($mode) {
        $url .= '&mode=' . $mode;
    }

    if ($event_id) {
        $url .= '&event_id=' . $event_id;
    }

    //8&nfl_monday_night=true

    // Initialize cURL session
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    if ($mode == 'companion') {
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer 7283dec1-feb5-47c6-a31a-e4d9ee95ed28'
        ]);
    }
    else {
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer 7283dec1-feb5-47c6-a31a-e4d9ee95ed28'
        ]);
    }

    $htmlContent = '';

    // Execute cURL session
    $response = curl_exec($ch);

    // Check for errors
    if(curl_errno($ch)){
        echo 'Request Error:' . curl_error($ch);
    } else {

        if ($response != "" && $mode == 'companion') {

            echo "<script type='text/javascript'>";
            echo  "var game_json_data = {};";
            echo  "try{";
            echo  "game_json_data = JSON.parse(`$response`);";
            echo  "}catch(e){}";
            //echo "console.log(game_json_data);";
            echo  "</script>";

            $htmlContent = <<<EOD
                <style>
                #text-container {
                    font-size: 24px;
                    text-align: center;
                    margin-top: 20px;
                }
        
                #arrow-container {
                    text-align: center;
                    margin-top: 50px;
                }
        
                .arrow {
                    width: 0;
                    height: 0;
                    border-style: solid;
                    display: inline-block;
                    cursor: pointer;
                    margin: 0 20px;
                }
        
                #left-arrow {
                    border-width: 30px 40px 30px 0;
                    border-color: transparent #007bff transparent transparent;
                }
        
                #right-arrow {
                    border-width: 30px 0 30px 40px;
                    border-color: transparent transparent transparent #007bff;
                }
        
                #start-stop-button {
                    display: block;
                    margin: 20px auto;
                    padding: 10px 20px;
                    font-size: 16px;
                    cursor: pointer;
                }
        
        
                #input-container {
                    text-align: center;
                    margin-top: 20px;
                }
        
                #input-box {
                    width: 4%; /* Adjust the width as needed */
                    padding: 5px;
                }

                @media (min-width: 300px) and (max-width: 600px) {
                    #input-box {
                        width: 15%;
                    }
                }
        
        
            </style>
            <div id="arrow-container">
                <div id="left-arrow" class="arrow"></div>
                <div id="right-arrow" class="arrow"></div>
                <span id="pos"></span> of <span id="num"></span>
            </div>
        
            <div id="text-container"></div>
        
            <button id="start-stop-button">.Stop Rotating</button>
        
            <div id="input-container">Rotates every <input type="text" value="6" id="input-box">&nbsp;Seconds</div>
        
            <script>
        
                let TIME_TO_ROTATE = 6000;
        
                document.addEventListener('DOMContentLoaded', function () {

                    function set_content(contentText) {
                        let googleSearch = 'https://www.google.com/search?q='+ contentText;
                        let link = '(<a target="_blank" href="'+googleSearch+'">Google</a>)';
                        return '<strong>'+ contentText + '<br>'+link;
                    }

                    const contentDataArray = game_json_data; // game_json_data.content

                    let currentIndex = 0;
                    let intervalId;
                    let startStopButton = document.getElementById('start-stop-button');
                    let timeBox = document.getElementById('input-box');

                    function set_text_and_positions() {
                        document.getElementById('text-container').innerHTML = set_content(contentDataArray[currentIndex]);
                        document.getElementById('num').textContent = contentDataArray.length;
                        document.getElementById('pos').textContent = currentIndex + 1;
                    }
                    set_text_and_positions();

                    function updateText(index) {
                        currentIndex = index;
                        set_text_and_positions();
                    }
        
                    function setRotation() {
                        clearInterval(intervalId);
                        intervalId = setInterval(function () {
                            updateText((currentIndex + 1) % contentDataArray.length);
                        }, TIME_TO_ROTATE);
                    }
        
                    document.getElementById('input-box').addEventListener('keyup', function(event) {
                        console.log('Key up event in input box:', event.key);
                        if (!isNaN(this.value)) {
                            TIME_TO_ROTATE = this.value * 1000;
                        }
                        console.log('TIME_TO_ROTATE', TIME_TO_ROTATE);
                        setRotation();
                    });
        
                    document.getElementById('left-arrow').addEventListener('click', function () {
                        updateText((currentIndex - 1 + contentDataArray.length) % contentDataArray.length);
                        clearInterval(intervalId);
                        startStopButton.textContent = 'Start Rotating';
                    });
        
                    document.getElementById('right-arrow').addEventListener('click', function () {
                        updateText((currentIndex + 1) % contentDataArray.length);
                        clearInterval(intervalId);
                        startStopButton.textContent = 'Start Rotating';
                    });
        
                    setRotation();
        
                    startStopButton.addEventListener('click', function () {
                        if (this.textContent === 'Stop Rotating') {
                            clearInterval(intervalId);
                            this.textContent = 'Start Rotating';
                        } else {
                            setRotation();
                            this.textContent = 'Stop Rotating';
                        }
                    });
                });
        
        
            </script>
            EOD;
        }
        else {
            $htmlContent = $response;
        }
    }


    // Close cURL session
    curl_close($ch);

    return $htmlContent;
}

add_shortcode('game', 'write_game');
