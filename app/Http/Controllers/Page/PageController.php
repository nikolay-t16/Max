<?php


namespace App\Http\Controllers\Page;


use App\Http\Controllers\Controller;
use App\Model\Page;
use App\Model\TCG\ExpertiseType;

class PageController extends Controller
{
    public function __invoke($url)
    {
        $page = Page::where(Page::FIELD_SLUG, $url);
        $expertise = ExpertiseType::getExpertiseWithItems();
        $expertiseItems = Page::getItemsGroupByExpertise();

        $data = [
            'page' => $page,
            'expertise' => $expertise,
            'expertiseItems' => $expertiseItems,
            'hideAllExpertiseBtn' => true,
        ];
        return view('/page/pages-layout/expertise', $data);
    }
}
