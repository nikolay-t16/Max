<?php

namespace App\Http\Controllers\Service;


use App\Http\Controllers\Controller;
use App\Model\Page;
use App\Model\TCG\ExpertiseType;

class ServiceItemController extends Controller
{
    public function __invoke($service)
    {
        $page = Page::where(Page::FIELD_SLUG, $service)->first();
        $serviceItems = Page::orderBy(Page::FIELD_SORT)
            ->where(
                [
                    Page::FIELD_PARENT_ID => $page->parent_id,
                    [Page::FIELD_ID, '!=', $page->id],
                ]
            )
            ->get();

        $data = [
            'page' => $page,
            'serviceItems' => $serviceItems,
        ];
        return view('/page/service/item', $data);
    }
}
