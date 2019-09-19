<?php

/**
 * @file
 * Hooks provided by the Message Banner module.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Alter the colors available for message banners.
 *
 * The module provides a list of default colors but these can be extended with
 * brand colors or similar using this hook. Colors should be defined in the
 * format:
 *
 * @code
 *   $colors = [
 *     '#bada55' => t('A badass green'),
 *   ];
 * @endcode
 *
 * Where the key is a hex code (or other HTML-safe color value, such as 'gray'),
 * and the value is a human-readable option.
 *
 * @param array $colors
 *   The default color list.
 *
 * @ingroup message_banner
 */
function hook_message_banner_colors_alter(array &$colors) {
  // Define a new color.
  $colors['#bada55'] = t('A badass green');

  // Replace an existing color.
  $white = array_search(t('White'), $colors);
  unset($colors[$white]);
  $colors['#ffffff'] = t('White');
}

/**
 * @} End of "addtogroup hooks".
 */
