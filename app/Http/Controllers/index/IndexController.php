<?php


namespace App\Http\Controllers\index;


use App\Http\Controllers\Controller;
use App\Model\Page;
use App\Model\TCG\ExpertizeType;
use Doctrine\DBAL\Query\QueryBuilder;
use Illuminate\Database\Eloquent\Model;

class IndexController extends Controller
{

    public function __invoke()
    {
        $expertize = ExpertizeType::getExpertizeWithItems();
        $expertizeItems = Page::getItemsGroupByExpertize();
        $about = Page::where(Page::FIELD_SLUG, Page::SLUG_ABOUT_PAGE)->first();
        $doccumentsPage = Page::where(Page::FIELD_SLUG, Page::SLUG_DOCCUMENTS_PAGE)->first();
        $data = [
            'doccumentsPage' => $doccumentsPage,
            'about' => $about,
            'expertize' => $expertize,
            'expertizeItems' => $expertizeItems,
        ];
        return view('/page/index', $data);
    }
}

