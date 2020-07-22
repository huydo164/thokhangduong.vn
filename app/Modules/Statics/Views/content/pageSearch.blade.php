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
            <div class="content-search">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <h3>Kết quả tìm kiếm</h3>
                        @foreach($data as $item)
                            <div class="col-lg-6 col-md-6">
                                @if($item->statics_image != '')
                                    <div class="img-ps">
                                        <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800,0, '', true, true) }}" alt="">
                                    </div>
                                @endif
                                <h4>{{ $item->statics_title }}</h4>
                                <div class="search-intro">
                                    {!! $item->statics_content !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-6 col-md-6">
                        @include('Statics::block.right')
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
