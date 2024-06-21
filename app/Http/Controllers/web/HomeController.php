<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AdvertisementModel;
use App\Models\AdvertisementProductModel;
use App\Models\AlbumModel;
use App\Models\BannerModel;
use App\Models\Category;
use App\Models\CollectionModel;
use App\Models\CollectionProductModel;
use App\Models\FooterBlog;
use App\Models\PostsModel;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductInterestModel;
use App\Models\ReviewFeedbackModel;
use App\Models\Searches;
use App\Models\ReviewImageModel;
use App\Models\ReviewModel;
use App\Models\StylingImageModel;
use App\Models\StylingModel;
use App\Models\StylingProductModel;
use App\Models\VideoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function home()
    {
        return view('web.home.index');
    }
    public function hotSale(){
        return view('web.hot-sale.index');
    }
    public function cameraVideo() {
        return view('web.camera-video.index');
    }
    public function contact() {
        return view('web.contact.index');
    }
    public function introduction()
    {
        return view('web.introduction.index');
    }
    public function tinTuc()
    {
        return view ('web.tin-tuc.index');
    }

    public function phongCachNoiThat()
    {
        return view('web.phong-cach-noi-that.index');
    }
}
