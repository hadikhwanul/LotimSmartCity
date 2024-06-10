<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagAgenda extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function agenda() {
        return $this->hasMany(Agenda::class, 'tag_id');
    }
}
