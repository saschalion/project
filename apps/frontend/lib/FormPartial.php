<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormPartial
 *
 * @author konstantin
 */
class FormPartial
{
    static protected $inputWidgets = array(
            "sfWidgetFormInput",
            "sfWidgetFormInputCheckbox",
            "sfWidgetFormInputHidden",
            "sfWidgetFormInputPassword",
            "sfWidgetFormInputFile",
            "sfWidgetFormInputFileEditable"
        );
    static protected $choiceWidgets = array(
            "sfWidgetFormChoice",
            "sfWidgetFormPropelChoice",
            "sfWidgetFormDoctrineChoice"
        );

    static public function fieldType(sfFormField $field)
    {
        $currentWidget = $field->getWidget();
        foreach (self::$inputWidgets as $i_w)
        {
            if ($currentWidget instanceof $i_w)
            {
                return 'input';
            }
        }
        foreach (self::$choiceWidgets as $c_w)
        {
            if ($currentWidget instanceof $c_w)
            {
                $expanded = $currentWidget->getOption('expanded');
                $multiple = $currentWidget->getOption('multiple');
                if ($expanded)
                {
                    if ($multiple)
                    {
                        return 'checkbox_list';
                    }
                    else
                    {
                        return 'radio_list';
                    }
                }
                else
                {
                    return 'select';
                }
            }
        }
        if ($currentWidget instanceof sfWidgetFormTextarea)
        {
            return 'textarea';
        }
        if ($currentWidget instanceof sfWidgetFormDateTime)
        {
            return 'datetime';
        }
    }
}
?>
