<?php namespace Seven9\Project\Models;

use Model;

/**
 * Project Model
 */
class Project extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'seven9_project_projects';

    /**
     * @var array The model validation rules
     */
    public $rules=[
            'name'          => 'required',
            'website'       => 'url',
            'developed_by'  => 'required',
    ];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
                    'name',
                    'type',
                    'description',
                    'website',
                    'developed_by',
                    'links',
                        ];
    protected $jsonable=['links'];

    /**
     * @var array Relations
     */
    public $attachOne = [
        'logo'  => 'System\Models\File',
    ];


    public $attachMany = [
        'images'    => 'System\Models\File',
    ];

    public $belongsToMany = [
        'categories'      => ['Seven9\Project\Models\Category', 'table' => 'projects_categories', ],
    ];
}
