<table class="table table-double">
  <tbody>   
    <tr>
      <th>Название:</th>
      <td><?php echo $jobeet_category->getName() ?></td>
    </tr>    
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('jobname/edit?id='.$jobeet_category->getId()) ?>">Редактировать</a>
&nbsp;
<a href="<?php echo url_for('jobname/index') ?>">Список</a>
