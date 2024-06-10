<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Governance extends Model
{
    use HasFactory, Sluggable;
    
    protected $guarded =['id'];
    

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // protected $with = ['category'];
    
    public function scopeFilter($query, array $filters) {
        $query->when(($filters['search'] ?? false), function($query, $search) {
            return $query->where('portal', 'like', '%' . $search . '%')
                         ->orWhere('deskripsi', 'like', '%' . $search . '%');
        });
        $query->when(($filters['category'] ?? false), function($query, $category) {
            return  $query->whereHas('category', function($query) use ($category) {
                    $query->where('slug', $category);
            });
        });
    }      

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'portal'
            ]
        ];
    }

}
