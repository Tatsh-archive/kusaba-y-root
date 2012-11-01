<?php
/**
 * Available variables:
 * - $lang
 * - $dir
 * - $head_js
 * - $is_front
 * - $title
 * - $site_name
 * - $site_slogan
 * - $css
 * - $head_js
 * - $body_class
 * - $content
 * - $production_mode
 * - $body_js
 *
 * If supporting Facebook and IE < 9, you need to add:
 *   xmlns:fb="http://ogp.me/ns/fb#"
 * to the html tag.
 *
 * @copyright 2012 Andrew Udvare
 * @author Andrew Udvare [au] <andrew@poluza.com>
 * @license http://www.opensource.org/licenses/mit-license.php
 *
 * @package KusabaDefaultTemplate
 * @link http://www.example.com/
 *
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html lang="<?php print $lang; ?>" dir="<?php print $dir; ?>">
  <head>
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no">
    <?php if ($is_front): ?>
      <title><?php print $site_name; ?></title>
    <?php else: ?>
      <title><?php print $title.' | '.$site_name; ?></title>
    <?php endif; ?>
    <?php print $css; ?>
    <?php print $head_js; ?>
    <?php //print $conditional_head_js; ?>
  </head>
  <body class="<?php print $body_class; ?>">
    <section class="layout-978">
      <?php print $content; ?>
    </section>

    <footer class="layout-978 clear">
      <p>© 2012</p>
    </footer>

    <?php if ($production_mode): ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
    <?php else: ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.js" type="text/javascript"></script>
    <?php endif; ?>

    <?php print $body_js; ?>
  </body>
</html>
