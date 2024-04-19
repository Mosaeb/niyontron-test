<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    private static $maintenance;
    public static function newRepairRequest($request)
    {
        self::$maintenance = new Maintenance();
        self::$maintenance->name       = $request->name;
        self::$maintenance->email       = $request->email;
        self::$maintenance->phone     = $request->phone;
        self::$maintenance->address       = $request->address;
        self::$maintenance->repairItem       = $request->repairItem;
        self::$maintenance->description    = $request->description;
        self::$maintenance->urgency    = $request->urgency;
        self::$maintenance->comment    = $request->comment;
        self::$maintenance->save();

    }
}
