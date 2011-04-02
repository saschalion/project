<h1>Сотрудники</h1>


<table class="table">
  <thead>
    <tr>
      <th>Таб. №</th>
      <th>Специальность</th>
       <th>Имя</th>
      <th>Фамилия</th>
      <th>Город</th>
      <th>Фотография</th>
      <th>Дата создания</th>
      <th>Образование</th>
      <th>Изменить</th>     
    </tr>
  </thead>
  <tbody>
    <?php foreach ($jobeet_jobs as $jobeet_job): ?>
    <tr>
      <td><?php echo $jobeet_job->getTabId() ?></td>
      <td><?php  echo link_to($jobeet_job->getJobeetCategory(), 'job/show?id='.$jobeet_job->getId());?>
</td>
         <td><?php echo $jobeet_job->getFirstName() ?></td>
      <td><?php echo $jobeet_job->getLastName() ?></td>
      <td><?php echo $jobeet_job->getCity() ?></td>
      <td><img src="/uploads/jobs/<?php echo $jobeet_job->getLogo() ?>" alt="<?php echo $jobeet_job->getJobeetCategory().' - '.$jobeet_job->getLastName().'  '.$jobeet_job->getFirstName() ?>" /></td>
      <td><?php echo $jobeet_job->getCreatedAt() ?></td>
      <td><?php echo $jobeet_job->getEducation() ?></td>
      <td class="center-col">
          <ul class="icons">
              <li>
                  <?php echo link_to(
                      '&nbsp',
                      'job/edit',
                      array(
                          'class' => 'link'
                          )
                      );
                  ?>
              </li>
              <li>
                 <?php echo link_to(
                  '&nbsp',
                  'job/show?id='.$jobeet_job->getId(),
                    array(
                      'class' => 'show'
                      )
                  );
                 ?>
              </li>
              <li>
                  <?php echo link_to(
                  '&nbsp',
                  'job/delete?id='.$jobeet_job->getId(),
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

<?php echo link_to('Добавить вакансию', 'job/new'); ?>
