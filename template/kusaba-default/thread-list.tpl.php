<ul class="thread-list">
  <li class="parent-post">
    <input type="checkbox" name="threads[]" value="<?php print $thread->encodeId(); ?>">

    <header><h2><?php print $thread->encodeTitle(); ?></h2></header>
    <div class="author-name"><?php print $thread->encodeName(); ?></div>
    <div class="content">

      <?php if ($thread->hasValidImageFile()): ?>
        <figure>
          <?php $image_file = $thread->createImageFile(); ?>
          <?php $image = $image_file->getFilename(); ?>
          <?php $thumb = $image_file->getFilenameThumb(); ?>
            <a href="<?php print fHTML::encode($image->getPath(TRUE)); ?>" target="_blank">
              <img data-image-id="<?php $image_file->encodeId(); ?>" data-src="<?php print fHTML::encode($thumb->getPath(TRUE)); ?>" width="250" height="<?php print $thumb->getHeight(); ?>" alt="<?php print $image->getSize(TRUE); ?>" src="<?php print $loading_img_src; ?>">
          </a>
        </figure>
      <?php endif; ?>

      <div class="message">
        <?php print $thread->prepareMessage(); ?>
      </div>
    </div>
  </li>

  <?php foreach ($replies as $reply): ?>
    <li>
      <input type="checkbox" name="threads[]" value="<?php print $reply->encodeId(); ?>">

      <header><h2><?php print $reply->encodeTitle(); ?></h2></header>
      <div class="author-name"><?php print $reply->encodeName(); ?></div>
      <div class="content">

        <?php if ($reply->hasValidImageFile()): ?>
          <figure>
            <?php $image_file = $reply->createImageFile(); ?>
            <?php $image = $image_file->getFilename(); ?>
              <?php $thumb = $image_file->getFilenameThumb(); ?>
              <a href="<?php print fHTML::encode($image->getPath(TRUE)); ?>" target="_blank">
                <img data-image-id="<?php print $image_file->encodeId(); ?>" data-src="<?php print fHTML::encode($thumb->getPath(TRUE)); ?>" width="250" height="<?php print $thumb->getHeight(); ?>" alt="<?php print $image->getSize(TRUE); ?>" src="<?php print $loading_img_src; ?>">
            </a>
          </figure>
        <?php endif; ?>

        <div class="message">
          <?php print $reply->prepareMessage(); ?>
        </div>
      </div>
    </li>
  <?php endforeach; ?>
</ul>

<?php print $pagination; ?>

<div id="bottom"></div>
