<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderstatus extends Model
{
    use HasFactory;
    protected $table = 'order_status';
    public $timestamps = false;

    public static $enum = ['ordered', 'in process', 'inroute', 'delivered'];

    public static function getEnumValues()
    {
        return self::$enum;
    }
}
