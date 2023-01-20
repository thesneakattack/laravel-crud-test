<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $story
 * @property string $_oldid
 * @property string $storyid
 * @property string $value
 * @property Story $story
 */
class Tag extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['story', '_oldid', 'storyid', 'value'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function story()
    {
        return $this->belongsTo('App\Models\Story', 'story');
    }
}
