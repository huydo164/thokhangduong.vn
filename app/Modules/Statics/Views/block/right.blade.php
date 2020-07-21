<?php
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\ThumbImg;
?>
<div class="right-page">
    @if(isset($data_cat_2) && !empty($data_cat_2))
        <div class="clip-page">
            @foreach($data_cat_2 as $item)
                @if($item->statics_video != '')
                    <iframe width="100%" height="200" src="{{ $item->statics_video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                @endif
            @endforeach
        </div>
    @endif
    <!--------youtube-------->

    <h4 class="statics-same">{!! isset($text_bv_1) ? strip_tags($text_bv_1) : '' !!}</h4>
    @foreach($data_cat_1 as $key => $item)
            <div class="list-sub-page">
                <a href="{{FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)}}">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="list-img">
                            @if($item->statics_image != '')
                                <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800, 0, '', true, true) }}" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-6">
                        <h4 class="list-title">{{ $item->statics_title }}</h4>
                        <div class="date">{{ date('m/d/Y', $item->statics_created) }}</div>
                        <div class="list-intro">
                            {!! $item->statics_intro!!}
                        </div>
                    </div>
                </a>
            </div>
    @endforeach
</div>
