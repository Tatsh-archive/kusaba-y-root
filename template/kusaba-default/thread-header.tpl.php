<header>
  <h2><?php print fHTML::encode(__('Posting mode: Reply')); ?></h2>
  <nav class="links">
    <ul>
      <li><a href="<?php print $board_url; ?>"><?php print fHTML::encode(__('Return')); ?></a></li>
      <li><a href="#bottom"><?php print  fHTML::encode(__('Bottom')); ?></a></li>
    </ul>
  </nav>
</header>

<?php if ($last_validation_message): ?>
  <?php print $last_validation_message; ?>
<?php endif; ?>

<?php print $reply_form; ?>
