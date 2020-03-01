<?php

namespace App\Http\Controllers\Expertise;


use App\Http\Controllers\Controller;
use App\Model\Page;
use App\Model\TCG\ExpertiseType;

class ExpertiseItemController extends Controller
{
    public function __invoke($expertise)
    {
        $page = Page::find(6);
        $expertiseItems = Page::orderBy(Page::FIELD_SORT)
            ->where(
                [
                    Page::FIELD_EXPERTISE_TYPE_ID => $page->expertise_type_id,
                    [Page::FIELD_ID, '!=', $page->id],
                ]
            )
            ->get();

        $data = [
            'page' => $page,
            'expertiseTitle' => $page->title,
            'expertiseItems' => $expertiseItems,
            'hideAllExpertiseBtn' => true,
        ];
        return view('/page/expertise/item', $data);
    }
}
