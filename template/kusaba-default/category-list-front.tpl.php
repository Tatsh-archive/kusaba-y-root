<nav class="category-nav">
  <ul class="category-list">
    <?php foreach ($categories as $category): ?>
    <?php $boards = $category->buildBoards(); ?>
    <?php if (!count($boards)): ?>
      <?php continue; ?>
    <?php endif; ?>

    
    <li>
      <?php print $category->encodeName(); ?>

      <ul>
        <?php foreach ($boards as $board): ?>
          <li>
            <a href="/<?php print $board->encodeShortURL(); ?>/">
              <?php print $board->encodeName(); ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>

    </li>
    <?php endforeach; ?>
  </ul>
</nav>
