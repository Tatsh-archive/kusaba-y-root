<nav class="admin-links-nav">
  <ul class="admin-links">
    <?php foreach ($links as $url => $title): ?>
      <li>
        <a href="<?php print $url; ?>"><?php print $title; ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
</nav>
