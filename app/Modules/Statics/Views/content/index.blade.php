<?php

use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\Utility;
use App\Library\PHPDev\ThumbImg;
?>
@extends('Statics::layout.html')
@section('header')
@include('Statics::block.header')
@stop
@section('footer')
@include('Statics::block.footer')
@stop
@section('content')
<div class="content">
    <div class="banner">
        @if(isset($dataBannerHead) && !empty($dataBannerHead))
            @foreach($dataBannerHead as $item)
                <img src="{{ThumbImg::thumbBaseNormal(CGlobal::FOLDER_BANNER, $item['banner_id'], $item['banner_image'], 2000, 0, '', true, true, false)}}" alt="">
            @endforeach
        @endif
    </div>
    <div class="container">
        <div class="pots">
            <p class="title">
               {!! $gioithieu->info_title !!}
            </p>
            <p class="strong">
               {!! $gioithieu->info_intro !!}
            </p>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $gioithieu->info_id, $gioithieu->info_img, 800, 0, '', true, true) }}" alt="">
                </div>
                <div class="col-md-8">
                    <p class="artice">{!! strip_tags($gioithieu->info_content)  !!}</p>
                </div>

            </div>
        </div>
        <div class="pots">
            <p class="title">
                {!! $gioithieu_1->info_title !!}
            </p>
            <div class="row">
                <div class="col-md-8">
                    <p class="artice"> {!! strip_tags($gioithieu_1->info_content)  !!}</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $gioithieu_1->info_id, $gioithieu_1->info_img, 800, 0, '', true, true) }}" alt="">
                </div>


            </div>
        </div>
        <div class="pots">
            <p class="title">
                {!! $gioithieu_2->info_title !!}
            </p>
            <div class="row">
                <div class="col-md-12">
                    <p class="artice1">{!! strip_tags($gioithieu_2->info_content)  !!}</p>

                </div>
            </div>
        </div>

    </div>
    <div class="banner-1">
        @if(isset($dataBannerContent) && !empty($dataBannerContent))
            @foreach($dataBannerContent as $item)
                <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_BANNER, $item['banner_id'], $item['banner_image'], 2000,0, '', true, true, false) }}" width="100%" alt="">
            @endforeach
        @endif
    </div>
    <div class="container">
        <h3 class="title-index">{!! isset($text_tt_1) ? strip_tags($text_tt_1) : '' !!}</h3>
        <div class="cate cate-bottom">
            <div class="row">
                @if(isset($data_cat_3) && !empty($data_cat_3))
                    @foreach($data_cat_3 as $key => $item)
                        <div class="col-md-6 etc">
                            <a href="{{FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)}}">
                                @if($key == 0)
                                    <div class="pic">
                                        @if($item->statics_image != '')
                                            <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800, 0 , '', true, true) }}" alt="">
                                        @endif
                                    </div>
                                    <div class="info">
                                        <p class="title">{{ strip_tags($item->statics_title) }}</p>
                                        <p class="date">{{ date('d/m/Y', $item->statics_created) }}</p>
                                        <p class="article">{!! $item->statics_intro !!}</p>
                                    </div>
                                @endif
                            </a>
                        </div>
                    @endforeach
                @endif

                <div class="col-md-6 small">
                    <ul>
                        @if(isset($data_cat_3) && !empty($data_cat_3))
                            @foreach($data_cat_3 as $key => $item)
                                @if($key > 0 && $key <5)
                                    <a href="{{FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)}}">
                                        <li>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    @if($item->statics_image != '')
                                                        <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800,0, '', true, true) }}" alt="">
                                                    @endif
                                                </div>
                                                <div class="col-md-8">
                                                    <p class="title-right">{{ $item->statics_title }}</p>
                                                    <p class="date">{{ date('d/m/Y', $item->statics_created) }}</p>
                                                    <p class="article">{!! $item->statics_intro!!}</p>
                                                </div>
                                            </div>
                                        </li>
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </div>
                @if(isset($data_cat_3) && !empty($data_cat_3))
                    @foreach($data_cat_3 as $key => $item)
                        @if($key > 5)
                            <div class="col-md-6 mgb20">
                                <a href="{{FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)}}">
                                    <div class="pic">
                                        @if($item->statics_image != '')
                                            <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800,0, '', true, true) }}" alt="">
                                        @endif
                                    </div>
                                    <div class="info">
                                        <p class="title">{{ strip_tags($item->statics_title) }}</p>
                                        <p class="date">{{ date('d/m/Y', $item->statics_created) }}</p>
                                        <p class="article">{!! $item->statics_intro !!}</p>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>

        <h3 class="title-index">{!! isset($text_ba) ? strip_tags($text_ba) : '' !!}</h3>
        <div class="cate">
            <div class="row">
                @if(isset($data_cat_4) && !empty($data_cat_4))
                    @foreach($data_cat_4 as $key => $item)
                        <div class="col-md-6 atc">
                            <a href="{{FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)}}">
                                <div class="pic">
                                    <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800,0, '', true, true) }}" alt="">
                                </div>
                                <div class="info">
                                    <p class="title">{{ strip_tags($item->statics_title) }}</p>
                                    <p class="date">{{ date('d/m/Y', $item->statics_created) }}</p>
                                    <p class="article">{!! $item->statics_intro !!}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

@stop

