<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ITADetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'title_name',
        'url_name',
        'url_link',
        'detail'
    ];

    // ความสัมพันธ์แบบ many-to-one กับ ITAType
    public function iTAType()
    {
        return $this->belongsTo(ITAType::class, 'type_id');
    }
}
