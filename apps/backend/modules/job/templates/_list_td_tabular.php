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
  <?php if ($jobeet_job->getStatus()== 'Работает'): ?>
    <?php echo '<img src="/images/complete.jpg" alt="Работает" style="display: block;">' ?>
  <?php endif; ?>
  <?php if ($jobeet_job->getStatus()== 'Уволен'): ?>
    <?php echo '<img src="/images/no_complete.jpg" alt="Уволен" style="display: block;">' ?>
  <?php endif; ?>
  <?php if ($jobeet_job->getStatus()== 'В командировке'): ?>
    <?php echo '<img src="/images/users.png" alt="В командировке" style="display: block;">' ?>
  <?php endif; ?>
  <?php if ($jobeet_job->getStatus()== 'В отпуске'): ?>
    <?php echo '<img src="/images/leave.jpg" alt="В отпуске" style="display: block;">' ?>
  <?php endif; ?>
  <?php if ($jobeet_job->getStatus()== 'Испытательный срок'): ?>
    <?php echo '<img src="/images/faq.jpg" alt="Испытательный срок" style="display: block;">' ?>
  <?php endif; ?>
</td>
<td class="created">
  <?php if ($jobeet_job->getUser() > '&nbsp;'): ?>
    <?php echo $jobeet_job->getUser()->getFirstName()?>
  <?php endif; ?>
</td>
<td class="price">
    <?php echo $jobeet_job->getPrice()?>
</td>
<td class="created">
    <?php echo $jobeet_job->getCreatedAt()?>
</td>
