<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $story
 * @property integer $asset
 * @property string $_oldid
 * @property string $caption
 * @property boolean $position
 * @property string $annotations
 * @property Story $story
 * @property Asset $asset
 */
class StoryAsset extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['story', 'asset', '_oldid', 'caption', 'position', 'annotations'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function story()
    {
        return $this->belongsTo('App\Models\Story', 'story');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function asset()
    {
        return $this->belongsTo('App\Models\Asset', 'asset');
    }
}
