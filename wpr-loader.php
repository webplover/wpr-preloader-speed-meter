<?php

/**
 * Plugin Name: WPR Preloader Speed Meter
 * Description: A preloader plugin by webplover.com
 * Version: 1.0.0
 * Author: Kazim
 */

defined('ABSPATH') || exit;



define('WPR_PRELOADER_VERSION', microtime());


add_action('wp_body_open', function () {
?>
  <div id="loader-wrapper">
    <div class="loader">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="subline"></div>
      <div class="subline"></div>
      <div class="subline"></div>
      <div class="subline"></div>
      <div class="subline"></div>
      <div class="loader-circle-1">
        <div class="loader-circle-2"></div>
      </div>
      <div class="needle"></div>
      <div class="loading">Loading</div>
    </div>
  </div>
<?php
});


// Add preloader html after body start tag
add_action('wp_enqueue_scripts', function () {

  wp_enqueue_style('wpr-loader', plugin_dir_url(__FILE__) . 'assets/wpr-loader-styles.css', [], WPR_PRELOADER_VERSION);

  wp_enqueue_script('wpr-loader', plugin_dir_url(__FILE__) . 'assets/wpr-loader-scripts.js', [], WPR_PRELOADER_VERSION, true);
});
