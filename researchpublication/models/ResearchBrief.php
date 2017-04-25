<?php namespace Digitalfox\Researchpublication\Models;

use Model;

/**
 * ResearchBriefs Model
 */
class ResearchBrief extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'digitalfox_researchpublication_research_briefs';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
