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
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="<?php echo e(FuncLib::getBaseURL()); ?>">Trang chủ</a>
                    </li>
                    <?php if(isset($dataCate->category_id)): ?>
                        <li class="active">
                            <?php echo e($dataCate->category_title); ?>

                        </li>
                    <?php endif; ?>
                </ul>
                <div class="page-contact">
                    <h3><?php echo isset($text_1) ? strip_tags($text_1)  : ''; ?></h3>
                    <?php echo isset($text_2) ? $text_2  : ''; ?>

                    <p class="phone"> <?php echo $textPhone; ?> </p>
                    <form action="<?php echo e(URL::route('site.pageContactPost')); ?>" method="POST" class="form-dk" id="formBox">
                        <div class="form-group">
                            <label for=""><?php echo isset($text_3) ? strip_tags($text_3) : ''; ?> <span>*</span></label>
                            <input id="name" type="text" name="contact_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for=""><?php echo isset($text_4) ? strip_tags($text_4) : ''; ?> <span>*</span></label>
                            <input id="phone" type="text" name="contact_phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for=""><?php echo isset($text_5) ? strip_tags($text_5) : ''; ?> </label>
                            <input type="text" name="contact_email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for=""><?php echo isset($text_6) ? strip_tags($text_6) : ''; ?> </label>
                            <input  type="text" name="contact_local" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for=""><?php echo isset($text_7) ? strip_tags($text_7) : ''; ?> <span>*</span></label>
                            <textarea cols="30" rows="10" name="contact_content" id="contentBox"  class="form-control"></textarea>
                        </div>
                        <button type="button" class="btn btn-primary btnBox">Gửi đi</button>
                        <button type="reset" class="btn btn-primary" id="resetButton">Làm lại</button>
                        <?php echo csrf_field(); ?>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Statics::layout.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp64\www\project.vn\thokhangduong\app\Modules/Statics/Views/content/pageContact.blade.php ENDPATH**/ ?>