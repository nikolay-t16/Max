<?php


namespace App\Http\Controllers\Page;


use App\Http\Controllers\Controller;
use App\Model\Page;
use App\Model\TCG\ExpertiseType;

class PageController extends Controller
{
    public function __invoke($url)
    {
        $page = Page::where(Page::FIELD_SLUG, $url)->first();
        $data = ['page' => $page];
        return view('/page/content', $data);
    }
}
