<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    //Possible to fill everything from the post form
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
