<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <?php if (!is_user_logged_in()) : ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BY584TLEMM"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date()); gtag('config', 'G-BY584TLEMM');</script>
    <script>gtag('event', 'conversion', { 'send_to': 'AW-17643113132/q0pkCIq1mqsbEKyV8txB', 'value': 1.0, 'currency': 'USD' });</script>
    <?php endif; ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <?php wp_head(); ?>
    <?php if (!is_user_logged_in()) : ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17643113132"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date()); gtag('config', 'AW-17643113132');</script>
    <?php endif; ?>
</head>

<body <?php body_class(); ?>>
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
            <img src="https://app.sportscram.com/gui/img/logo.png" alt="Sports Cram Logo">
            <p class="tagline"><?php bloginfo('description'); ?></p>
        </header>