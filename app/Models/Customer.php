<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    private static $customer,$image, $directory, $imageName, $extension, $imageUrl;

    public static function newCustomer($request)
    {
        self::$image        = $request->file('image');
        self::$extension    = self::$image->getClientOriginalExtension();
        self::$imageName    = time().'.'.self::$extension; // 13256432.jpg
        self::$directory    = 'upload/nid-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;

        self::$customer = new Customer();
        self::$customer->user_name       = $request->user_name;
        self::$customer->fname       = $request->fname;
        self::$customer->lname       = $request->lname;
        self::$customer->email      = $request->email;
        self::$customer->mobile     = $request->mobile;
        self::$customer->house_no     = $request->house_no;
        self::$customer->road_no     = $request->road_no;
        self::$customer->city     = $request->city;
        self::$customer->state     = $request->state;
        self::$customer->country     = $request->country;
        self::$customer->zip_code     = $request->zip_code;
        self::$customer->date_of_birth	     = $request->date_of_birth;
        self::$customer->gender	     = $request->gender;
        self::$customer->nid          = self::$imageUrl;
        self::$customer->password   = bcrypt($request->password);
        self::$customer->save();
    }
}
