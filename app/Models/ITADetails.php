<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ITADetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'number_ita',
        'title_name',
        'detail'
    ];

       // ความสัมพันธ์แบบ Many-to-One: ITADetails เป็นของ ITAType
       public function itaType()
       {
           return $this->belongsTo(ITAType::class, 'type_id');
       }

       // ความสัมพันธ์แบบ One-to-Many: ITADetails มี ITALinks หลายรายการ
       public function itaLinks()
       {
           return $this->hasMany(ITALink::class, 'detail_id');
       }
}
