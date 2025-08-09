<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // protected $table = 'categories';
    // protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'slug',
        'type',
        'status',
        'image',
    ];

    // protected $attributes = [
    //     'type' => 'Blog',
    //     'status' => 'Publish',
    // ];

    # mutator => set for database value with insert.
    // public function setNameAttribute($value)
    // {
    //     // $this->attributes['name'] = ucfirst($value);
    //     $this->attributes['slug'] = strtolower($value);
    // }

    # Accessor view for data.

    // public function getNameAttribute($value)
    // {
    //     // return ucfirst($value);
    //     $slug = $this->attributes['slug'];
    //     return ucfirst($slug);
    // }
    
    # Default value

    // public function getType()
    // {
    //     return $this->type ?? 'Blog';
    // }

    # Default value

    // public function getStatus()
    // {
    //     return $this->status ?? 'Publish';
    // }

    // RelationShip


    // public function blogs(){
    //     return $this->belongsTo(Blog::class);
    // }

    public function gallery(){
        return $this->hasMany(Gallery::class,'cat_id');
    }

    public function blogs(){
        return $this->hasMany(Blog::class,'cat_id');
    }

    public function services(){
        return $this->hasMany(Service::class,'cat_id');
    }


}
