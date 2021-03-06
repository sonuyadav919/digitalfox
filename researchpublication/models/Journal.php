<?php namespace Digitalfox\Researchpublication\Models;

use Model;

/**
 * Journal Model
 */
class Journal extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'digitalfox_researchpublication_journals';

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
