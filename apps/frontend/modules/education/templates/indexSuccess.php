<h1>Образование</h1>

<table class="table table-double">
  <thead>
    <tr>
      <th>Название</th>
      <th>Опции</th>
      </tr>
  </thead>
  <tbody>
    <?php foreach ($educations as $education): ?>
    <tr>
      <td><?php echo $education->getName() ?></td>
      <td class="center-col">
          <ul class="icons">
              <li>
                  <?php echo link_to(
                      '&nbsp',
                      'education/edit?id='.$education->getId(),
                      array(
                          'class' => 'link'
                          )
                      );
                  ?>
              </li>              
              <li>
                  <?php echo link_to(
                  '&nbsp',
                  'education/delete?id='.$education->getId(),
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

  <a href="<?php echo url_for('education/new') ?>">Добавить</a>
