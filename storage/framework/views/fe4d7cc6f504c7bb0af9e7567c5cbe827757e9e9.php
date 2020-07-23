<?php

use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\ThumbImg;

?>
<?php echo isset($messages) && ($messages != '') ? $messages : ''; ?>

<div id="header">
    <div class="info">
        <div class="container">
            <div class="rows">
                <div class="col-md-3">
                    <div class="web">
                        <a href="#"><?php echo $textWeb; ?></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="phone">
                        <p class="phone"> <?php echo $textPhone; ?> </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="search search-header">
                        <form action="<?php echo e(URL::route('site.pageStaticsSearch')); ?>" method="GET">
                            <input type="text" placeholder="tìm kiếm..." class="form-control" value="" name="statics_title">
                            <button type="submit" class="icon-search"></button>
                            <?php echo csrf_field(); ?>

                        </form>
                    </div>
                </div>
                <button type="button" class="mbButtonMenu navbar-toggle pull-right">
                    <i class="fa fa-bars fa-2x"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="menuTop">
        <div class="container">
            <ul>
                <li class="search">
                    <div class="search">
                        <form action="<?php echo e(URL::route('site.pageStaticsSearch')); ?>" method="GET">
                            <button type="submit" name="submit" class="icon-search"></button>
                            <input type="text" placeholder="tìm kiếm..." class="form-control" name="statics_title">
                        </form>
                    </div>
                </li>
                <?php if(isset($arrCategory) && !empty($arrCategory)): ?>
                    <?php $__currentLoopData = $arrCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($cat->category_menu == CGlobal::status_show && $cat->category_parent_id == 0): ?>
                            <?php $i=0 ?>
                            <?php $__currentLoopData = $arrCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($sub->category_menu == CGlobal::status_show && $sub->category_parent_id == $cat->category_id): ?>
                                    <?php $i++; ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a <?php if($i > 0): ?> <?php endif; ?> title="<?php echo e($cat->category_title); ?>" href="<?php if($cat->category_link_replace != ''): ?><?php echo e($cat->category_link_replace); ?><?php else: ?><?php echo e(FuncLib::buildLinkCategory($cat->category_id, $cat->category_title)); ?><?php endif; ?>">
                                    <?php echo e($cat->category_title); ?>

                                </a>
                                <?php if($i > 0): ?>
                                    <ul class="menu-sub">
                                        <?php $__currentLoopData = $arrCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($sub->category_menu == CGlobal::status_show && $sub->category_parent_id == $cat->category_id): ?>
                                                <li>
                                                    <a title="<?php echo e($sub->category_title); ?>" href="<?php if($sub->category_link_replace != ''): ?><?php echo e($sub->category_link_replace); ?><?php else: ?><?php echo e(FuncLib::buildLinkCategory($sub->category_id, $sub->category_title)); ?><?php endif; ?>">
                                                        <?php echo e(stripcslashes($sub->category_title)); ?>

                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </ul>
            <button type="button" class="mbButtonMenuL navbar-toggle pull-right">
                <span class="fa-4x">×</span>
            </button>
        </div>

    </div>
</div>
<?php /**PATH E:\wamp64\www\project.vn\thokhangduong\app\Modules/Statics/Views/block/header.blade.php ENDPATH**/ ?>