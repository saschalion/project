<?php $module = sfContext::getInstance()->getModuleName(); ?>
<div class="header">
    <h1><?php echo link_to('АРМ "Отдел кадров', 'job/index'); ?></h1>
    <div class="menu">
        <div class="menu-l">
            <div class="menu-r">
                <div class="bg-l">
                    <div class="bg-r">
                        <ul class="menu-ul">
                            <li class="work-li<?php
                            echo ($module == 'job' ? ' selected' : ''); ?>">
                                <?php echo link_to(
                                    '<span><strong>Сотрудники</strong></span>',
                                    'job/index'
                                );
                                ?>
                            </li>
                            <?php if ($sf_user->hasCredential('ADMIN')): ?>
                            <li class="state-li<?php
                            echo ($module == 'city' ? ' selected' : ''); ?>">
                                <?php echo link_to(
                                    '<span><strong>Города</strong></span>',
                                    'city/index'
                                );
                                ?>
                            </li>
                            <li class="education-li<?php
                            echo ($module == 'education' ? ' selected' : ''); ?>">
                                <?php echo link_to(
                                    '<span><strong>Образование</strong></span>',
                                    'education/index'
                                );
                                ?>
                            </li>
                            <li class="category-li<?php
                            echo ($module == 'category' ? ' selected' : ''); ?>">
                                <?php echo link_to(
                                    '<span><strong>Должность</strong></span>',
                                    'category/index'
                                );
                                ?>
                            </li>                            
                            <li class="status-li<?php
                            echo ($module == 'status' ? ' selected' : ''); ?>">
                                <?php echo link_to(
                                    '<span><strong>Статус</strong></span>',
                                    'status'
                                );
                                ?>
                            </li>                            
                            <li class="users-li<?php
                            echo ($module == 'sfGuardUser' ? ' selected' : ''); ?>">
                                <?php echo link_to(
                                    '<span><strong>Пользователи</strong></span>',
                                    'sf_guard_user'
                                );
                                ?>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <ul class="logout-ul">
        <li>
            <?php echo $sf_user->getGuardUser()->getUsername(); ?>
        </li>
        <li class="logout-li">
            <?php echo link_to(
                'Выход',
                'sf_guard_signout'
                );
            ?>
        </li>
    </ul>
</div>

