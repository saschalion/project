<td colspan="6">
  <?php echo __('%%tab_id%% - %%jobeet_category%% - %%first_name%% - %%last_name%% - %%data_id%% - %%education%%', array('%%tab_id%%' => $jobeet_job->getTabId(), '%%jobeet_category%%' => link_to($jobeet_job->getJobeetCategory(), 'jobeet_job_edit', $jobeet_job), '%%first_name%%' => $jobeet_job->getFirstName(), '%%last_name%%' => $jobeet_job->getLastName(), '%%data_id%%' => $jobeet_job->getDataId(), '%%education%%' => $jobeet_job->getEducation()), 'messages') ?>
</td>
