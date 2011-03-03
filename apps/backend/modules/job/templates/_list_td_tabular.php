<td class="sf_admin_text sf_admin_list_td_tab_id">
  <?php echo link_to($jobeet_job->getTabId(), 'jobeet_job_edit', $jobeet_job) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_jobeet_category">
  <?php echo $jobeet_job->getJobeetCategory() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_first_name">
  <?php echo $jobeet_job->getFirstName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_last_name">
  <?php echo $jobeet_job->getLastName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_education">
  <?php echo $jobeet_job->getCity() ?> 
</td>
<td class="sf_admin_text sf_admin_list_td_education" align="center">
  <?php if ($jobeet_job->getStatus()== 'Работает'): ?>
    <?php echo '<img src="/images/complete.jpg" alt="Работает" style="display: block;">' ?>
  <?php endif; ?>
  <?php if ($jobeet_job->getStatus()== 'Уволен'): ?>
    <?php echo '<img src="/images/no_complete.jpg" alt="Уволен" style="display: block;">' ?>
  <?php endif; ?>
  <?php if ($jobeet_job->getStatus()== 'В командировке'): ?>
    <?php echo '<img src="/images/command.jpg" alt="В командировке" style="display: block;">' ?>
  <?php endif; ?>
  <?php if ($jobeet_job->getStatus()== 'В отпуске'): ?>
    <?php echo '<img src="/images/leave.jpg" alt="В отпуске" style="display: block;">' ?>
  <?php endif; ?>
  <?php if ($jobeet_job->getStatus()== 'Испытательный срок'): ?>
    <?php echo '<img src="/images/faq.jpg" alt="Испытательный срок" style="display: block;">' ?>
  <?php endif; ?>
</td>
<td class="sf_admin_text sf_admin_list_td_education" align="center">
  <?php if ($jobeet_job->getUser() > '&nbsp;'): ?>
    <?php echo $jobeet_job->getUser()->getFirstName()?>
  <?php endif; ?>
</td>
<td class="sf_admin_text sf_admin_list_td_education created">
    <?php echo $jobeet_job->getCreatedAt()?>
</td>
