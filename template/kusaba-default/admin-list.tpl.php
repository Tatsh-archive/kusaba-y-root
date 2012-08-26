<header><h2><?php print __('Administration'); ?></h2></header>

<ul class="admin-links">
  <?php foreach ($links as $url => $title): ?>
    <li>
      <a href="<?php print $url; ?>"><?php print $title; ?></a>
    </li>
  <?php endforeach; ?>
</ul>
