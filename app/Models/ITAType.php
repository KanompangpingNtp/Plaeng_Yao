<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ITAType extends Model
{
    use HasFactory;

     // ระบุฟิลด์ที่สามารถกรอกข้อมูลได้
     protected $fillable = ['type_name'];

     // ความสัมพันธ์แบบ one-to-many กับ ITADetails
     public function itADetails()
     {
         return $this->hasMany(ITADetails::class, 'type_id');
     }

}
