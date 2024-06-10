<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Environment extends Model
{
    use HasFactory, Sluggable;
    
    protected $guarded =['id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'portal'
            ]
        ];
    }

    protected $fillable = [
        'portal', // Add 'portal' to the fillable array
        'slug',
        'alamat',
        'link',
        'status',
        'deskripsi',
    ];
}
