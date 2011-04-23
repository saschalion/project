  <?php if (!$pager->getNbResults()): ?>
    <p><?php echo __('Нет записей', array(), 'sf_admin') ?></p>
  <?php else: ?>
    <table>
      <thead>
        <tr>
          <th id="sf_admin_list_batch_actions"><input id="sf_admin_list_batch_checkbox" type="checkbox" onclick="checkAll();" /></th>
          <?php include_partial('job/list_th_tabular', array('sort' => $sort)) ?>
          <th class="center-col" id="sf_admin_list_th_actions" class="center-col"><?php echo __('Опции', array(), 'sf_admin') ?></th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th colspan="12">
            <?php if ($pager->haveToPaginate()): ?>
              <?php include_partial('job/pagination', array('pager' => $pager)) ?>
            <?php endif; ?>

            <?php echo format_number_choice('[0] Нет записей|[1] 1 найдено|(1,+Inf] %1% найдено', array('%1%' => $pager->getNbResults()), $pager->getNbResults(), 'sf_admin') ?>
            <?php if ($pager->haveToPaginate()): ?>
              <?php echo __('(страница %%page%%  из %%nb_pages%%)', array('%%page%%' => $pager->getPage(), '%%nb_pages%%' => $pager->getLastPage()), 'sf_admin') ?>
            <?php endif; ?>
          </th>
        </tr>
      </tfoot>
      <tbody>
        <?php foreach ($pager->getResults() as $i => $jobeet_job): $odd = fmod(++$i, 2) ? 'odd' : 'even' ?>
          <tr class="sf_admin_row <?php echo $odd ?>">
            <?php include_partial('job/list_td_batch_actions', array('jobeet_job' => $jobeet_job, 'helper' => $helper)) ?>
            <?php include_partial('job/list_td_tabular', array('jobeet_job' => $jobeet_job)) ?>

            <?php
            include_partial(
              'job/list_td_actions',
              array(
                'helper' => $helper,
                'jobeet_job' => $jobeet_job
                  )
            );
            ?>
          
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
   
  <?php endif; ?>

<script type="text/javascript">
/* <![CDATA[ */
function checkAll()
{
  var boxes = document.getElementsByTagName('input'); for(var index = 0; index < boxes.length; index++) { box = boxes[index]; if (box.type == 'checkbox' && box.className == 'sf_admin_batch_checkbox') box.checked = document.getElementById('sf_admin_list_batch_checkbox').checked } return true;
}
/* ]]> */
</script>


