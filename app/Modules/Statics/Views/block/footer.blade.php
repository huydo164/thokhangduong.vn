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
                    <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $arrTextLogo->info_id, $arrTextLogo->info_img, 800, 0, '', true, true) }}">
                    <p>{!! $arrTextLogo->info_content !!}</p>
                </div>
            </div>
            <div class="col-md-10">
                <p>{!! $textFooter1 !!}</p>
                <p>{!! $textFooter2 !!}</p>
                <p>{!! $textFooter3 !!}</p>
            </div>
        </div>
    </div>
</div>
