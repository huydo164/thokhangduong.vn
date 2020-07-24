<?php
namespace App\Modules\Statics\Controllers;

use App\Library\PHPDev\FuncLib;
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

        $cat_3 = (int)strip_tags(self::viewShareVal('CAT_ID_3'));
        $data_cat_3 = [];
        if ($data_cat_3 > 0){
            $data_search_3['statics_catid'] = $cat_3;
            $data_search_3['statics_order_no'] = 'asc';
            $data_cat_3 = Statics::getFocus($data_search_3, $limit = 10);
        }

        $cat_4 = (int)strip_tags(self::viewShareVal('CAT_ID_4'));
        $data_cat_4 = [];
        if ($data_cat_4 > 0){
            $data_search_4['statics_catid'] = $cat_4;
            $data_search_4['statics_order_no'] = 'asc';
            $data_cat_4 = Statics::getFocus($data_search_4, $limit = 4);
        }

        $text_tt_1 = self::viewShareVal('TEXT_TinTuc_1');
        $text_ba = self::viewShareVal('TEXT_BENHAN');

        $messages = Utility::messages('messages');

        return view('Statics::content.index', [
            'gioithieu' =>$gioithieu,
            'gioithieu_1' =>$gioithieu_1,
            'gioithieu_2' =>$gioithieu_2,
            'data_cat_3' => $data_cat_3,
            'text_tt_1' => $text_tt_1,
            'text_ba' => $text_ba,
            'messages' => $messages,
            'data_cat_4' => $data_cat_4,

        ]);
    }

    public function actionRouter($catname, $catid){
        if ($catid > 0 && $catname != ''){
            $arrCat = Category::getById($catid);
            if ($arrCat != null){
                $type_keyword = $arrCat->category_type_keyword;
                if ($type_keyword == 'group_statics'){
                    return self::pageStatic($catname, $catid);
                }
                elseif($type_keyword == 'group_sick'){
                    return self::pageSick($catname, $catid);
                }
            }
        }
    }

    public function pageStatic($catname, $catid){
        $pageNo = (int)Request::get('page', 1);
        $pageScroll = CGlobal::num_scroll_page;
        $limit = 12;
        $offset = ($pageNo -1)*$limit;
        $total = 0;
        $data = $search = $dataCate =  array();
        $paging = '';

        if ($catid > 0){
            $search['statics_cat_name'] = $catname;
            $search['statics_catid'] = $catid;
            $search['statics_status'] = CGlobal::status_show;
            $search['field_get'] = 'statics_id,statics_catid,statics_cat_name,statics_cat_alias,statics_title,statics_intro,statics_content,statics_image,statics_created';
            $data  = Statics::searchByCondition($search, $limit, $offset, $total);
            $paging = $total > 0 ? Pagging::getPager($pageScroll, $pageNo, $total, $limit, $search) : '';
            $dataCate = Category::getById($catid);
        }

        $text_tt_1 = self::viewShareVal('TEXT_TinTuc_1');
        $text_bv_1 = self::viewShareVal('TEXT_BAIVIET');
        $text_ba = self::viewShareVal('TEXT_BENHAN');

        $cat_1 = (int)strip_tags(self::viewShareVal('CAT_ID_BAIVIET'));
        $data_cat_1 = [];
        if ($data_cat_1 > 0){
            $data_search_1['statics_catid'] = $cat_1;
            $data_search_1['statics_order_no'] = 'asc';
            $data_cat_1 = Statics::getFocus($data_search_1, $limit = 10);
        }

        $cat_2 = (int)strip_tags(self::viewShareVal('CAT_ID_VIDEO'));
        $data_cat_2 = [];
        if ($data_cat_2 > 0){
            $data_search_2['statics_catid'] = $cat_2;
            $data_search_2['statics_order_no'] = 'asc';
            $data_cat_2 = Statics::getFocus($data_search_2, $limit = 2);
        }

        return view('Statics::content.pageStatics', [
            'data' => $data,
            'dataCate' => $dataCate,
            'paging' => $paging,
            'text_tt_1' => $text_tt_1,
            'text_bv_1' => $text_bv_1,
            'data_cat_1' => $data_cat_1,
            'data_cat_2' => $data_cat_2,
            'text_ba' => $text_ba,
        ]);
    }

    public function pageSick($catname, $catid){
        $pageNo = (int)Request::get('page', 1);
        $pageScroll = CGlobal::num_scroll_page;
        $limit = 12;
        $offset = ($pageNo -1)*$limit;
        $total = 0;
        $data = $search = $dataCate =  array();
        $paging = '';

        if ($catid > 0){
            $search['statics_cat_name'] = $catname;
            $search['statics_catid'] = $catid;
            $search['statics_status'] = CGlobal::status_show;
            $search['field_get'] = 'statics_id,statics_catid,statics_cat_name,statics_cat_alias,statics_title,statics_intro,statics_content,statics_image,statics_created';
            $data  = Statics::searchByCondition($search, $limit, $offset, $total);
            $paging = $total > 0 ? Pagging::getPager($pageScroll, $pageNo, $total, $limit, $search) : '';
            $dataCate = Category::getById($catid);
        }

        $text_ba = self::viewShareVal('TEXT_BENHAN');
        $text_bv_1 = self::viewShareVal('TEXT_BAIVIET');

        $cat_1 = (int)strip_tags(self::viewShareVal('CAT_ID_BAIVIET'));
        $data_cat_1 = [];
        if ($data_cat_1 > 0){
            $data_search_1['statics_catid'] = $cat_1;
            $data_search_1['statics_order_no'] = 'asc';
            $data_cat_1 = Statics::getFocus($data_search_1, $limit = 10);
        }

        $cat_2 = (int)strip_tags(self::viewShareVal('CAT_ID_VIDEO'));
        $data_cat_2 = [];
        if ($data_cat_2 > 0){
            $data_search_2['statics_catid'] = $cat_2;
            $data_search_2['statics_order_no'] = 'asc';
            $data_cat_2 = Statics::getFocus($data_search_2, $limit = 2);
        }

        return view('Statics::content.pageSick',[
            'data' => $data,
            'dataCate' => $dataCate,
            'paging' => $paging,
            'text_ba' => $text_ba,
            'text_bv_1' => $text_bv_1,
            'data_cat_1' => $data_cat_1,
            'data_cat_2' => $data_cat_2,
        ]);
    }

    public function pageStaticDetail($name = '', $id = 0){
        $data = $dataCate = $dataSame =  array();
        if ($id > 0){
            $data = Statics::getById($id);
            if (isset($data->statics_id)){
                $dataUpdate['statics_view_num'] = (int)$data->statics_view_num + 1;
                Statics::updateData($id, $dataUpdate);
            }
            $dataCate = Category::getById($data->statics_catid);
        }

        $searchSame['field_get'] = 'statics_id,statics_catid,statics_cat_name,statics_cat_alias,statics_title,statics_intro,statics_content,statics_image,statics_created';
        $dataSame = Statics::getSameData($id, $data->statics_catid, $limit = 6, $searchSame);

        $text_bvk = self::viewShareVal('TEXT_BAIVIETKHAC');
        $text_bv_1 = self::viewShareVal('TEXT_BAIVIET');

        $cat_1 = (int)strip_tags(self::viewShareVal('CAT_ID_BAIVIET'));
        $data_cat_1 = [];
        if ($data_cat_1 > 0){
            $data_search_1['statics_catid'] = $cat_1;
            $data_search_1['statics_order_no'] = 'asc';
            $data_cat_1 = Statics::getFocus($data_search_1, $limit = 10);
        }

        $cat_2 = (int)strip_tags(self::viewShareVal('CAT_ID_VIDEO'));
        $data_cat_2 = [];
        if ($data_cat_2 > 0){
            $data_search_2['statics_catid'] = $cat_2;
            $data_search_2['statics_order_no'] = 'asc';
            $data_cat_2 = Statics::getFocus($data_search_2, $limit = 2);
        }

        return view('Statics::content.pageStaticsDetail', [
            'id' => $id,
            'data' => $data,
            'dataCate' => $dataCate,
            'dataSame' => $dataSame,
            'text_bvk' => $text_bvk,
            'text_bv_1' => $text_bv_1,
            'data_cat_1' => $data_cat_1,
            'data_cat_2' => $data_cat_2
        ]);
    }
    public function pageSearch(){
        $pageNo = (int)Request::get('page', 1);
        $pageScroll  = CGlobal::num_scroll_page;
        $limit = 10;
        $offset = ($pageNo - 1) *$limit;
        $total = 0;
        $search = $data = array();

        $search['statics_title'] = addslashes(Request::get('statics_title', ''));
        $search['statics_status'] = (int)Request::get('statics_status', -1);
        $search['submit'] = (int)Request::get('submit', 0);
        $search['field_get'] = '';

        $dataSearch = Statics::searchByCondition($search, $limit, $offset, $total);
        $paging = $total > 0 ? Pagging::getPager($pageScroll, $pageNo, $total, $limit, $search) : '';

        $cat_1 = (int)strip_tags(self::viewShareVal('CAT_ID_BAIVIET'));
        $data_cat_1 = [];
        if ($data_cat_1 > 0){
            $data_search_1['statics_catid'] = $cat_1;
            $data_search_1['statics_order_no'] = 'asc';
            $data_cat_1 = Statics::getFocus($data_search_1, $limit = 10);
        }
        $cat_2 = (int)strip_tags(self::viewShareVal('CAT_ID_VIDEO'));
        $data_cat_2 = [];
        if ($data_cat_2 > 0){
            $data_search_2['statics_catid'] = $cat_2;
            $data_search_2['statics_order_no'] = 'asc';
            $data_cat_2 = Statics::getFocus($data_search_2, $limit = 2);
        }


        if($search['statics_title'] == '')
        {
            return view('Statics::content.pageSearch',[
                'data_cat_1' => $data_cat_1,
                'data_cat_2' => $data_cat_2
            ]);
        }


        return view('Statics::content.pageSearch',[
            'data' => $dataSearch,
            'search' => $search,
            'paging' => $paging,
            'data_cat_1' => $data_cat_1,
            'data_cat_2' => $data_cat_2
        ]);
    }

    public function pageContact($catid){
        $dataCate = array();
        if ($catid > 0){
            $dataCate = Category::getById($catid);
        }

        $text_1 = self::viewShareVal('TEXT_1');
        $text_2 = self::viewShareVal('TEXT_2');
        $text_3 = self::viewShareVal('TEXT_3');
        $text_4 = self::viewShareVal('TEXT_4');
        $text_5 = self::viewShareVal('TEXT_5');
        $text_6 = self::viewShareVal('TEXT_6');
        $text_7 = self::viewShareVal('TEXT_7');

        return view('Statics::content.pageContact',[
            'dataCate' => $dataCate,
            'text_1' => $text_1,
            'text_2' => $text_2,
            'text_3' => $text_3,
            'text_4' => $text_4,
            'text_5' => $text_5,
            'text_6' => $text_6,
            'text_7' => $text_7,

        ]);
    }

    public function pageContactPost(){
        if (!empty($_POST)){
           $contact_name  = addslashes(Request::get('contact_name', ''));
           $contact_phone = addslashes(Request::get('contact_phone', ''));
           $contact_email = addslashes(Request::get('contact_email', ''));
           $contact_local = addslashes(Request::get('contact_local', ''));
           $contact_content = addslashes(Request::get('contact_content', ''));
           $contact_created = time();

           if ($contact_name != '' && $contact_phone != '' && $contact_content != ''){
               $dataInput = array(
                   'contact_name' => $contact_name,
                   'contact_phone' => $contact_phone,
                   'contact_email' => $contact_email,
                   'contact_local' => $contact_email,
                   'contact_content' => $contact_content,
                   'contact_status' => 1,
                   'contact_created' => $contact_created,
               );
               $query = Contact::addData($dataInput);

               if ($query > 0){
                   Utility::messages('messages', 'Cảm ơn bạn đã đăng ký. Chúng tôi sẽ liên hệ với bạn sớm nhất');
                   return Redirect::route('SIndex');
               }
           }
           else{
               Utility::messages('messages' , 'Thông tin liên hệ chưa chính sác. Bạn hãy đăng ký lại!');
               return Redirect::route('SIndex');
           }
        }
    }

}