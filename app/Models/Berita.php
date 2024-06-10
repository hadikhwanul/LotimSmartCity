<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Berita extends Model
{
    
        use HasFactory, Sluggable;
    
        //protected $fillable = ['title','excerpt','body'];
        protected $guarded = ['id'];
        protected $with = ['tag'];
    
        public function tag() {
            return $this->belongsTo(Tag::class);
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
    
            $query->when($filters['tag'] ?? false, function ($query, $tag){
                return $query->whereHas('tag', function($query) use ($tag){
                    $query->where('slug', $tag);
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

