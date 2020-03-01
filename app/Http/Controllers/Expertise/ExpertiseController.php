<?php

namespace App\Http\Controllers\Expertise;


use App\Http\Controllers\Controller;
use App\Model\Page;
use App\Model\TCG\ExpertiseType;

class ExpertiseController extends Controller
{
    public function __invoke()
    {
        $page = Page::where(Page::FIELD_SLUG, 'expertise')->first();
        $expertise = ExpertiseType::getExpertiseWithItems();
        $expertiseItems = Page::getItemsGroupByExpertise();
        $data = [
            'page' => $page,
            'expertise' => $expertise,
            'expertiseTitle' => $page->title,
            'expertiseItems' => $expertiseItems,
            'hideAllExpertiseBtn' => true,
        ];
        return view('/page/expertise/index', $data);
    }
}
