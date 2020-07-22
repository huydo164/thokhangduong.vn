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
        <div class="container">
            <div class="page-neo">
                <ul class="breadcrumb">
                    <li>
                        <a href="<?php echo e(FuncLib::getBaseURL()); ?>">Trang chủ</a>
                    </li>
                    <?php if(isset($dataCate->category_id)): ?>
                        <li class="active">
                            <?php echo e($dataCate->category_title); ?>

                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="page-sick">
                <?php if($data->count() > 1): ?>
                    <h3 class="title-sick">
                        <?php echo isset($text_ba) ? strip_tags($text_ba) : ''; ?>

                    </h3>
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="row">
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($key <= 1): ?>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <a href="<?php echo e(FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)); ?>">
                                                <div class="post-img">
                                                    <?php if($item->statics_image != ''): ?>
                                                        <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800, 0, '', true, true)); ?>" alt="">
                                                    <?php endif; ?>
                                                </div>
                                                <h4 class="post-title">
                                                    <?php echo e(strip_tags($item->statics_title)); ?>

                                                </h4>
                                                <div class="date"><?php echo e(date('d/m/Y', $item->statics_created)); ?></div>
                                                <div class="post-intro">
                                                    <?php echo $item->statics_intro; ?>

                                                </div>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <hr />
                                    </div>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($key > 1): ?>
                                            <a href="<?php echo e(FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)); ?>">
                                                <div class="col-lg-6 col-md-6 col-sm-6 mgb20">
                                                    <div class="post-img">
                                                        <?php if($item->statics_image != ''): ?>
                                                            <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800, 0, '', true, true)); ?>" alt="">
                                                        <?php endif; ?>
                                                    </div>
                                                    <h4 class="post-title">
                                                        <?php echo e(strip_tags($item->statics_title)); ?>

                                                    </h4>
                                                    <div class="date"><?php echo e(date('d/m/Y', $item->statics_created)); ?></div>
                                                    <div class="post-intro">
                                                        <?php echo $item->statics_intro; ?>

                                                    </div>
                                                </div>
                                            </a>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <!------------col-lg-8-------------->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <?php echo $__env->make('Statics::block.right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Statics::layout.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp64\www\project.vn\thokhangduong\app\Modules/Statics/Views/content/pageSick.blade.php ENDPATH**/ ?>