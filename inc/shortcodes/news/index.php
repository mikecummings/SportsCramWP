<?php
'[news sport="football" league="nfl"]';
function write_news($atts)
{

    $default = array(
        'sport' => '',
        'league' => ''
    );

    // sport, league, day

    $a = shortcode_atts($default, $atts);

    $sport = $a['sport']; 
    $league = $a['league']; 

    // API endpoint
    $url = 'https://app.sportscram.com/api/pub/v1.0/news?1=1';

    if ($sport) {
        $url .= '&sport=' . $sport;
    }

    if ($league) {
        $url .= '&league=' . $league;
    }

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
    if (curl_errno($ch)) {
        return 'Request Error: ' . curl_error($ch);
    }

    // Close cURL session
    curl_close($ch);

    // Decode the JSON response
    $newsItems = json_decode($response, true);

    if (!$newsItems || !is_array($newsItems)) {
        return 'No news items found.';
    }

    // Build the HTML output
    $htmlContent = '<div class="news-container">';
    foreach ($newsItems as $item) {
        $htmlContent .= '<div class="news-article"">';
        $htmlContent .= '<h3>' . htmlspecialchars($item['data']['headline']) . '</h3>';
        $htmlContent .= '<p>' . htmlspecialchars($item['data']['description']) . '</p>';
        // $htmlContent .= '<p><strong>Team:</strong> ' . htmlspecialchars($item['team']['displayName']) . '</p>';

        // Convert the timestamp to EST
        $publishedDate = new DateTime($item['data']['published']);
        $publishedDate->setTimezone(new DateTimeZone('America/New_York'));
        $formattedDate = $publishedDate->format('m/d/Y');// . ' EST'; 

        $htmlContent .= '<p>' . htmlspecialchars($formattedDate) . '</p>';
        $htmlContent .= '</div>';
    }
    $htmlContent .= '</div>';

    return $htmlContent;
}

add_shortcode('news', 'write_news');
