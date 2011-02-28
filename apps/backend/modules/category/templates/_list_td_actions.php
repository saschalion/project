<td>
  <ul class="sf_admin_td_actions">
    <?php echo $helper->linkToEdit($jobeet_category,
            array(
                'params' =>   array(

                ),
                'class_suffix' => 'edit',
                'label' => 'Ред.'
                )
            ) ?>
    <?php echo $helper->linkToDelete($jobeet_category,
            array(
                'params' =>   array(

                ),
                'confirm' => 'Удалить запись?',
                'class_suffix' => 'delete',
                'label' => 'Удалить')
            ) ?>
  </ul>
</td>
