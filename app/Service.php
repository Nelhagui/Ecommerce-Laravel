<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'name', 'description', 'price', 'category_id', 'user_id', 'imagedescription'
    ];

}
