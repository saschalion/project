<table class="table table-double">
  <tbody>   
    <tr>
      <th>Табельный номер:</th>
      <td><?php echo $jobeet_job->getTabId() ?></td>
    </tr>
    <tr>
      <th>Образование:</th>
      <td><?php echo $jobeet_job->getEducationId() ?></td>
    </tr>   
    <tr>
      <th>Компания:</th>
      <td><?php echo $jobeet_job->getCompany() ?></td>
    </tr>
    <tr>
      <th>Фотография:</th>
      <td><?php echo $jobeet_job->getLogo() ?></td>
    </tr>   
<tr>
      <th>№ паспорта:</th>
      <td><?php echo $jobeet_job->getPassportNumber() ?></td>
    </tr>
	<tr>
      <th>Имя:</th>
      <td><?php echo $jobeet_job->getFirstName() ?></td>
    </tr>
    <tr>
      <th>Фамилия:</th>
      <td><?php echo $jobeet_job->getLastName() ?></td>
    </tr>
    <tr>
      <th>Отчество:</th>
      <td><?php echo $jobeet_job->getThreeName() ?></td>
    </tr>
    <tr>
      <th>Телефон:</th>
      <td><?php echo $jobeet_job->getPhone() ?></td>
    </tr>
<tr>
      <th>Дата рождения:</th>
      <td><?php echo $jobeet_job->getDataId() ?></td>
    </tr>
    <tr>
      <th>Позиция:</th>
      <td><?php echo $jobeet_job->getPosition() ?></td>
    </tr>   
    <tr>
      <th>О себе:</th>
      <td><?php echo $jobeet_job->getHowToApply() ?></td>
    </tr>   
    <tr>
      <th>Опубликовано:</th>
      <td><?php echo $jobeet_job->getIsPublic() ?></td>
    </tr>    
    <tr>
      <th>Email:</th>
      <td><?php echo $jobeet_job->getEmail() ?></td>
    </tr>    
    <tr>
      <th>Дата создания:</th>
      <td><?php echo $jobeet_job->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Дата изменения:</th>
      <td><?php echo $jobeet_job->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('job/edit?id='.$jobeet_job->getId()) ?>">Редактировать</a>
&nbsp;
<a href="<?php echo url_for('job/index') ?>">Список</a>
