<fieldset>
  <legend><span class="fieldset-legend"></span></legend>
  <div class="fieldset-wrapper">
    <table class="table table-hover table-bordered">
      <tr>
        <th><?php print t('Label'); ?></th>
        <th><?php print t('Size'); ?></th>
        <th><?php print t('Mimetype'); ?></th>
      </tr>
      <?php foreach($datastreams as $key => $value): ?>
        <tr>
          <td><?php if(isset($value['label_link'])): ?><?php print $value['label_link']; ?><?php endif; ?></td>
          <td><?php if(isset($value['size'])): ?><?php print $value['size']; ?><?php endif; ?></td>
          <td><?php if(isset($value['mimetype'])): ?><?php print $value['mimetype']; ?><?php endif; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</fieldset>
