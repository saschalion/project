<?php

/**
 * education actions.
 *
 * @package    jobeet
 * @subpackage education
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class educationActions extends sfActions
{
  public function preExecute()
    {
        parent::preExecute();
        $this->getResponse()->addStylesheet('style.css', 'last');
        $this->getResponse()->addStylesheet('table_form.css', 'last');


    }

  public function executeIndex(sfWebRequest $request)
  {
    $this->educations = Doctrine_Core::getTable('Education')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->education = Doctrine_Core::getTable('Education')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->education);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EducationForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EducationForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($education = Doctrine_Core::getTable('Education')->find(array($request->getParameter('id'))), sprintf('Object education does not exist (%s).', $request->getParameter('id')));
    $this->form = new EducationForm($education);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($education = Doctrine_Core::getTable('Education')->find(array($request->getParameter('id'))), sprintf('Object education does not exist (%s).', $request->getParameter('id')));
    $this->form = new EducationForm($education);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($education = Doctrine_Core::getTable('Education')->find(array($request->getParameter('id'))), sprintf('Object education does not exist (%s).', $request->getParameter('id')));
    $education->delete();

    $this->redirect('education/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $education = $form->save();

      $this->redirect('education/show?id='.$education->getId());
    }
  }
}
