<?php
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
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
            <div class="page-search">
                <div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="{{URL::route('SIndex')}}">Trang chủ</a>
                        </li>
                        <li class="active">Tìm kiếm</li>
                    </ul>
                </div>
<<<<<<< HEAD
                <div class="page-statics">
                    <h3 class="title-statics">{!! isset($text_tt_1) ? strip_tags($text_tt_1) : '' !!}</h3>
                    <div class="row">
                        <div class="col-sm-8">
                    @if(isset($data) && $data->count() > 1)
=======
                <div class="page-search">
                    <div class="row">
                        <div class="col-sm-8 col-lg-8">
                            @if(isset($data) && $data->count() > 1)
>>>>>>> 7612397a4e7026f35d8f8ae45bdf8f6cf2a2f94d
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-6 first-post">
                                        @foreach($data as $key => $item)
                                            @if($key < 1)
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
                                            @endif
                                        @endforeach
                                    </div>
                                    <!-------col-sm-6-------->

                                    <div class="col-sm-12 col-lg-6 col-md-12">
                                        @foreach($data as $key => $item)
                                            @if($key > 0 && $key < 5)
                                                <div class="list-sub-page">
                                                    <a href="{{FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)}}">
                                                        <div class="col-lg-3 col-sm-3">
                                                            <div class="list-img">
                                                                @if($item->statics_image != '')
                                                                    <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800, 0, '', true, true) }}" alt="">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9 col-sm-9">
                                                            <h4 class="list-title">{{ strip_tags($item->statics_title) }}</h4>
                                                            <div class="date">{{ date('d/m/Y', $item->statics_created) }}</div>
                                                            <div class="list-intro">
                                                                {!! $item->statics_intro !!}
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <!------col-sm-6 list-page-sub-------->

                                </div>
                                <div class="row mgt20">
                                    @foreach($data as $key => $item)
                                        @if($key > 5 )
                                            <div class="col-lg-6 col-md-6 col-sm-6 item-last">
                                                <a href="{{FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)}}">
                                                    <div class="post-img">
                                                        <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800, 0, '', true, true) }}" alt="">
                                                    </div>
                                                    <h4 class="post-title">
                                                        {{ strip_tags($item->statics_title) }}
                                                    </h4>
                                                    <div class="date">{{ date('d/m/Y', $item->statics_created) }}</div>
                                                    <div class="post-intro">
                                                        {!! $item->statics_intro !!}
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                                <!-------row mgt20------->

                            </div>
                            <!-------col-sm-8-------->
                            @else
                            @endif

                            <!------------col-sm-4------------>
                        </div>
                        <!----------row---------->
                    <div class="col-sm-4">
                        @include('Statics::block.right')
                    </div>

                </div>
                @if(isset($data) && $data->count() > 1)
                <div class="listPaginatePage">
                    <div class="showListPage">{!! $paging !!}</div>
                </div>

                            @endif
                        </div>
                        <!-------col-sm-8-------->
                        <div class="col-sm-4 col-lg-4">
                            @include('Statics::block.right')
                        </div>
                        <!------------col-sm-4------------>
                    </div>
                    <!----------row---------->
                </div>
                @if(isset($data) && $data->count() > 1)
                    <div class="listPaginatePage">
                        <div class="showListPage">{!! $paging !!}</div>
                    </div>

                @endif
            </div>
        </div>
    </div>

@stop
