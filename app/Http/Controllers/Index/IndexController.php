<?php


namespace App\Http\Controllers\Index;


use App\Http\Controllers\Controller;
use App\Model\Page;
use App\Model\TCG\ExpertiseType;
use Doctrine\DBAL\Query\QueryBuilder;
use Illuminate\Database\Eloquent\Model;

class IndexController extends Controller
{

    public function __invoke()
    {
        $expertise = ExpertiseType::getExpertiseWithItems();
        $expertiseItems = Page::getItemsGroupByExpertise();
        $about = Page::where(Page::FIELD_SLUG, Page::SLUG_ABOUT_PAGE)->first();
        $documentsPage = Page::where(Page::FIELD_SLUG, Page::SLUG_DOCUMENTS_PAGE)->first();
        $data = [
            'documentsPage' => $documentsPage,
            'about' => $about,
            'expertise' => $expertise,
            'expertiseTitle' => 'Популярные экспертизы',
            'expertiseItems' => $expertiseItems,
        ];
        return view('/page/index', $data);
    }
}
