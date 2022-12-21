<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Consumer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_key',
        'firstname',
        'middlename',
        'lastname',
        'gender',
        'birthday',
        'phone_number',
        'civil_status',
        'name_of_spouse',
        'barangay',
        'purok',
        'household_no',
        'first_reading',
        'consumer_type',
        'serial_no',
        'brand',
        'status'
    ];

    static function getAllBarangayPuroks()
   {
       $results = DB::table('barangay_puroks')
           ->get();
           
       $list = array();
       if (count($results)) {
           foreach ($results as $key => $item) {
               $list[$item->barangay][] = $item->purok;
           }
       }

       return $list;
   }

}