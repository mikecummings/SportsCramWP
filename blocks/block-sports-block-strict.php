<?php
$heading = block_value( 'text-heading' );
$additional_content = block_value( 'additional-contents' );
$week_of = block_value( 'week-info' );

$ranking_list_header = block_value( 'ranking-list-header' );
$ranking_list = block_value( 'ranking-list' );

$ranking_text = block_value( 'ranking-text' );
$ranking_url = block_value( 'ranking-url' );

if (empty($ranking_text)) {
    $ranking_text = 'View Standings';
}

$scoreboard_text = block_value( 'scoreboard-text' );
$scoreboard_url = block_value( 'scoreboard-url' );

if (empty($scoreboard_text)) {
    $scoreboard_text = 'View Full Scoreboard';
}
?>
<blockquote class="wp-block-quote" style="width:100%;">
    <h2 class="wp-block-heading"><?php echo $heading?></h2>
    
    <?php if ($week_of) { ?>
    <p class="wp-block-paragraph"><?php echo $week_of?></p>
    <?php } ?>

    <?php echo $additional_content?>

    <?php if ($ranking_list) { ?>
        <p class="wp-block-paragraph">
            <h4><?php echo $ranking_list_header?></h4>
            <?php echo $ranking_list?>
        </p>
    <?php } ?>

    <?php if ($ranking_url) { ?>
        <p class="wp-block-paragraph">
            <a target="_blank" href="<?php echo $ranking_url?>" rel="noreferrer noopener nofollow">
                <?php echo $ranking_text?>
            </a>
        </p>
    <?php } ?>

    <?php if ($scoreboard_url) { ?>
        <p class="wp-block-paragraph">
            <a target="_blank" href="<?php echo $scoreboard_url?>" rel="noreferrer noopener nofollow">
                <?php echo $scoreboard_text?>
            </a>
        </p>
    <?php } ?>

    
</blockquote>
