<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
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
            </div>
    <?php endif ?>
      <div class="clear"></div>
    <?php echo $sf_content ?>
    
  </body>
</html>
