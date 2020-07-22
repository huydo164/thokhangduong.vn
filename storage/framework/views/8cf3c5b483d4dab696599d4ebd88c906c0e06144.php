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
                <div class="page-statics">
                    <?php if($data->count() > 1): ?>
                        <h3 class="title-statics"><?php echo isset($text_tt_1) ? strip_tags($text_tt_1) : ''; ?></h3>
                        <div class="row">
                            <div class="col-sm-8">
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
                                                        <p class="limit"><?php echo $item->statics_intro; ?></p>
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
                                                                <p class="limit"><?php echo $item->statics_intro; ?></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <!------col-sm-6 list-page-sub-------->

                                </div>
                                <!----------row--------->

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
                                                        <p class="limit"><?php echo $item->statics_intro; ?></p>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <!-------row mgt20------->

                            </div>
                            <!-------col-sm-8-------->

                            <div class="col-sm-4">
                                <?php echo $__env->make('Statics::block.right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <!------------col-sm-4------------>
                        </div>
                        <!----------row---------->

                    <?php endif; ?>
                </div>
                <div class="listPaginatePage">
                    <div class="showListPage"><?php echo $paging; ?></div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Statics::layout.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wampsever\www\thokhangduong.vn\app\Modules/Statics/Views/content/pageSearch.blade.php ENDPATH**/ ?>