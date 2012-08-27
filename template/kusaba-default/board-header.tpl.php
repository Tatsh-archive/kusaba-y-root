<nav class="board-nav">
  <div class="wrap-bracket-left">[</div>
  <ul>
    <?php $count = count($boards); ?>
    <?php $i = 1; ?>
    <?php foreach ($boards as $board): ?>
      <li>
        <a href="/<?php print $board->getShortURL(); ?>/"><?php print $board->getShortURL(); ?></a>
        <?php if ($count !== $i): ?>/<?php endif; ?>
        <?php $i++; ?>
      </li>
    <?php endforeach ?>
  </ul>
  <div class="wrap-bracket-right">]</div>
</nav>

<nav class="after-categories">
  <ul>
    <li><span>[</span><a href="/">Home</a><span>]</span></li>
  </ul>
</nav>
