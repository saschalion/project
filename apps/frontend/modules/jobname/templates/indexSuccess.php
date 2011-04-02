<h1>Специальности</h1>

<table class="table table-double">
  <thead>
    <tr>
      <th>№</th>
      <th>Название</th>
      <th>Опции</th>
  
    </tr>
  </thead>
  <tbody>
    <?php foreach ($jobeet_categorys as $jobeet_category): ?>
    <tr>
      <td><a href="<?php echo url_for('jobname/show?id='.$jobeet_category->getId()) ?>"><?php echo $jobeet_category->getId() ?></a></td>
      <td><?php echo $jobeet_category->getName() ?></td>
      <td class="center-col">

          <ul class="icons">
              <li>
                  <?php echo link_to(
                      '&nbsp',
                      'jobname/edit?id='.$jobeet_category->getId(),
                      array(
                          'class' => 'link'
                          )
                      );
                  ?>
              </li>
              <li>
                  <?php echo link_to(
                  '&nbsp',
                  'jobname/delete?id='.$jobeet_category->getId(),
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
    <?php echo link_to(
                  'Добавить',
                  'jobname/new',
                  array(
                      )
                  )
          ?>
