<?php
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
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
            <div class="page-search">
                <div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="<?php echo e(URL::route('SIndex')); ?>">Trang chủ</a>
                        </li>
                        <li class="active">Tìm kiếm</li>
                    </ul>
                </div>
                <div class="page-search">
                    <div class="row">
                        <div class="col-sm-8 col-lg-8">
                            <?php if(isset($data) && $data->count() > 1): ?>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-6 first-post">
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($key < 1): ?>
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
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <!-------col-sm-6-------->

                                    <div class="col-sm-12 col-lg-6 col-md-12">
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($key > 0 && $key < 5): ?>
                                                <div class="list-sub-page">
                                                    <a href="<?php echo e(FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)); ?>">
                                                        <div class="col-lg-3 col-sm-3">
                                                            <div class="list-img">
                                                                <?php if($item->statics_image != ''): ?>
                                                                    <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800, 0, '', true, true)); ?>" alt="">
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9 col-sm-9">
                                                            <h4 class="list-title"><?php echo e(strip_tags($item->statics_title)); ?></h4>
                                                            <div class="date"><?php echo e(date('d/m/Y', $item->statics_created)); ?></div>
                                                            <div class="list-intro">
                                                                <?php echo $item->statics_intro; ?>

                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <!------col-sm-6 list-page-sub-------->

                                </div>
                                <div class="row mgt20">
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($key > 5 ): ?>
                                            <div class="col-lg-6 col-md-6 col-sm-6 item-last">
                                                <a href="<?php echo e(FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)); ?>">
                                                    <div class="post-img">
                                                        <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800, 0, '', true, true)); ?>" alt="">
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
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-------col-sm-8-------->
                        <div class="col-sm-4 col-lg-4">
                            <?php echo $__env->make('Statics::block.right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <!------------col-sm-4------------>
                    </div>
                    <!----------row---------->
                </div>
                <?php if(isset($data) && $data->count() > 1): ?>
                    <div class="listPaginatePage">
                        <div class="showListPage"><?php echo $paging; ?></div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Statics::layout.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp64\www\project.vn\thokhangduong\app\Modules/Statics/Views/content/pageSearch.blade.php ENDPATH**/ ?>