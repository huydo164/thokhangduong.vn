<?php

use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\Utility;
use App\Library\PHPDev\ThumbImg;
?>

<?php $__env->startSection('header'); ?>
<?php echo $__env->make('Statics::block.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php echo $__env->make('Statics::block.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="banner">
        <?php if(isset($dataBannerHead) && !empty($dataBannerHead)): ?>
            <?php $__currentLoopData = $dataBannerHead; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_BANNER, $item['banner_id'], $item['banner_image'], 2000, 0, '', true, true, false)); ?>" alt="">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
    <div class="container">
        <div class="pots">
            <p class="title">
               <?php echo $gioithieu->info_title; ?>

            </p>
            <p class="strong">
               <?php echo $gioithieu->info_intro; ?>

            </p>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $gioithieu->info_id, $gioithieu->info_img, 800, 0, '', true, true)); ?>" alt="">
                </div>
                <div class="col-md-8">
                    <p class="artice"><?php echo strip_tags($gioithieu->info_content); ?></p>
                </div>

            </div>
        </div>
        <div class="pots">
            <p class="title">
                <?php echo $gioithieu_1->info_title; ?>

            </p>
            <div class="row">
                <div class="col-md-8">
                    <p class="artice"> <?php echo strip_tags($gioithieu_1->info_content); ?></p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $gioithieu_1->info_id, $gioithieu_1->info_img, 800, 0, '', true, true)); ?>" alt="">
                </div>


            </div>
        </div>
        <div class="pots">
            <p class="title">
                <?php echo $gioithieu_2->info_title; ?>

            </p>
            <div class="row">
                <div class="col-md-12">
                    <p class="artice1"><?php echo strip_tags($gioithieu_2->info_content); ?></p>

                </div>
            </div>
        </div>

    </div>
    <div class="banner-1">
        <?php if(isset($dataBannerContent) && !empty($dataBannerContent)): ?>
            <?php $__currentLoopData = $dataBannerContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_BANNER, $item['banner_id'], $item['banner_image'], 2000,0, '', true, true, false)); ?>" width="100%" alt="">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
    <div class="container">
        <h3 class="title-index"><?php echo isset($text_tt_1) ? strip_tags($text_tt_1) : ''; ?></h3>
        <div class="cate cate-bottom">
            <div class="row">
                <?php if(isset($data_cat_3) && !empty($data_cat_3)): ?>
                    <?php $__currentLoopData = $data_cat_3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 etc">
                            <a href="<?php echo e(FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)); ?>">
                                <?php if($key == 0): ?>
                                    <div class="pic">
                                        <?php if($item->statics_image != ''): ?>
                                            <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800, 0 , '', true, true)); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="info">
                                        <p class="title"><?php echo e(strip_tags($item->statics_title)); ?></p>
                                        <p class="date"><?php echo e(date('d/m/Y', $item->statics_created)); ?></p>
                                        <p class="article"><?php echo $item->statics_intro; ?></p>
                                    </div>
                                <?php endif; ?>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <div class="col-md-6 small">
                    <ul>
                        <?php if(isset($data_cat_3) && !empty($data_cat_3)): ?>
                            <?php $__currentLoopData = $data_cat_3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($key > 0 && $key <5): ?>
                                    <a href="<?php echo e(FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)); ?>">
                                        <li>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <?php if($item->statics_image != ''): ?>
                                                        <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800,0, '', true, true)); ?>" alt="">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-md-8">
                                                    <p class="title-right"><?php echo e($item->statics_title); ?></p>
                                                    <p class="date"><?php echo e(date('d/m/Y', $item->statics_created)); ?></p>
                                                    <p class="article"><?php echo $item->statics_intro; ?></p>
                                                </div>
                                            </div>
                                        </li>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <?php if(isset($data_cat_3) && !empty($data_cat_3)): ?>
                    <?php $__currentLoopData = $data_cat_3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key > 5): ?>
                            <div class="col-md-6 mgb20">
                                <a href="<?php echo e(FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)); ?>">
                                    <div class="pic">
                                        <?php if($item->statics_image != ''): ?>
                                            <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800,0, '', true, true)); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="info">
                                        <p class="title"><?php echo e(strip_tags($item->statics_title)); ?></p>
                                        <p class="date"><?php echo e(date('d/m/Y', $item->statics_created)); ?></p>
                                        <p class="article"><?php echo $item->statics_intro; ?></p>
                                    </div>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>

        <h3 class="title-index"><?php echo isset($text_ba) ? strip_tags($text_ba) : ''; ?></h3>
        <div class="cate">
            <div class="row">
                <?php if(isset($data_cat_4) && !empty($data_cat_4)): ?>
                    <?php $__currentLoopData = $data_cat_4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 atc">
                            <a href="<?php echo e(FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)); ?>">
                                <div class="pic">
                                    <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800,0, '', true, true)); ?>" alt="">
                                </div>
                                <div class="info">
                                    <p class="title"><?php echo e(strip_tags($item->statics_title)); ?></p>
                                    <p class="date"><?php echo e(date('d/m/Y', $item->statics_created)); ?></p>
                                    <p class="article"><?php echo $item->statics_intro; ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('Statics::layout.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp64\www\project.vn\thokhangduong\app\Modules/Statics/Views/content/index.blade.php ENDPATH**/ ?>