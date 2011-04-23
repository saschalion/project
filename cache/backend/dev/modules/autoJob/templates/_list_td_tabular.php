<td class="sf_admin_text sf_admin_list_td_tab_id">
  <?php echo $jobeet_job->getTabId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_jobeet_category">
  <?php echo link_to($jobeet_job->getJobeetCategory(), 'jobeet_job_edit', $jobeet_job) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_first_name">
  <?php echo $jobeet_job->getFirstName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_last_name">
  <?php echo $jobeet_job->getLastName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_data_id">
  <?php echo $jobeet_job->getDataId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_education">
  <?php echo $jobeet_job->getEducation() ?>
</td>
