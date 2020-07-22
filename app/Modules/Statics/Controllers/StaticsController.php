<?php
namespace App\Modules\Statics\Controllers;

use App\Library\PHPDev\Loader;
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\Pagging;
use App\Library\PHPDev\Utility;
use App\Modules\Models\Category;
use App\Modules\Models\Contact;
use App\Modules\Models\Info;
use App\Modules\Models\Statics;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class StaticsController extends BaseStaticsController{

    public function index(){

        Loader::loadJS('libs/owl.carousel/owl.carousel.min.js', CGlobal::$postEnd);
        Loader::loadCSS('libs/owl.carousel/owl.carousel.min.css', CGlobal::$postHead);

        $gioithieu = Info::getItemByKeyword('SITE_GIOITHIEU');
        $gioithieu_1 = Info::getItemByKeyword('SITE_GIOITHIEU_1');
        $gioithieu_2 = Info::getItemByKeyword('SITE_GIOITHIEU_2');
        $messages = Utility::messages('messages');

        return view('Statics::content.index', [
            'gioithieu' =>$gioithieu,
            'gioithieu_1' =>$gioithieu_1,
            'gioithieu_2' =>$gioithieu_2,

        ]);
    }

}