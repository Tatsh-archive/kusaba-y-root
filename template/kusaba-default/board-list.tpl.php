<header class="board-title"><h2><?php print $title; ?></h2></header>

<?php if ($last_validation_message): ?>
  <div class="validation-message">
    <?php print $last_validation_message; ?>
  </div>
<?php endif; ?>

<?php print $board_form; ?>

<?php $noneText = fHTML::encode(__('None')); ?>
<ul class="board-list">
  <?php foreach ($threads as $thread): ?>
    <?php $tid = $thread->encodeId(); ?>
    <?php $image_file = $image = $thumb = NULL; ?>
    <?php if ($thread->hasValidImageFile()): ?>
      <?php $image_file = $thread->createImageFile(); ?>
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
            <?php print $noneText; ?>
          <?php endif; ?>
        </span>
      </div>
      
      <input type="checkbox" name="threads[]" value="<?php print $thread->encodeId(); ?>">
      <header class="thread-title"><h2><?php print $thread->encodeTitle(); ?></h2></header>
      <span class="author-name">
        <?php print $thread->encodeName(); ?>
      </span>
      <span class="date">
        <?php print fHTML::encode($thread->getDateUpdated()->format('m/d/y(D)H:i')); ?>
      </span>
      <?php print fHTML::encode(__('No.')); ?><a class="thread-id" href="#" data-thread-id="<?php print $tid; ?>"><?php print $tid; ?></a>
            
      [<a href="<?php print $thread->encodeReplyURL(); ?>"><?php print fHTML::encode(__('Reply')); ?></a>]
      
      <div class="content">
        <?php if ($image_file): ?>
          <figure>
            <a href="<?php print fHTML::encode($image->getPath(TRUE)); ?>" target="_blank">
              <img data-image-id="<?php print $image_file->encodeId(); ?>" data-src="<?php print fHTML::encode($thumb->getPath(TRUE)); ?>" width="<?php print $thumb->getWidth(); ?>" height="<?php print $thumb->getHeight(); ?>" alt="<?php print $image->getSize(TRUE); ?>" src="<?php print $loading_img_src; ?>">
            </a>
          </figure>
        <?php endif; ?>
        
        <div class="message" data-thread-id="<?php print $tid; ?>">
          <?php print $thread->prepareMessage(); ?>
        </div>
      </div>
    </li>
  <?php endforeach; ?>
</ul>

<?php print $pagination; ?>
