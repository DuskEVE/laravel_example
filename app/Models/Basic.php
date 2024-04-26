<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basic extends Model
{
    use HasFactory;

    protected $table = 'basics';

    protected $fillable = ['name', 'amount', 'NO'];

    // public static function searchAll() {
    //     $datas = [['id'=>1, 'NO'=>0, 'name'=>'test', 'amount'=>1], ['id'=>2, 'NO'=>1, 'name'=>'test02', 'amount'=>10]];
    //     return $datas;
    // }

    // public static function search($id) {
    //     $datas = self::searchAll();
    //     $target = [];
    //     foreach($datas as $data){
    //         if($data['id'] == $id){
    //             $target = $data;
    //             break;
    //         }
    //     }
    //     return $target;
    // }
}

