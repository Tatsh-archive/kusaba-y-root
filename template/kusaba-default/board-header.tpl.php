<nav>
  <ul>
    <?php foreach ($boards as $board): ?>
      <li>
        <a href="/<?php print $board->getShortURL(); ?>/"><?php print $board->getShortURL(); ?></a>
      </li>
    <?php endforeach ?>
  </ul>
</nav>
