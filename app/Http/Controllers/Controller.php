<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Helori\LaravelSeo\Facades\Seo;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $_seo;

    public function __construct()
    {
        $this->_seo = new Seo();
        $this->_globalSeo();
        $data['main_menu'] = $this->_getMainMenu();

        View::share($data);
    }

    private function _globalSeo()
    {
        $this->_seo::set('global-title', 'Website name');
        $this->_seo::set('global-title-without-tagline', 'Website');
        $this->_seo::set('global-description', 'Website description');
        $this->_seo::set('global-keywords', config('app.keywords'));
        $this->_seo::set('global-image', 'image');
        $this->_seo::set('global-author', config('app.author'));
        $this->_seo::set('global-copyright', config('app.copyright'));
        $this->_seo::set('global-language', config('app.language'));
        $this->_seo::set('global-distribution', config('app.distribution'));
        $this->_seo::set('global-refresh', config('app.refresh'));
        $this->_seo::set('global-revisit-after', config('app.revisit_after'));
        $this->_seo::set('global-rating', config('app.rating'));

        $this->_seo::set('og-type', 'article');
        $this->_seo::set('og-locale', 'vi_VN');
        $this->_seo::set('fb-app-id', config('app.fb_app_id'));
        $this->_seo::set('fb-pages', config('app.fb_pages'));
        $this->_seo::set('fb-page-url', config('app.fb_page_url'));
    }

    private function _getMainMenu()
    {
        return '123';
    }
}
