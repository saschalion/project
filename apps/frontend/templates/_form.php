<?php
    //Set default values
    $begin_action_url = url_for($sf_params->get('module') . '/');
    if (empty($action_url)):
        $action_url = $begin_action_url
            . ($form->getObject()->isNew() ? 'create' : 'update?id='.$form->getObject()->getId());
    endif;

    if (empty($submit_name)):
        $submit_name = "Save";
    endif;

    if (empty($method_name)):
        $method_name = "post";
    endif;

    if (empty($cancel_attr)):
        $cancel_attr = array();
    else:
        $cancel_attr_array = array();
        foreach($cancel_attr as $name => $value):
            $cancel_attr_array[$name] = $value;
        endforeach;
        $cancel_attr = $cancel_attr_array;
    endif;
?>

<form
    class="form"
    action="<?php echo $action_url ?>"
    method="<?php echo $method_name ?>"
    <?php
        if ($form->isMultipart()):
            echo 'enctype="multipart/form-data"';
        endif;
    ?>
>
    <?php if ($form->hasGlobalErrors()):?>
        <div class="flash">
            <div class="message error">
                <ul>
                    <?php
                        foreach ($form->getGlobalErrors() as $name => $error):
                            $g_error_text = !empty($name) ? "$name: $error" : $error;
                    ?>
                        <li> <?php echo $g_error_text ?> </li>;
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endif;?>

    <?php foreach ($form as $field):?>
        <?php if(!$field->isHidden()): ?>
            <?php $field_type = FormPartial::fieldType($field); ?>
            <?php if($field_type == 'input'): ?>
                <?php if ($field->getWidget()->getOption('type') == 'text'): ?>
                    <div class="input text">
                        <?php echo $field->renderLabel(null); ?>
                        <?php echo $field->render();  ?>
                        <?php if ($field->hasError()): ?>
                            <div class="error">
                                <?php echo $field->renderError(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php elseif ($field->getWidget()->getOption('type') == 'checkbox'):?>
                    <div class="input checkbox">
                        <?php echo $field->renderLabel(null,array('class'=>'label')); ?>
                        <?php echo $field->render();  ?>
                        <?php if ($field->hasError()):?>
                            <div class="error">
                                <?php echo $field->renderError(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php elseif ($field->getWidget()->getOption('type') == 'password'):?>
                    <div class="input password">
                        <?php echo $field->renderLabel(null,array('class'=>'label')); ?>
                        <?php echo $field->render();  ?>
                        <?php if ($field->hasError()):?>
                            <div class="error">
                                <?php echo $field->renderError(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php elseif ($field->getWidget()->getOption('type') == 'image'):?>
                    <div class="input image">
                        <?php echo $field->renderLabel(null,array('class'=>'label')); ?>
                        <?php echo $field->render();  ?>
                        <?php if ($field->hasError()):?>
                            <div class="error">
                                <?php echo $field->renderError(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php elseif ($field->getWidget()->getOption('type') == 'file'):?>
                     <div class="input file">
                        <?php echo $field->renderLabel(null,array('class'=>'label')); ?>
                        <?php echo $field->render();  ?>
                        <?php if ($field->hasError()):?>
                            <div class="error">
                                <?php echo $field->renderError(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php elseif ($field_type == 'select'): ?>
                 <div class="input select">
                    <?php echo $field->renderLabel(null,array('class'=>'label')); ?>
                    <?php echo $field->render();  ?>
                    <?php if ($field->hasError()):?>
                        <div class="error">
                            <?php echo $field->renderError(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php elseif ($field_type == 'textarea'): ?>
                 <div class="input textarea">
                    <?php echo $field->renderLabel(null,array('class'=>'label')); ?>
                    <?php echo $field->render();  ?>
                    <?php if ($field->hasError()):?>
                        <div class="error">
                            <?php echo $field->renderError(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php elseif ($field_type == 'radio_list'): ?>
                <div class="fieldset radio_list">
                    <?php echo $field->renderLabel(null,array('class'=>'label')); ?>
                    <?php echo $field->render();  ?>
                    <?php if ($field->hasError()):?>
                        <div class="error">
                            <?php echo $field->renderError(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php elseif ($field_type == 'checkbox_list'): ?>
                <div class="fieldset checkbox_list">
                    <?php echo $field->renderLabel(null,array('class'=>'label')); ?>
                    <?php echo $field->render();  ?>
                    <?php if ($field->hasError()):?>
                        <div class="error">
                            <?php echo $field->renderError(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php elseif ($field_type == 'datetime'): ?>
                 <div class="input datetime">
                    <?php echo $field->renderLabel(null,array('class'=>'label')); ?>
                    <?php echo $field->render();  ?>
                    <?php if ($field->hasError()):?>
                        <div class="error">
                            <?php echo $field->renderError(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php else: ?>
                <div class="group">
                   <?php echo $field->renderLabel(null,array('class'=>'label')); ?>
                   <?php echo $field->render(array('class'=>'text_field')); ?>
                   <?php if ($field->hasError()): ?>
                       <div class="error">
                           <?php echo $field->renderError(); ?>
                       </div>
                   <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endif;?>
    <?php endforeach;?>
    <div class="input hidden">
        <?php echo $form->renderHiddenFields() ?>
    </div>
    <div class="input button">
        <input type="submit" value="<?php echo $submit_name ?>" class="button"/> &nbsp;
        <?php
            if (!empty($deleteURL)):
                echo link_to('Delete', $deleteURL, array('method' => 'delete', 'confirm' => 'Are you sure?'));
            endif;
        ?>
        <?php if (!empty($backURL)): ?>
           &nbsp; or &nbsp; 
           <?php echo link_to('Cancel', $backURL, $cancel_attr); ?>
        <?php endif; ?>
    </div>
</form>
