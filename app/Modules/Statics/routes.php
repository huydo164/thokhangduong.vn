<?php
$namespace = '\App\Modules\Statics\Controllers';

Route::group(['middleware' => ['web'], 'prefix' => '/', 'namespace' => $namespace], function(){

    Route::get('403', array('as' => 'page.403','uses' => 'BaseStaticsController@page403'));
    Route::get('404', array('as' => 'page.404','uses' => 'BaseStaticsController@page404'));

    Route::get('/', array('as' => 'SIndex','uses' => 'StaticsController@index'));


    Route::get('{name}-{id}.html',array('as' => 'site.actionRouter','uses' =>'StaticsController@actionRouter', 'permission_name'=>'Tin tức'))->where('name', '[A-Z0-9a-z)_\-]+')->where('id', '[0-9]+');

    Route::get('viem-tac-mach-mau/{name}-{id}.html', array('as' => 'site.pageStatic', 'uses' => 'StaticsController@pageStatic'));
    Route::get('chi-tiet/{name}-{id}.html', array('as' => 'site.detailStatics', 'uses' => 'StaticsController@pageStaticDetail'))->where('name', '[A-Z0-9a-z_\-]+')->where('id', '[0-9]+');

    Route::get('benh-an/{name}-{id}.html', array('as' => 'site.pageSick', 'uses' => 'StaticsController@pageSick'));


});