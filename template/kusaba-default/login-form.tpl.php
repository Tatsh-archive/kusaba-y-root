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
<header><h1><?php print fHTML::encode(__('Log in')); ?></h1></header>
<form method="post">
  <div class="form-field-container form-textfield-container">
    <label class="form-label" for="edit-name"><?php print fHTML::encode(__('Name')); ?> <span class="form-required-marker">*</span></label>
    <input class="form-field form-textfield" id="edit-name" type="text" name="name" value="<?php print fRequest::encode('name'); ?>" required>
  </div>

  <div class="form-field-container form-textfield-container">
    <label class="form-label" for="edit-password"><?php print fHTML::encode(__('Password')); ?> <span class="form-required-marker">*</span></label>
    <input class="form-field form-password form-textfield" id="edit-password" type="password" name="user_password" required pattern="^.{8,}$">
  </div>

  <div class="form-ops-container">
    <input type="submit" class="form-submit" value="<?php print fHTML::encode(__('Sign in')); ?>">
    <a class="form-submit" href="/reset-password/"><?php print fHTML::encode(__('Forgot your password?')); ?></a>
  </div>

  <input type="hidden" name="csrf" value="<?php print $csrf; ?>">
</form>
