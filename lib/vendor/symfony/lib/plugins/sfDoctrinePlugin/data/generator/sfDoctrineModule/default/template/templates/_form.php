[?php use_stylesheets_for_form($form) ?]
[?php use_javascripts_for_form($form) ?]

<?php $form = $this->getFormObject() ?>
<?php if (isset($this->params['route_prefix']) && $this->params['route_prefix']): ?>
[?php echo form_tag_for($form, '@<?php echo $this->params['route_prefix'] ?>') ?]
<?php else: ?>
<form action="[?php echo url_for('<?php echo $this->getModuleName() ?>/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?<?php echo $this->getPrimaryKeyUrlParams('$form->getObject()', true) ?> : '')) ?]" method="post" [?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?]>
[?php if (!$form->getObject()->isNew()): ?]
<input type="hidden" name="sf_method" value="put" />
[?php endif; ?]
<?php endif;?>
<ul class="form-ul">
    <li>
<?php if (!isset($this->params['non_verbose_templates']) || !$this->params['non_verbose_templates']): ?>
          [?php echo $form->renderHiddenFields(false) ?]
<?php endif; ?>
<?php if (isset($this->params['route_prefix']) && $this->params['route_prefix']): ?>
          &nbsp;<a href="[?php echo url_for('<?php echo $this->getUrlForAction('list') ?>') ?]">Back to list</a>
<?php else: ?>
          &nbsp;<a href="[?php echo url_for('<?php echo $this->getModuleName() ?>/index') ?]">Back to list</a>
<?php endif; ?>
          [?php if (!$form->getObject()->isNew()): ?]
<?php if (isset($this->params['route_prefix']) && $this->params['route_prefix']): ?>
            &nbsp;[?php echo link_to('Delete', '<?php echo $this->getUrlForAction('delete') ?>', $form->getObject(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?]
<?php else: ?>
            &nbsp;[?php echo link_to('Delete', '<?php echo $this->getModuleName() ?>/delete?<?php echo $this->getPrimaryKeyUrlParams('$form->getObject()', true) ?>, array('method' => 'delete', 'confirm' => 'Are you sure?')) ?]
<?php endif; ?>
          [?php endif; ?]
          <input type="submit" value="Save" />
    <li>
<?php if (isset($this->params['non_verbose_templates']) && $this->params['non_verbose_templates']): ?>
      [?php echo $form ?]
<?php else: ?>
      [?php echo $form->renderGlobalErrors() ?]
<?php foreach ($form as $name => $field): if ($field->isHidden()) continue ?>
    <li>
       [?php echo $form['<?php echo $name ?>']->renderLabel() ?]
        
          [?php echo $form['<?php echo $name ?>']->renderError() ?]
          [?php echo $form['<?php echo $name ?>'] ?]
    <li>
<?php endforeach; ?>
<?php endif; ?>
</ul>
</form>
