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
<div class="content1">
	<div class="anhbia">
		@if(isset($dataBannerHead) && !empty($dataBannerHead))
			@foreach($dataBannerHead as $item)
				<img src="{{ThumbImg::thumbBaseNormal(CGlobal::FOLDER_BANNER, $item['banner_id'], $item['banner_image'], 2000, 0, '', true, true, false)}}" alt="">
			@endforeach
		@endif
	</div>
	<div class="container">
		<div class="gt">
			<div class="row">
				<div class="col-md-7">
					<h3 class="title">{!! isset($text_1) ? $text_1 : '' !!}</h3>
					<p class="text">{!! isset($arr_text_2->info_content) ? stripcslashes($arr_text_2->info_content) : '' !!}</p>
				</div>
				<div class="col-md-5">
					@if($arr_text_2->info_img != '' )
						<img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $arr_text_2->info_id, $arr_text_2->info_img, 1000,0, '', true, true) }}" alt="">
					@endif
				</div>
			</div>
		</div>
		<div class="chuyen-gia">
			<h3 class="title">{!! isset($text_2) ? $text_2 : '' !!}</h3>
			<div class="row">
				@if(isset($data_cat_1) && !empty($data_cat_1))
					@foreach($data_cat_1 as $item)
						<div class="col-md-4">
							<div class="img-chuyen-gia">
								@if($item->statics_image != '')
									<img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800, 0, '', true, true) }}" alt="">
								@endif
							</div>
							<p class="name">{{ $item->statics_title }}</p>
							<p class="quote">{!! $item->statics_content !!}</p>
						</div>
					@endforeach
				@endif

			</div>
		</div>
		<div class="khach-hang">
			<h3 class="title">{!! isset($text_3) ? $text_3 : '' !!}</h3>
			<div class="row">
				@if(isset($data_cat_2) && !empty($data_cat_2))
					@foreach($data_cat_2 as $key => $item)
						<div class="col-md-4">
							<iframe width="349" height="219" src="{{ $item->statics_video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<p>{{ $item->statics_intro }}</p>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
	<div class="gioithieu" >
		@if(isset($dataBannerContent) && !empty($dataBannerContent)) 
			@foreach($dataBannerContent as $item)
				<img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_BANNER, $item['banner_id'], $item['banner_image'], 2000,0, '', true, true, false) }}" width="100%" alt="">
			@endforeach
		@endif
	</div>
	<div class="container">
		@include('Statics::block.bottom')
	</div>
</div>
@stop