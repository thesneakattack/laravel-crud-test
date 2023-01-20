<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $_oldid
 * @property integer $parentCollection
 * @property string $title
 * @property string $stories
 * @property string $stories_new
 * @property string $subTitle
 * @property string $mainImage
 * @property boolean $position
 * @property Collection $collection
 */
class SubCollection extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['_oldid', 'parentCollection', 'title', 'stories', 'stories_new', 'subTitle', 'mainImage', 'position'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function collection()
    {
        return $this->belongsTo('App\Models\Collection', 'parentCollection');
    }
}
