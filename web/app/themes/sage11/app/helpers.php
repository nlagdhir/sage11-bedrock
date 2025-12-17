<?php


// // TEMP: Debug ACF Flexible Content layouts
// add_action('admin_notices', function () { 

//   if (!function_exists('acf_get_field')) {
//     return;
//   }

//   $field = acf_get_field('page_sections');

//   if (!$field || empty($field['layouts'])) {
//     echo '<div class="notice notice-error"><p>No layouts found.</p></div>';
//     return;
//   }

//   echo '<div class="notice notice-info"><pre>';
//   print_r(array_keys($field['layouts']));
//   echo '</pre></div>';
// });