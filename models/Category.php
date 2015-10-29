<?php namespace Seven9\Project\Models;

use Model;
use Str;

/**
 * Category Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'seven9_project_categories';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['name','slug'];

    protected $rules=[
                'name'  => 'required',
                'slug'  => 'required|between:3,64|unique:seven9_project_categories'
    ];

    /**
     * @var array Relations
     */
    public $belongsToMany = [
        'projects'      => ['Seven9\Project\Models\Project', 'table' => 'projects_categories', ],
    ];

    public function beforeValidate()
    {
        if (!$this->exists && !$this->slug) {
            $this->slug=Str::slug($this->name);
        }
    }

    public function afterDelete()
    {
        $this->projects()->detach();
    }

    public function getProjectCountAttribute()
    {
        return $this->projects()->count();
    }
}
