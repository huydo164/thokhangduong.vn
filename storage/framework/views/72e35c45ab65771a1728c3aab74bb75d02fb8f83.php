<?php
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\ThumbImg;
?>
<div class="right-page">
    <?php if(isset($data_cat_2) && !empty($data_cat_2)): ?>
        <div class="clip-page">
            <?php $__currentLoopData = $data_cat_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->statics_video != ''): ?>
                    <iframe width="100%" height="200" src="<?php echo e($item->statics_video); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
    <!--------youtube-------->

    <h4 class="statics-same"><?php echo isset($text_bv_1) ? strip_tags($text_bv_1) : ''; ?></h4>
    <?php $__currentLoopData = $data_cat_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="list-sub-page">
                <a href="<?php echo e(FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)); ?>">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="list-img">
                            <?php if($item->statics_image != ''): ?>
                                <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800, 0, '', true, true)); ?>" alt="">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-6">
                        <h4 class="list-title"><?php echo e($item->statics_title); ?></h4>
                        <div class="date"><?php echo e(date('m/d/Y', $item->statics_created)); ?></div>
                        <div class="list-intro">
                            <?php echo $item->statics_intro; ?>

                        </div>
                    </div>
                </a>
            </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH E:\wamp64\www\project.vn\thokhangduong\app\Modules/Statics/Views/block/right.blade.php ENDPATH**/ ?>