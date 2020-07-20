<?php
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\ThumbImg;
?>
<?php echo isset($messages) && ($messages != '') ? $messages : ''; ?>

<div id="header">
    <div class="container">
        <div class="logo-web">
            <a href=""><img src="http://localhost/project.vn/khangmaunhi/public/assets/frontend/img/LOGO01.png" alt=""></a>
        </div>
        <div class="top">
            <div class="hot-search">
                <div class="hotline">
                    Hotline: <span>0982.91.55.53</span>
                </div>
                <div class="search">
                    <form action="<?php echo e(URL::route('site.pageStaticsSearch')); ?>" method="GET">
                        <?php echo csrf_field(); ?>

                        <input type="text" name="statics_title" value="" class="form-control">
                        <button type="submit" class="btn btn-primary icon-search"></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="menu">
            <div class="logo">
                <a href="">
                    <img src="http://localhost/project.vn/khangmaunhi/public/assets/frontend/img/LOGO01.png" alt="">
                </a>
            </div>
            <div class="navigation mNavigation">
                           <span class="navigationIcon">
                               <span></span>
                           </span>
                <div class="backdropNav"></div>
                <ul>
                    <li class="search-sh">
                        <div class="hot-search">
                            <div class="hotline">
                                Hotline: <span>0982.91.55.53</span>
                            </div>
                            <div class="search">
                                <form action="" method="GET">
                                    <input type="text" name="" value="" class="form-control">
                                    <button type="submit" class="btn btn-primary icon-search"></button>
                                </form>
                            </div>
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
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div><?php /**PATH E:\wamp64\www\project.vn\thokhangduong\app\Modules/Statics/Views/block/header.blade.php ENDPATH**/ ?>