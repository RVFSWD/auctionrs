<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Newbid extends Model
{
    use HasFactory;

    // LearnWebCode ###############
    // protected $fillable = ['user_name', 'bid', 'user_id'];


    // Emmanuel #############
    // protected $guarded = [];

    // public function saveNewbid($data) {
    //     return $this->create($data);
    // }

    // Funda ############
    // protected $table = 'newbids';

    protected $fillable = ['user_name', 'bid', 'user_id'];

}
