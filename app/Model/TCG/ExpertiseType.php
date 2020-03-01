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
class ExpertiseType extends Model
{
    const TABLE_NAME = 'expertise_types';
    const FIELD_ID = 'id';
    const FIELD_NAME = 'name';
    const FIELD_IMAGE = 'image';
    const FIELD_SORT = 'sort';

    public static function getExpertiseWithItems() {
        return self::query()
            ->whereIn(
                'id',
                function ($query) {
                    $query->select(Page::FIELD_EXPERTISE_TYPE_ID)
                        ->distinct()
                        ->from(Page::TABLE_NAME)
                        ->where(Page::FIELD_EXPERTISE_TYPE_ID, '>' ,0);
                    return $query;
                }
            )
            ->orderBy(self::FIELD_SORT)
            ->get();
    }
}
