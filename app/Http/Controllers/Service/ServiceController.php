<?php

namespace App\Http\Controllers\Service;


use App\Http\Controllers\Controller;
use App\Model\Page;
use App\Model\TCG\ExpertiseType;

class ServiceController extends Controller
{
    public function __invoke()
    {
        $page = Page::where(Page::FIELD_SLUG, Page::SLUG_SERVICE_PAGE)->first();
        $serviceItems = Page::orderBy(Page::FIELD_SORT)
            ->where(Page::FIELD_PARENT_ID, $page->id)
            ->get();

        $data = [
            'page' => $page,
            'serviceItems' => $serviceItems,
        ];
        return view('/page/service/index', $data);
    }
}
