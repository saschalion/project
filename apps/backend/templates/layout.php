<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <?php use_stylesheet('reset.css', 'last'); ?>
    <?php use_stylesheet('style.css', 'last'); ?>
  </head>
  <body>
      <div class="wrap">
            <div class="wrap-l">
                <div class="wrap-r">
                    <div class="wrapper">
                    <?php if ($sf_user->isAuthenticated()): ?>
                        <?php include_partial('global/menu', array()); ?>
                    <?php endif ?>
                    <div class="content">
                         <?php echo $sf_content ?>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </body>
</html>
