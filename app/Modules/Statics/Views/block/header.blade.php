<?php

use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\ThumbImg;

?>
{!! isset($messages) && ($messages != '') ? $messages : '' !!}
<div id="header">
    <div class="info">
        <div class="container">
            <div class="rows">
                <div class="col-md-3">
                    <div class="web">
                        <a href="#">{!! $textWeb !!}</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="phone">
                        <p class="phone"> {!! $textPhone !!} </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="search search-header">
                        <form action="{{URL::route('site.pageStaticsSearch')}}" method="GET">
                            <button type="submit" name="submit" class="icon-search"></button>
                            <input type="text" placeholder="tìm kiếm..." class="form-control" name="statics_title">
                        </form>
                    </div>
                </div>
                <button type="button" class="mbButtonMenu navbar-toggle pull-right">
                    <i class="fa fa-bars fa-2x"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="menuTop">
        <div class="container">
            <ul>
                <li class="search">
                    <div class="search">
                        <form action="{{URL::route('site.pageStaticsSearch')}}" method="GET">
                            <button type="submit" name="submit" class="icon-search"></button>
                            <input type="text" placeholder="tìm kiếm..." class="form-control" name="statics_title">
                        </form>
                    </div>
                </li>
                @if(isset($arrCategory) && !empty($arrCategory))
                    @foreach($arrCategory as $cat)
                        @if($cat->category_menu == CGlobal::status_show && $cat->category_parent_id == 0)
                            <?php $i=0 ?>
                            @foreach($arrCategory as $sub)
                                @if($sub->category_menu == CGlobal::status_show && $sub->category_parent_id == $cat->category_id)
                                    <?php $i++; ?>
                                @endif
                            @endforeach
                            <li>
                                <a @if($i > 0) @endif title="{{$cat->category_title}}" href="@if($cat->category_link_replace != ''){{$cat->category_link_replace}}@else{{FuncLib::buildLinkCategory($cat->category_id, $cat->category_title)}}@endif">
                                    {{$cat->category_title}}
                                </a>
                                @if($i > 0)
                                    <ul class="menu-sub">
                                        @foreach($arrCategory as $sub)
                                            @if($sub->category_menu == CGlobal::status_show && $sub->category_parent_id == $cat->category_id)
                                                <li>
                                                    <a title="{{$sub->category_title}}" href="@if($sub->category_link_replace != ''){{$sub->category_link_replace}}@else{{FuncLib::buildLinkCategory($sub->category_id, $sub->category_title)}}@endif">
                                                        {{stripcslashes($sub->category_title)}}
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endif
                    @endforeach
                @endif

            </ul>
            <button type="button" class="mbButtonMenuL navbar-toggle pull-right">
                <span class="fa-4x">×</span>
            </button>
        </div>

    </div>
</div>
