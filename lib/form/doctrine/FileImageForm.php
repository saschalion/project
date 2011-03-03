<?php

/**
 * FileImage form.
 *
 * @package    SkyNet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FileImageForm extends BaseFileImageForm {

    protected $validatedFileClass;
    protected $selectorDirectory = false;
    protected $uploadPath;

    public function configure() {
        unset(
            $this['server_name'],
            $this['md5'],
            $this['file_size'],
            $this['original_name'],
            $this['server_path'],
            $this['thumbnail_url'],
            $this['thumbnail_name']
        );
        
        $directoryName = $this->getOption('directoryName');
        if (empty($directoryName)) {
            $directoryName = Doctrine::getTable($this->getModelName())->getTemplate('FileBehaviour')->getDefaultPath(); //default directory for current model
        }
        
        $uploadPath = sfConfig::get('sf_web_dir') . $directoryName;
        if (!file_exists($uploadPath)) {
            FileDirectoryCreator::createDirectoryIfNotExist($uploadPath);
        }

        if ($this->isNew()) {
            $fileScr = $directoryName;
        } else {
            $fileScr = $this->getObject()->getServerPath();
        }
        $fileScr .= DIRECTORY_SEPARATOR . $this->getObject()->getFile();

        // TODO:: Thinks about this code. Need or not web\upload_files\video
        //$selectorDirectory = Doctrine::getTable($this->getModelName())->getTemplate('FileBehaviour')->getSelectorDirectory();
        $selectorDirectory=false;
        if ($selectorDirectory) {
            $required = false;
            $fileClass = 'file';
        } else {
            $required = $this->isNew();
            $fileClass = 'uniqueFile';
        }

        $this->widgetSchema['file'] = new sfWidgetFormInputFileEditable(
            array(
                'label'     => 'Upload file',
                'file_src'  => $fileScr,
                'is_image'  => $this->options['is_image'],
                'edit_mode' => !$this->isNew(),
                'with_delete' => false,
            ),
            array(
                'class' => $fileClass
            )
        );

        if (Doctrine::getTable($this->getModelName())->getTemplate('FileBehaviour')->itNeedsToSaveOriginalName()) {
            $validatedFileClass = 'ValidatedFileWithOriginalName';
        } else {
            $validatedFileClass = 'CrossValidatedFile';
        }

        $this->validatorSchema['file'] = new sfValidatorFile(
            array(
                'path' => $uploadPath,
                'max_size' => Doctrine::getTable($this->getModelName())->getTemplate('FileBehaviour')->getMaxSize(),
                'required' => $required,
                'mime_types' => Doctrine::getTable($this->getModelName())->getTemplate('FileBehaviour')->getMimeTypes(),
                'validated_file_class' => $validatedFileClass
            )
        );

        if ($selectorDirectory) { // it needs to add possibility to select file from server, not to upload it

            $choices = array('' => '') + $this->getObject()->getSelectorFileList($this->getModelName());
            $this->setWidget(
                'selected_file',
                new sfWidgetFormChoice(
                    array(
                        'label' => 'Select file',
                        'choices' => $choices,
                    ),
                    array(
                        'class' => 'selected_file'
                    )
                )
            );

            $this->setValidator(
                'selected_file',
                new sfValidatorChoice(
                    array(
                        'choices' => array_keys($choices),
                        'required' => false
                    )
                )
            );

            if($this->isNew()) {
                $this->validatorSchema->setPostValidator(
                    new sfValidatorOr(
                        array(
                            new sfValidatorSchemaFilter(
                                'selected_file',
                                new sfValidatorChoice(
                                    array(
                                        'choices' => array_keys($choices),
                                        'required' => true
                                    ),
                                    array(
                                        'required' => 'You must select or upload a file'
                                    )
                                )
                            ),
                            new sfValidatorCallback(
                                array(
                                    'callback' => array(
                                        $this,
                                        'containsUploadedFile'
                                    )
                                )
                            ),
                        )
                    )
                );
            }

        }

        $this->selectorDirectory = $selectorDirectory;
        $this->validatedFileClass = $validatedFileClass;
        $this->uploadPath = $uploadPath;
    }

    public function containsUploadedFile($validator, $values) {
        if (!$values['file'] instanceof sfValidatedFile) {
            $error = new sfValidatorError($validator, 'You must select or upload a file');
            throw new sfValidatorErrorSchema($validator, array('file' => $error));
        }
        return $values;
    }

    public function updateObject($values = null) {

        if (isset($values['selected_file'])) {
            $validatedFileClass = $this->getValidatedFileClassName();
            $file = new $validatedFileClass(sfConfig::get('sf_web_dir'), '', sfConfig::get('sf_web_dir'), 0, sfConfig::get('sf_web_dir'));
            //$file = $this->getSelectedFile($values['selected_file']);
            $values['file'] = $file;
        }

        $object = parent::UpdateObject($values);
    }

    public function getSelectedFile($pathToOriginalFile) {

        $originalName = substr($pathToOriginalFile, strlen(sfConfig::get('sf_web_dir') . $this->getDirectoryForSelector() . DIRECTORY_SEPARATOR));
        $type = '';
        $tempName = $pathToOriginalFile;
        $size = filesize($pathToOriginalFile);
        $path = $this->getUploadPath();
        
        $validatedFileClass = $this->getValidatedFileClassName();
        $file = new $validatedFileClass($originalName, $type, $tempName, $size, $path);
        return $file;
    }

    protected function getDirectoryForSelector() {
        return $this->selectorDirectory;
    }

    protected function getUploadPath() {
        return $this->uploadPath;
    }

    protected function getValidatedFileClassName() {
        return $this->validatedFileClass;
    }
}
