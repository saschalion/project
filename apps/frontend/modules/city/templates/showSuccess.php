<table class="table table-double">
  <tbody>    
    <tr>
      <th>Название:</th>
      <td><?php echo $city->getName() ?></td>
    </tr>   
</table>

<hr />

<a href="<?php echo url_for('city/edit?id='.$city->getId()) ?>">Редактировать</a>
&nbsp;
<a href="<?php echo url_for('city/index') ?>">Список</a>
