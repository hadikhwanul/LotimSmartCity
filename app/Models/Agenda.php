<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory, Sluggable;
    
        //protected $fillable = ['title','excerpt','body'];
        protected $guarded = ['id'];
        protected $with = ['tagAgenda'];
    
        public function tagAgenda() {
            return $this->belongsTo(TagAgenda::class, 'tag_id');
        }
    

        public function getRouteKeyName()
        {
            return 'slug';
        }
    
        public function scopeFilter($query, array $filters) {
            $query->when($filters['search'] ?? false, function($query, $search) {
               return $query->where(function($query) use ($search) {
                    $query->where('title', 'like', '%' . $search . '%')
                                ->orWhere('body', 'like', '%' . $search . '%');
                });
            });
    
            $query->when($filters['tag'] ?? false, function ($query, $tagAgenda){
                return $query->whereHas('tag', function($query) use ($tagAgenda){
                    $query->where('slug', $tagAgenda);
                });
            });
    
        }
    
        public function sluggable(): array
        {
            return [
                'slug' => [
                    'source' => 'title'
                ]
            ];
        }
}
