<?php

namespace App\Model\TCG;

use App\Model\Page;
use Illuminate\Database\Eloquent\Model;
use EloquentTypeHinting;

/**
 * Class User
 * @package App\Model
 * @mixin EloquentTypeHinting
 * @property int id
 * @property string image
 * @property string sort
 * @property string name
 *
 */
class ExpertizeType extends Model
{
    const TABLE_NAME = 'expertize_types';
    const FIELD_ID = 'id';
    const FIELD_NAME = 'name';
    const FIELD_IMAGE = 'image';
    const FIELD_SORT = 'sort';

    public static function getExpertizeWithItems() {
        return self::query()
            ->whereIn(
                'id',
                function ($query) {
                    $query->select(Page::FIELD_EXPERTIZE_ID)
                        ->distinct()
                        ->from(Page::TABLE_NAME)
                        ->where(Page::FIELD_EXPERTIZE_ID, '>' ,0);
                    return $query;
                }
            )
            ->orderBy(self::FIELD_SORT)
            ->get();
    }
}
