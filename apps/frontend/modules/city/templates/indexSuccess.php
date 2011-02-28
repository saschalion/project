<h1>Города</h1>

<table class="table table-double">
  <thead>
    <tr>
      <th>Название</th>
      <th>Опции</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($citys as $city): ?>
    <tr>
      <td><?php echo $city->getName() ?></td>
      <td class="center-col">

        <ul class="icons">
              <li>
                  <?php echo link_to(
                      '&nbsp',
                      'city/edit?id='.$city->getId(),
                      array(
                          'class' => 'link'
                          )
                      );
                  ?>
              </li>
              <li>
                  <?php echo link_to(
                  '&nbsp',
                  'city/delete?id='.$city->getId(),
                  array(
                      'method' => 'delete',
                      'confirm' =>
                      'Удалить запись?',
                      'class' => 'delete'
                      )
                  );
                  ?>
              </li>
          </ul>

      </td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('city/new') ?>">Добавить</a>
