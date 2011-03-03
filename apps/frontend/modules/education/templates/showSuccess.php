<table class="table table-double">
  <tbody>
       <tr>
      <th>Название:</th>
      <td><?php echo $education->getName() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('education/edit?id='.$education->getId()) ?>">Редактировать</a>
&nbsp;
<a href="<?php echo url_for('education/index') ?>">Список</a>
