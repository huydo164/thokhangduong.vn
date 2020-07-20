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
<div class="content1">
	<div class="anhbia">
		<?php if(isset($dataBannerHead) && !empty($dataBannerHead)): ?>
			<?php $__currentLoopData = $dataBannerHead; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_BANNER, $item['banner_id'], $item['banner_image'], 2000, 0, '', true, true, false)); ?>" alt="">
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>
	</div>
	<div class="container">
		<div class="gt">
			<div class="row">
				<div class="col-md-7">
					<h3 class="title"><?php echo isset($text_1) ? $text_1 : ''; ?></h3>
					<p class="text"><?php echo isset($arr_text_2->info_content) ? stripcslashes($arr_text_2->info_content) : ''; ?></p>
				</div>
				<div class="col-md-5">
					<?php if($arr_text_2->info_img != '' ): ?>
						<img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $arr_text_2->info_id, $arr_text_2->info_img, 1000,0, '', true, true)); ?>" alt="">
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="chuyen-gia">
			<h3 class="title"><?php echo isset($text_2) ? $text_2 : ''; ?></h3>
			<div class="row">
				<?php if(isset($data_cat_1) && !empty($data_cat_1)): ?>
					<?php $__currentLoopData = $data_cat_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-md-4">
							<div class="img-chuyen-gia">
								<?php if($item->statics_image != ''): ?>
									<img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800, 0, '', true, true)); ?>" alt="">
								<?php endif; ?>
							</div>
							<p class="name"><?php echo e($item->statics_title); ?></p>
							<p class="quote"><?php echo $item->statics_content; ?></p>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>

			</div>
		</div>
		<div class="khach-hang">
			<h3 class="title"><?php echo isset($text_3) ? $text_3 : ''; ?></h3>
			<div class="row">
				<?php if(isset($data_cat_2) && !empty($data_cat_2)): ?>
					<?php $__currentLoopData = $data_cat_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-md-4">
							<iframe width="349" height="219" src="<?php echo e($item->statics_video); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<p><?php echo e($item->statics_intro); ?></p>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="gioithieu" >
		<?php if(isset($dataBannerContent) && !empty($dataBannerContent)): ?> 
			<?php $__currentLoopData = $dataBannerContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_BANNER, $item['banner_id'], $item['banner_image'], 2000,0, '', true, true, false)); ?>" width="100%" alt="">
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>
	</div>
	<div class="container">
		<?php echo $__env->make('Statics::block.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Statics::layout.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp64\www\project.vn\thokhangduong\app\Modules/Statics/Views/content/index.blade.php ENDPATH**/ ?>