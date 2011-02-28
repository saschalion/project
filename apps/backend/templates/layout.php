<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php use_stylesheet('smoothness/jquery-ui-1.8.10.custom.css') ?>
    <?php use_javascript('jquery-1.4.4.min.js'); ?>
    <?php use_javascript('jquery-ui-1.8.10.custom.min.js'); ?>
    <?php use_javascript('ui.js'); ?>
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>  
      <?php if ($sf_user->isAuthenticated()): ?>
        <div class="post">
                    
			<ul class="main-ul">

                          <li>
                            <?php echo link_to(
                                    'Сотрудники',
                                    'job/index'
                                    );
                            ?>
                          </li>


                          <li>
                            <?php echo link_to(
                                    'Добавить специальность',
                                    'category/index'
                                    );
                            ?>
                          </li>

                          <li>
                            <?php echo link_to(
                                    'Образование',
                                    'education/index'
                                    );
                            ?>
                          </li>
                           <li>
                            <?php echo link_to(
                                    'Города',
                                    'city/index'
                                    );
                            ?>
                          </li>
                          <li>
                            <?php echo link_to(
                                    'Пользователи',
                                    'sf_guard_user'
                                    );
                            ?>
                          </li>
                          <li>
                            <?php echo link_to(
                                    'Добавить статус',
                                    'status'
                                    );
                            ?>
                          </li>
                          <?php endif; ?>
                          <li>
                            <?php echo link_to(
                                    'Выход',
                                    'sf_guard_signout'
                                    );
                            ?>
                          </li>
                          <li>
                            <?php echo $sf_user->getGuardUser(); ?>
                          </li>

                        </ul>
               
			<div class="clear"></div>
                        <?php echo $sf_content ?>
			

		</div>
            
                  
             
           
      
    
  </body>
</html>
