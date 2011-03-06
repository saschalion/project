<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($passport->getId(), 'passport_edit', $passport) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_passport_number">
  <?php echo $passport->getPassportNumber() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_issuance_passports">
  <?php echo $passport->getIssuancePassports() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_date_issue_passport">
  <?php echo false !== strtotime($passport->getDateIssuePassport()) ? format_date($passport->getDateIssuePassport(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_code_division">
  <?php echo $passport->getCodeDivision() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($passport->getCreatedAt()) ? format_date($passport->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($passport->getUpdatedAt()) ? format_date($passport->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
