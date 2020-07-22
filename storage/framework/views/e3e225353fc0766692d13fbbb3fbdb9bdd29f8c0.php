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
        <h3>VIÊM TẮC ĐỘNG MẠCH</h3>
        <div class="cate">
            <div class="row">
                <div class="col-md-6">
                    <div class="pic">
                        <img src="http://localhost:8888/thokhangduong.vn/public/uploads/anh-bai-viet-1.jpg" >
                    </div>
                    <div class="info">
                        <p class="title">Đông y chữa viêm tắc động mạch</p>
                        <p class="date">07/09/2020</p>
                        <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin imperdiet nunc sed enim semper mollis. Sed congue mollis leo sit amet pretium. Pellentesque lacinia lec</p>
                    </div>
                </div>
                <div class="col-md-6 small">
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="http://localhost:8888/thokhangduong.vn/public/uploads/anh-bai-viet-2.jpg">
                                </div>
                                <div class="col-md-8">
                                    <p class="title">Đông y chữa viêm tắc động mạch</p>
                                    <p class="date">07/09/2020</p>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin imperdiet nunc sed enim semper mollis. Sed congue mollis leo sit amet pretium. Pellentesque lacinia lec</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="http://localhost:8888/thokhangduong.vn/public/uploads/anh-bai-viet-2.jpg">
                                </div>
                                <div class="col-md-8">
                                    <p class="title">Đông y chữa viêm tắc động mạch</p>
                                    <p class="date">07/09/2020</p>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin imperdiet nunc sed enim semper mollis. Sed congue mollis leo sit amet pretium. Pellentesque lacinia lec</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="http://localhost:8888/thokhangduong.vn/public/uploads/anh-bai-viet-2.jpg">
                                </div>
                                <div class="col-md-8">
                                    <p class="title">Đông y chữa viêm tắc động mạch</p>
                                    <p class="date">07/09/2020</p>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin imperdiet nunc sed enim semper mollis. Sed congue mollis leo sit amet pretium. Pellentesque lacinia lec</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="http://localhost:8888/thokhangduong.vn/public/uploads/anh-bai-viet-2.jpg">
                                </div>
                                <div class="col-md-8">
                                    <p class="title">Đông y chữa viêm tắc động mạch</p>
                                    <p class="date">07/09/2020</p>
                                    <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin imperdiet nunc sed enim semper mollis. Sed congue mollis leo sit amet pretium. Pellentesque lacinia lec</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="pic">
                        <img src="http://localhost:8888/thokhangduong.vn/public/uploads/anh-bai-viet-1.jpg" >
                    </div>
                    <div class="info">
                        <p class="title">Đông y chữa viêm tắc động mạch</p>
                        <p class="date">07/09/2020</p>
                        <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin imperdiet nunc sed enim semper mollis. Sed congue mollis leo sit amet pretium. Pellentesque lacinia lec</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pic">
                        <img src="http://localhost:8888/thokhangduong.vn/public/uploads/anh-bai-viet-1.jpg" >
                    </div>
                    <div class="info">
                        <p class="title">Đông y chữa viêm tắc động mạch</p>
                        <p class="date">07/09/2020</p>
                        <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin imperdiet nunc sed enim semper mollis. Sed congue mollis leo sit amet pretium. Pellentesque lacinia lec</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pic">
                        <img src="http://localhost:8888/thokhangduong.vn/public/uploads/anh-bai-viet-1.jpg" >
                    </div>
                    <div class="info">
                        <p class="title">Đông y chữa viêm tắc động mạch</p>
                        <p class="date">07/09/2020</p>
                        <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin imperdiet nunc sed enim semper mollis. Sed congue mollis leo sit amet pretium. Pellentesque lacinia lec</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pic">
                        <img src="http://localhost:8888/thokhangduong.vn/public/uploads/anh-bai-viet-1.jpg" >
                    </div>
                    <div class="info">
                        <p class="title">Đông y chữa viêm tắc động mạch</p>
                        <p class="date">07/09/2020</p>
                        <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin imperdiet nunc sed enim semper mollis. Sed congue mollis leo sit amet pretium. Pellentesque lacinia lec</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h3>BỆNH ÁN</h3>
        <div class="cate">
            <div class="row">
                <div class="col-md-6">
                    <div class="pic">
                        <img src="http://localhost:8888/thokhangduong.vn/public/uploads/anh-bai-viet-1.jpg" >
                    </div>
                    <div class="info">
                        <p class="title">Đông y chữa viêm tắc động mạch</p>
                        <p class="date">07/09/2020</p>
                        <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin imperdiet nunc sed enim semper mollis. Sed congue mollis leo sit amet pretium. Pellentesque lacinia lec</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pic">
                        <img src="http://localhost:8888/thokhangduong.vn/public/uploads/anh-bai-viet-1.jpg" >
                    </div>
                    <div class="info">
                        <p class="title">Đông y chữa viêm tắc động mạch</p>
                        <p class="date">07/09/2020</p>
                        <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin imperdiet nunc sed enim semper mollis. Sed congue mollis leo sit amet pretium. Pellentesque lacinia lec</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="pic">
                        <img src="http://localhost:8888/thokhangduong.vn/public/uploads/anh-bai-viet-1.jpg" >
                    </div>
                    <div class="info">
                        <p class="title">Đông y chữa viêm tắc động mạch</p>
                        <p class="date">07/09/2020</p>
                        <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin imperdiet nunc sed enim semper mollis. Sed congue mollis leo sit amet pretium. Pellentesque lacinia lec</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pic">
                        <img src="http://localhost:8888/thokhangduong.vn/public/uploads/anh-bai-viet-1.jpg" >
                    </div>
                    <div class="info">
                        <p class="title">Đông y chữa viêm tắc động mạch</p>
                        <p class="date">07/09/2020</p>
                        <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin imperdiet nunc sed enim semper mollis. Sed congue mollis leo sit amet pretium. Pellentesque lacinia lec</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Statics::layout.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wampsever\www\thokhangduong.vn\app\Modules/Statics/Views/content/index.blade.php ENDPATH**/ ?>