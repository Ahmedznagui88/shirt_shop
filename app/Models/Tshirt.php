<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tshirt extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'brand', 'logo', 'size', 'user_id', 'gender_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function gender(){
        return $this->belongsTo(Gender::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

}

