<?php
use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\Utility;
use App\Library\PHPDev\ThumbImg;
?>
@extends('Statics::layout.html')
@section('content')
    <div id="content">
        <div class="container">
            <div class="page-detail">
                <div class="page-neo">
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{ FuncLib::getBaseURL() }}">Trang chủ</a>
                        </li>
                        @if(isset($dataCate->category_id))
                            <li class="active">
                                {{ $dataCate->category_title }}
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="show-detail">
                            <h4 class="title-detail">{{ $data->statics_title }}</h4>
                            <div class="img-detail">
                                @if($data->statics_image != '')
                                    <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $data->statics_id, $data->statics_image, 800, 0 , '', true, true) }}" alt="">
                                @endif
                            </div>
                            <div class="cont-detail">
                                {!! $data->statics_content !!}
                            </div>
                        </div>
                        <div class="more-post">
                            <h4>{!! isset($text_bvk) ? strip_tags($text_bvk) : '' !!}</h4>
                            <div class="row">
                                @foreach($dataSame as $key => $item)
                                    <div class="col-sm-6">
                                        <div class="same-post">
                                            <a href="{{FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)}}">
                                                <div class="col-lg-3">
                                                    <div class="list-img">
                                                        @if($item->statics_image != '')
                                                            <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800, 0, '', true, true) }}" alt="">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-9">
                                                    <h4 class="list-title">{{ strip_tags($item->statics_title) }}</h4>
                                                    <div class="date">{{ date('d/m/Y', $item->statics_created) }}</div>
                                                    <div class="list-intro">
                                                        {!! $item->statics_intro !!}
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        @include('Statics::block.right')
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
