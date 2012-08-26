<?php
/**
 * Available variables:
 * - $csrf - CSRF token for /login/post
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
<header class="general"><h2><?php print __('Log in'); ?></h2></header>
<form method="post">
  <div class="form-textfield-container">
    <input class="form-field form-textfield" id="edit-name" type="text" name="name" value="<?php print fRequest::encode('name'); ?>" required placeholder="<?php print __('Name'); ?>">
  </div>

  <div class="form-textfield-container">
    <input class="form-field form-password form-textfield" id="edit-password" type="password" name="user_password" required placeholder="<?php print __('Password'); ?>" pattern="^.{8,}$">
  </div>

  <div class="form-ops-container">
    <input type="submit" class="form-submit" value="<?php print __('Sign in'); ?>">
  </div>

  <a class="login-forgot-password-link" href="/reset-password/"><?php print __('Forgot your password?'); ?></a>

  <input type="hidden" name="csrf" value="<?php print $csrf; ?>">
</form>
