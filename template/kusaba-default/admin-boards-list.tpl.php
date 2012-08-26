<form method="post">
  <table>
    <thead>
      <tr>
        <th></th>
        <th><?php fCRUD::printSortableColumn('name'); ?></th>
        <th><?php fCRUD::printSortableColumn('short_u_r_l'); ?></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($boards as $board): ?>
        <tr>
          <?php $name = $board->encodeName(); ?>
          <?php $url = $board->encodeShortURL(); ?>
          <td class="form-checkbox-container"><input type="checkbox" value="<?php print $name; ?>"></td>
          <td class="<?php fCRUD::getColumnClass('name'); ?>"><a href="/admin/boards/<?php print $url; ?>/"><?php print $name; ?></a></td>
          <td class="<?php fCRUD::getColumnClass('short_u_r_l'); ?>"><?php print '/'.$url.'/'; ?></td>
          <td class="edit-link-container"><a href="/admin/boards/<?php print $url; ?>/"><?php print fHTML::encode(__('edit')); ?></a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  
  <div class="form-ops-container">
    <button name="action" value="action::disable" disabled><?php print fHTML::encode(__('Disable selected')); ?></button>
    <button name="action" value="action::delete" disabled><?php print fHTML::encode(__('Delete selected')); ?></button>
  </div>
</form>
