<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'imgPath',
        'link_to_project',
        'type_id'
    ];

    public function type() {
        return $this->belongsTo(Type::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

}
