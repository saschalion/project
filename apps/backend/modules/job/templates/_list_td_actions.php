<td>
  <ul class="sf_admin_td_actions">
    <li class="print"><?php  echo link_to('&nbsp;', 'job/show?id='.$jobeet_job->getId());?></li>
   <?php echo $helper->linkToEdit($jobeet_job, 
           array(  'params' =>   array(),
               'class_suffix' => 'edit',
               'label' => '&nbsp;'
               )
           )
           ?>
    <?php echo $helper->linkToDelete($jobeet_job,
            array(
                'params' =>   array(),
                'confirm' => 'Удалить запись?',
                'class_suffix' => 'delete',
                'label' => '&nbsp;'
                )
            )
            ?>
  </ul>
</td>
