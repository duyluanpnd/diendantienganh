<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Category extends Model
{
    use Sluggable;

    protected $table   = 'categories';

    protected $guarded =  ['*'];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;

    const HOT = 1;
    const NOT_HOT = 0;

    protected $_status = [
        1 => [
            'name' => 'Public',
            'class' => 'label-danger'
        ],
        0 => [
            'name' => 'Private',
            'class' => 'label-default'
        ],
    ];

    protected $_hot = [
        1 => [
            'name' => 'Nổi bật',
            'class' => 'label-success'
        ],
        0 => [
            'name' => 'Không',
            'class' => 'label-default'
        ],
    ];

    public function getStatus()
    {
        return Arr::get($this->_status, $this->active, '[N\A]');
    }

    public function getHot()
    {
        return Arr::get($this->_hot, $this->hot, 'N\A');
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function childs()
    {
        return $this->hasMany(Category::class, 'parent_id')->with('childs');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
