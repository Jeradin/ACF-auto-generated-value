<?php

/*
Plugin Name: Advanced Custom Fields: Generate Random Key value
Plugin URI: https://github.com/Jeradin/ACF-auto-generated-value
Description: Creates a hidden/readonly field that generates a unique key, that won't change once it is saved. Ideal for user-generated forms. Includes option to hide the field from the user.
Version: 1.0.0
Author: Kindly, Jeradin
Author URI: http://kindly.dk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_auto_generated_value( $version ) {

	include_once('acf-auto_generated_value-v5.php');

}

add_action('acf/include_field_types', 'include_field_types_auto_generated_value');




?>