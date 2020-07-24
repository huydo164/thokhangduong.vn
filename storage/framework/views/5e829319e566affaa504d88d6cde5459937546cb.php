<?php
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<?php echo CGlobal::$extraMeta; ?>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="shortcut icon" href="<?php echo e(FuncLib::getBaseUrl()); ?>assets/frontend/img/favicon.ico" type="image/vnd.microsoft.icon">
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('assets/libs/bootstrap/css/bootstrap.css')); ?>" />
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('assets/focus/css/reset.css')); ?>" />
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('assets/frontend/css/site.css')); ?>" />
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('assets/frontend/css/media.css')); ?>" />
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('assets/frontend/css/animate.css')); ?>" />
    <script src="<?php echo e(URL::asset('assets/frontend/js/site.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/focus/js/jquery.2.1.1.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/number/autoNumeric.js')); ?>"></script>

	<?php echo CGlobal::$extraHeaderCSS; ?>

	<?php echo CGlobal::$extraHeaderJS; ?>

    <script type="text/javascript">var BASE_URL='<?php echo e(FuncLib::getBaseUrl()); ?>';</script>
	<?php if(CGlobal::is_dev == 0): ?>
    <?php endif; ?>
</head>
<body>
<div id="wrapper">
    <?php echo $__env->yieldContent('header'); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->yieldContent('footer'); ?>
</div>
<?php echo CGlobal::$extraFooterCSS; ?>

<?php echo CGlobal::$extraFooterJS; ?>

</body>
<script>
    $("#owl-example").owlCarousel({
        slideSpeed : 300,
        paginationSpeed : 400,
        items:1,
        autoPlay: 1000,
        loop:true,
        animateOut: 'slideOutDown',
    });
</script>
</html>
<?php /**PATH D:\wampsever\www\thokhangduong.vn\app\Modules/Statics/Views/layout/html.blade.php ENDPATH**/ ?>