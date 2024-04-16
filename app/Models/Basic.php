<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basic extends Model
{
    use HasFactory;

    public static function searchAll() {
        $datas = [['NO'=>0, 'name'=>'test', 'amount'=>1]];
        return $datas;
    }
}

