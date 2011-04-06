<?php

require_once dirname(__FILE__).'/../lib/jobGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/jobGeneratorHelper.class.php';

/**
 * job actions.
 *
 * @package    jobeet
 * @subpackage job
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class jobActions extends autoJobActions
{
    public function preExecute()
        {
            parent::preExecute();
            $this->getResponse()->addJavascript('/js/form.js', 'last');
            $this->getResponse()->addJavascript('/js/jquery-1.4.4.min.js', 'first');
        }


public function executeIndex(sfWebRequest $request)
    {
    // sorting
    if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort')))
    {
      $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
    }

    // pager
    if ($request->getParameter('page'))
    {
      $this->setPage($request->getParameter('page'));
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();

    $this->getResponse()->addStylesheet('style.css', 'last');
    $this->getResponse()->addStylesheet('reset.css', 'last');
    $this->getResponse()->addStylesheet('table_form.css', 'last');
    $this->getResponse()->addStylesheet('form_general_back.css', 'last');
    $this->getResponse()->addStylesheet('form_general.css', 'last');
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->jobeet_job = $this->form->getObject();
    $this->getResponse()->addStylesheet('style.css', 'last');
    $this->getResponse()->addStylesheet('reset.css', 'last');
    $this->getResponse()->addStylesheet('table_form.css', 'last');
    $this->getResponse()->addStylesheet('form_general_back.css', 'last');
    $this->getResponse()->addStylesheet('form_general.css', 'last');
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->jobeet_job = $this->form->getObject();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->jobeet_job = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->jobeet_job);
    $this->getResponse()->addStylesheet('style.css', 'last');
    $this->getResponse()->addStylesheet('reset.css', 'last');
    $this->getResponse()->addStylesheet('table_form.css', 'last');
    $this->getResponse()->addStylesheet('form_general_back.css', 'last');
    $this->getResponse()->addStylesheet('form_general.css', 'last');
  }


    public function executeUpdate(sfWebRequest $request)
        {
            $this->jobeet_job = $this->getRoute()->getObject();
            $this->form = $this->configuration->getForm($this->jobeet_job);

            $this->processForm($request, $this->form);
            $this->getResponse()->addStylesheet('style.css', 'last');
            $this->getResponse()->addStylesheet('reset.css', 'last');
            $this->getResponse()->addStylesheet('table_form.css', 'last');
            $this->getResponse()->addStylesheet('form_general_back.css', 'last');
            $this->getResponse()->addStylesheet('form_general.css', 'last');
            $this->setTemplate('edit');
        }
          public function executeShow(sfWebRequest $request)
  {
    $this->jobeet_job = Doctrine_Core::getTable('JobeetJob')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->jobeet_job);
    $this->setLayout('layout_not');
    $this->getResponse()->addStylesheet('print.css', 'last', array('media' => 'print'));
    $this->getResponse()->addStylesheet('show.css', 'last');
  }


    protected function processForm(sfWebRequest $request, sfForm $form)
        {
//        $objectparams = 'sf_guard_user_id';
//        $objectparams['sf_guard_user_id'] = $this->getUser()->getUsername();
//        $form->bind($objectparams, $request->getFiles($form->getName()));
            $this->getResponse()->addStylesheet('style.css', 'last');
            $this->getResponse()->addStylesheet('reset.css', 'last');
            $this->getResponse()->addStylesheet('table_form.css', 'last');
            $this->getResponse()->addStylesheet('form_general_back.css', 'last');
            $this->getResponse()->addStylesheet('form_general.css', 'last');

        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid())
        {
          $notice = $form->getObject()->isNew() ? 'Запись успешно создана!' : 'Запись успешно обновлена!';

          try {
            $jobeet_job = $form->save();
          } catch (Doctrine_Validator_Exception $e) {

            $errorStack = $form->getObject()->getErrorStack();

            $message = get_class($form->getObject()) . ' has ' . count($errorStack) . " field" . (count($errorStack) > 1 ?  's' : null) . " with validation errors: ";
            foreach ($errorStack as $field => $errors) {
                $message .= "$field (" . implode(", ", $errors) . "), ";
            }
            $message = trim($message, ', ');

            $this->getUser()->setFlash('error', $message);
            return sfView::SUCCESS;
          }

          $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $jobeet_job)));

          if ($request->hasParameter('_save_and_add'))
          {
            $this->getUser()->setFlash('notice', $notice.' Вы можете добавить еще одну ниже.');

            $this->redirect('@jobeet_job_new');
          }
          else
          {
            $this->getUser()->setFlash('notice', $notice);

            $this->redirect(array('sf_route' => 'jobeet_job', 'sf_subject' => $jobeet_job));
          }
        }
        else
        {
          $this->getUser()->setFlash('error', 'Не заполнено одно или несколько полей!', false);
        }
      }
}
