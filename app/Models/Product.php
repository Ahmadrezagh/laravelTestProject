<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use Sluggable;

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
    protected $fillable = [
        'name',
        'image',
        'slug',
        'in_stock',
        'price',
        'description',
        'ingredients',
        'nutrition'
    ];

    public function getPageUrlAttribute()
    {
        return route('menu.show',$this->slug);
    }

    public function scopeSearch($query,$key)
    {
        if($key)
        {
            return $query->where('name','like','%'.$key.'%');
        }
        return $query;
    }

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }

    public function scopeFilterBySlug($query,$slug = null)
    {
        if($slug)
        {
            return $query->where('slug','=',$slug);
        }
        return $query;
    }
}
