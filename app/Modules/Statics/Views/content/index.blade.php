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
    @stop

