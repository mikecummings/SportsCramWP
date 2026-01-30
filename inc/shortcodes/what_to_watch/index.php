<?php
function writewhat_to_watch($atts)
{

    $default = array(
        'sport' => '',
        'league' => '',
        'game_name' => '',
        'day' => '',
    );

    // sport, league, day

    $a = shortcode_atts($default, $atts);

    $game_name = $a['game_name']; // nfl_thursday_night nfl_sunday_night nfl_monday_night
    $sport = $a['sport']; 
    $league = $a['league']; 
    $day = $a['day']; 

    // API endpoint
    $url = 'https://app.sportscram.com/api/pub/v1.0/what_to_watch?1=1';

    // if ($game_name) {
    //     $url .= '&' . $game_name .'=true';
    // }

    // if ($sport) {
    //     $url .= '&sport=' . $sport;
    // }

    // if ($league) {
    //     $url .= '&league=' . $league;
    // }

    // if ($day) {
    //     $url .= '&day=' . $day;
    // }

    //8&nfl_monday_night=true

    // Initialize cURL session
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        // 'Content-Type: application/json',
        'Authorization: Bearer 7283dec1-feb5-47c6-a31a-e4d9ee95ed28'
    ]);

    // Execute cURL session
    $response = curl_exec($ch);

    // Check for errors
    if(curl_errno($ch)){
        echo 'Request Error:' . curl_error($ch);
    } else {
        // Process the HTML response
        $htmlContent = $response;
        // Do something with the HTML content
        // For example, you can display it
        //echo $htmlContent;
    }


    // Close cURL session
    curl_close($ch);

    
    return $htmlContent;
}

add_shortcode('what_to_watch', 'writewhat_to_watch');
