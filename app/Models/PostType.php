<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    use HasFactory;

    protected $fillable = ['type_name'];

    public function postDetails()
    {
        return $this->hasMany(PostDetail::class);
    }
}
