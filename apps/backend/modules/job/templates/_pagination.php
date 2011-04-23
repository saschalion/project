<div class="sf_admin_pagination">
  <a href="<?php echo url_for('@jobeet_job') ?>?>?page=1">
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/first.png', array('alt' => __('Первая страница', array(), 'sf_admin'), 'title' => __('Первая страница', array(), 'sf_admin'))) ?>
  </a>

  <a href="<?php echo url_for('@jobeet_job') ?>?page=<?php echo $pager->getPreviousPage() ?>">
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/previous.png', array('alt' => __('Предыдущая страница', array(), 'sf_admin'), 'title' => __('Прыдыдущая страница', array(), 'sf_admin'))) ?>
  </a>


<ul class="pager">
  <?php foreach ($pager->getLinks() as $page): ?>
    
    <?php if ($page == $pager->getPage()): ?>
        
            <li>
                <?php echo $page ?>
            </li>
                <?php else: ?>
            <li>
                <a href="<?php echo url_for('@jobeet_job') ?>?page=<?php echo $page ?>"><?php echo $page ?></a>
            </li>
        
    <?php endif; ?>
    
  <?php endforeach; ?>
</ul>

  <a href="<?php echo url_for('@jobeet_job') ?>?page=<?php echo $pager->getNextPage() ?>">
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/next.png', array('alt' => __('Следующая страница', array(), 'sf_admin'), 'title' => __('Следующая страница', array(), 'sf_admin'))) ?>
  </a>

  <a href="<?php echo url_for('@jobeet_job') ?>?page=<?php echo $pager->getLastPage() ?>">
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/last.png', array('alt' => __('Последняя страница', array(), 'sf_admin'), 'title' => __('Последняя страница', array(), 'sf_admin'))) ?>
  </a>
</div>
