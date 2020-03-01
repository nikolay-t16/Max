<?php


namespace App\Model;

use App\Model\TCG\ExpertiseType;
use EloquentTypeHinting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class User
 * @package App\Mappers
 * @mixin EloquentTypeHinting
 * @property int id
 * @property int show_in_menu
 * @property int author_id
 * @property string title
 * @property string excerpt
 * @property string body
 * @property string image
 * @property string slug
 * @property string meta_description
 * @property string meta_keywords
 * @property string status
 * @property string created_at
 * @property string updated_at
 * @property int parent_id
 * @property int expertise_type_id
 * @property BelongsTo expertise
 * @property BelongsTo parent
 *
 */
class Page extends Model
{
    const TABLE_NAME = 'pages';
    const FIELD_ID = 'id';
    const FIELD_SHOW_IN_MENU = 'show_in_menu';
    const FIELD_SORT = 'sort';
    const FIELD_AUTHOR_ID = 'author_id';
    const FIELD_TITLE = 'title';
    const FIELD_EXCERPT = 'excerpt';
    const FIELD_BODY = 'body';
    const FIELD_IMAGE = 'image';
    const FIELD_SLUG = 'slug';
    const FIELD_META_DESCRIPTION = 'meta_description';
    const FIELD_META_KEYWORDS = 'meta_keywords';
    const FIELD_STATUS = 'status';
    const FIELD_UPDATED_AT = 'updated_at';
    const FIELD_PARENT_ID = 'parent_id';
    const FIELD_EXPERTISE_TYPE_ID = 'expertise_type_id';
    const SLUG_EXPERTISE_PAGE = 'expertise';
    const SLUG_SERVICE_PAGE = 'service';
    const SLUG_ABOUT_PAGE = 'about';
    const SLUG_DOCUMENTS_PAGE = 'documents';
    protected static $expertisePageId = null;

    /**
     * @return BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo('App\Model\Page');
    }

    /**
     * @return BelongsTo
     */
    public function expertise()
    {
        return $this->belongsTo('App\Model\TCG\ExpertiseType', self::FIELD_EXPERTISE_TYPE_ID);
    }

    /**
     * @return Page[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function getMenuTree()
    {
        $res = [];
        $items = self::all()
            ->where(self::FIELD_SHOW_IN_MENU, 1)
            ->sortBy(self::FIELD_SORT);
        foreach ($items as $item) {
            $res[$item->parent_id][$item->id] = $item;
        }

        return $res;
    }

    public static function getExpertisePageId(): int
    {
        if (!self::$expertisePageId) {
            self::$expertisePageId = self::where(self::FIELD_SLUG, self::SLUG_EXPERTISE_PAGE)->first()->id;
        }
        return self::$expertisePageId;
    }

    public static function getItemsGroupByExpertise(): array {
        $result = [];
        $pages = Page::query()
            ->where(Page::FIELD_PARENT_ID, Page::getExpertisePageId())
            ->orderBy(self::FIELD_SORT)
            ->get();
        foreach ($pages as $page) {
            /* @var $page Page */
            $result[$page->expertise_type_id][] = $page;
        }
        return $result;
    }
}
