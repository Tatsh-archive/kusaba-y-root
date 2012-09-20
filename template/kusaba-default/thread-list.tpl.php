<?php $none_text = fHTML::encode(__('None')); ?>

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
              <img data-image-id="<?php $image_file->encodeId(); ?>" data-src="<?php print fHTML::encode($thumb->getPath(TRUE)); ?>" width="<?php print $thumb->getWidth(); ?>" height="<?php print $thumb->getHeight(); ?>" alt="<?php print $image->getSize(TRUE); ?>" src="<?php print $loading_img_src; ?>">
          </a>
        </figure>
      <?php endif; ?>

      <div class="message">
        <?php print $thread->prepareMessage(); ?>
      </div>
    </div>
  </li>

  <?php foreach ($replies as $reply): ?>
    <?php $rid = $reply->encodeId(); ?>
    <?php $image_file = $image = $thumb = NULL; ?>
    <?php if ($reply->hasValidImageFile()): ?>
      <?php $image_file = $reply->createImageFile(); ?>
      <?php $image = $image_file->getFilename(); ?>
      <?php $thumb = $image_file->getFilenameThumb(); ?>
      <?php $original_name = $image_file->getOriginalFilename(); ?>
    <?php endif; ?>

    <li class="thread-item">
      <div class="file">
        <label class="file-label"><?php print fHTML::encode(__('File:')); ?> </label>
        <span class="file-info">
          <?php if ($image): ?>
            <a href="<?php print fHTML::encode($image->getPath(TRUE)); ?>"><?php print $image ?></a>-(<?php print fHTML::encode($image->getSize(TRUE)); ?>, <?php print $image->getWidth().'x'.$image->getHeight() ?>, <?php print fHTML::encode($original_name); ?>)
          <?php else: ?>
            <?php print $none_text; ?>
          <?php endif; ?>
        </span>
      </div>

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
