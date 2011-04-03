<td>
  <?php echo link_to($jobeet_job->getTabId(), 'jobeet_job_edit', $jobeet_job) ?>
</td>
<td>
  <?php echo $jobeet_job->getJobeetCategory() ?>
</td>
<td>
  <?php echo $jobeet_job->getLastName() ?>
</td>
<td>
  <?php echo $jobeet_job->getFirstName() ?>
</td>
<td>
  <?php echo $jobeet_job->getCity() ?> 
</td>
<td align="center">
  <?php switch ($jobeet_job->getStatus()) {
      case 'Работает':
      echo '<img src="/images/complete.jpg" alt="Работает" style="display: block;">';
          break;
      case 'Уволен':
      echo '<img src="/images/no_complete.jpg" alt="Уволен" style="display: block;">';
          break;
      case 'В командировке':
      echo '<img src="/images/users.png" alt="В командировке" style="display: block;">';
          break;
      case 'В отпуске':
      echo '<img src="/images/leave.jpg" alt="В отпуске" style="display: block;">';
          break;
      case 'Испытательный срок':
      echo '<img src="/images/faq.jpg" alt="Испытательный срок" style="display: block;">';
          break;
    }
  ?>
</td>
<td class="created">
    <?php echo $jobeet_job->getUser()?>
</td>
<td class="price">
    <?php if($jobeet_job->getPrice()): ?>
        <?php echo $jobeet_job->getPrice()?>
        <?php else: ?>
        Нет ставки
    <? endif; ?>
</td>
<td class="created"> 
    <?php echo format_date($jobeet_job->getCreatedAt(), 'dd.MM.yyyy') ?>
</td>
