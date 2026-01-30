<?php
function write_current_week($atts)
{

    $default = array(
        'sport' => '',
        'league' => '',
    );

    $a = shortcode_atts($default, $atts);

    $sport = $a['sport'];
    $league = $a['league'];

    //return $sport . ' - ' . $league . ' ';

    // API endpoint
    $url = 'https://app.sportscram.com/api/pub/v1.0/current_week/'.$sport.'/'.$league;

    // return $url;

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
        // echo 'Request Error:' . curl_error($ch);
        $htmlContent = 'Request Error:' . curl_error($ch);
    } else {
        // Process the HTML response
        $htmlContent = $response;
    }

    // Close cURL session
    curl_close($ch);

    
    return $htmlContent;
}

add_shortcode('current_week', 'write_current_week');
