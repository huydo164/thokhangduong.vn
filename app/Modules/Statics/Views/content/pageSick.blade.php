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
        <div class="container">
            <div class="page-neo">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="{{ FuncLib::getBaseURL() }}">Trang chủ</a>
                    </li>
                    @if(isset($dataCate->category_id))
                        <li class="active">
                            {{ $dataCate->category_title }}
                        </li>
                    @endif
                </ul>
            </div>
            <div class="page-sick">
                @if($data->count() > 1)
                    <h3 class="title-sick">
                        {!! isset($text_ba) ? strip_tags($text_ba) : '' !!}
                    </h3>
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="row">
                                @foreach($data as $key => $item)
                                    @if($key <= 1)
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <a href="{{FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)}}">
                                                <div class="post-img">
                                                    @if($item->statics_image != '')
                                                        <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800, 0, '', true, true) }}" alt="">
                                                    @endif
                                                </div>
                                                <h4 class="post-title">
                                                    {{ strip_tags($item->statics_title) }}
                                                </h4>
                                                <div class="date">{{ date('d/m/Y', $item->statics_created)  }}</div>
                                                <div class="post-intro">
                                                    {!! $item->statics_intro !!}
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <hr />
                                    </div>
                                @foreach($data as $key => $item)
                                    @if($key > 1)
                                            <a href="{{FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)}}">
                                                <div class="col-lg-6 col-md-6 col-sm-6 mgb20">
                                                    <div class="post-img">
                                                        @if($item->statics_image != '')
                                                            <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800, 0, '', true, true) }}" alt="">
                                                        @endif
                                                    </div>
                                                    <h4 class="post-title">
                                                        {{ strip_tags($item->statics_title) }}
                                                    </h4>
                                                    <div class="date">{{ date('d/m/Y', $item->statics_created)  }}</div>
                                                    <div class="post-intro">
                                                        {!! $item->statics_intro !!}
                                                    </div>
                                                </div>
                                            </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <!------------col-lg-8-------------->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            @include('Statics::block.right')
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop