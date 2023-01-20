<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $_newid
 * @property integer $app
 * @property string $_id
 * @property string $_oldid
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $imageUrl
 * @property string $collections
 * @property string $collections_new
 * @property string $startDay
 * @property string $startMonth
 * @property string $startYear
 * @property string $endDay
 * @property string $endMonth
 * @property string $endYear
 * @property string $locationName
 * @property string $location_lat
 * @property string $location_lng
 * @property string $metaData
 * @property App $app
 * @property StoryAsset[] $storyAssets
 * @property Tag[] $tags
 */
class Story extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = '_newid';

    /**
     * @var array
     */
    protected $fillable = ['app', '_id', '_oldid', 'title', 'description', 'image', 'imageUrl', 'collections', 'collections_new', 'startDay', 'startMonth', 'startYear', 'endDay', 'endMonth', 'endYear', 'locationName', 'location_lat', 'location_lng', 'metaData'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function app()
    {
        return $this->belongsTo('App\Models\App', 'app', '_newid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function storyAssets()
    {
        return $this->hasMany('App\Models\StoryAsset', 'story', '_newid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tags()
    {
        return $this->hasMany('App\Models\Tag', 'story', '_newid');
    }
}
