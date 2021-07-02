<?php
declare(strict_types=1);
defined('WPINC') || die;

/*
Plugin Name: Privatize WordPress
Plugin URI:  #
Description: Make the frontend accessible only to logged in users.
Version:     1.0.0
Author:      Gennaro Di Fiandra
Author URI:  https://espertowp.it
License:     GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
Text Domain: privatizewp
Domain Path: /languages
Requires PHP: 7.0.0
Requires at least: 5.0
Tested up to: 5.7
*/

add_action('template_redirect', function() {auth_redirect();});
