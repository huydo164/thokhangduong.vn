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
            <div class="page-detail">
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
                <h4 class="title-detail"><?php echo e($data->statics_title); ?></h4>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="show-detail">
                            <div class="cont-detail">
                                <?php echo stripcslashes($data->statics_content); ?>

                            </div>
                        </div>
                        <div class="more-post">
                            <h4><?php echo isset($text_bvk) ? strip_tags($text_bvk) : ''; ?></h4>
                            <div class="row">
                                <?php $__currentLoopData = $dataSame; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-6">
                                        <div class="same-post">
                                            <a href="<?php echo e(FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)); ?>">
                                                <div class="col-lg-3">
                                                    <div class="list-img">
                                                        <?php if($item->statics_image != ''): ?>
                                                            <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 1000, 0, '', true, true)); ?>" alt="">
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9">
                                                    <h4 class="list-title"><?php echo e(strip_tags($item->statics_title)); ?></h4>
                                                    <div class="date"><?php echo e(date('d/m/Y', $item->statics_created)); ?></div>
                                                    <div class="list-intro">
                                                        <?php echo $item->statics_intro; ?>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <?php echo $__env->make('Statics::block.right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Statics::layout.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp64\www\project.vn\thokhangduong\app\Modules/Statics/Views/content/pageStaticsDetail.blade.php ENDPATH**/ ?>