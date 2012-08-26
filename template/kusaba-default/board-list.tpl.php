<?php if ($last_validation_message): ?>
  <?php print $last_validation_message; ?>
<?php endif; ?>

<?php print $board_form; ?>

<ul>
  <?php foreach ($threads as $thread): ?>
    <li>
      <input type="checkbox" name="threads[]" value="<?php print $thread->encodeId(); ?>">

      <header><h2><?php print $thread->encodeTitle(); ?></h2></header>
      <div class="author-name">
        <?php print $thread->encodeName(); ?>
        <a href="<?php print $thread->encodeReplyURL(); ?>"><?php print fHTML::encode(__('Reply')); ?></a>
      </div>
      <div class="content">
        <?php if ($thread->hasValidImageFile()): ?>
          <figure>
            <?php $image = $thread->createImageFile()->getFilename(); ?>
            <?php $thumb = $thread->createImageFile()->getFilenameThumb(); ?>
              <a href="<?php print fHTML::encode($image->getPath(TRUE)); ?>" target="_blank">
                <img src="<?php print fHTML::encode($thumb->getPath(TRUE)); ?>" width="<?php print $thumb->getWidth(); ?>" height="<?php print $thumb->getHeight(); ?>" alt="<?php print $image->getSize(TRUE); ?>">
            </a>
          </figure>
        <?php endif; ?>
        
        <div class="message">
          <?php print $thread->prepareMessage(); ?>
        </div>
    </li>
  <?php endforeach; ?>
</ul>
