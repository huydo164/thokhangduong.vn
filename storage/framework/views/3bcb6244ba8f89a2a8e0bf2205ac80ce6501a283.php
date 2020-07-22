<?php
use App\Library\PHPDev\ThumbImg;
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
?>

<div id="footer">
    <div class="container">
        <div class="rows">
            <div class="col-md-2">
                <div class="logo">
                    <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $arrTextLogo->info_id, $arrTextLogo->info_img, 800, 0, '', true, true)); ?>">
                    <p><?php echo $arrTextLogo->info_content; ?></p>
                </div>
            </div>
            <div class="col-md-10">
                <p><?php echo $textFooter1; ?></p>
                <p><?php echo $textFooter2; ?></p>
                <p><?php echo $textFooter3; ?></p>
            </div>
        </div>
    </div>
</div>

<?php /**PATH E:\wamp64\www\project.vn\thokhangduong\app\Modules/Statics/Views/block/footer.blade.php ENDPATH**/ ?>