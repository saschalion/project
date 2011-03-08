<?php slot('sf_admin.current_header') ?>
<th>
  <?php if ('tab_id' == $sort[0]): ?>
    <?php echo link_to(__('Таб. номер', array(), 'messages'), '@jobeet_job', array('query_string' => 'sort=tab_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Таб. номер', array(), 'messages'), '@jobeet_job', array('query_string' => 'sort=tab_id&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th>
  <?php echo __('Специальность', array(), 'messages') ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th>
  <?php if ('last_name' == $sort[0]): ?>
    <?php echo link_to(__('Фамилия', array(), 'messages'), '@jobeet_job', array('query_string' => 'sort=last_name&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Фамилия', array(), 'messages'), '@jobeet_job', array('query_string' => 'sort=last_name&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th>
  <?php if ('first_name' == $sort[0]): ?>
    <?php echo link_to(__('Имя', array(), 'messages'), '@jobeet_job', array('query_string' => 'sort=first_name&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Имя', array(), 'messages'), '@jobeet_job', array('query_string' => 'sort=first_name&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th>
  <?php echo __('Город', array(), 'messages') ?>
</th>
<th>
  <?php echo __('Статус', array(), 'messages') ?>
</th>
<th>
  <?php echo __('Добавил', array(), 'messages') ?>
</th>
<th>
  <?php echo __('Ставка', array(), 'messages') ?>
</th>
<th>
  <?php echo __('Дата размещения', array(), 'messages') ?>
</th>
<?php end_slot(); ?>

<?php include_slot('sf_admin.current_header') ?>