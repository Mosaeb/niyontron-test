<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAuth extends Model
{
    use HasFactory;
    private static $property,$image, $directory, $imageName, $extension, $imageUrl;
    public static function newProperty($request)
    {
        self::$image        = $request->file('propertyImages');
        self::$extension    = self::$image->getClientOriginalExtension();
        self::$imageName    = time().'.'.self::$extension;
        self::$directory    = 'upload/property-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;

        self::$property = new PropertyAuth();
        self::$property->propertyType       = $request->propertyType;
        self::$property->propetyAddress       = $request->propetyAddress;
        self::$property->propetyCity     = $request->propetyCity;
        self::$property->propetyState       = $request->propetyState;
        self::$property->propetyZip       = $request->propetyZip;
        self::$property->LName    = $request->LName;
        self::$property->Lmail    = $request->Lmail;
        self::$property->Lnumber    = $request->Lnumber;
        self::$property->details    = $request->details;
        self::$property->propertyImages         = self::$imageUrl;
        self::$property->save();

    }

    public static function updatePropertyAuth($request, $id)
    {
        self::$property = PropertyAuth::find($id);
        if ($request->file('propertyImages'))
        {
            self::$image        = $request->file('propertyImages');
            self::$extension    = self::$image->getClientOriginalExtension();
            self::$imageName    = time().'.'.self::$extension;
            self::$directory    = 'upload/property-images/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl     = self::$directory.self::$imageName;
        }
        else
        {
            self::$imageUrl = self::$property->propertyImages;
        }
        self::$property->propertyType       = $request->propertyType;
        self::$property->propetyAddress       = $request->propetyAddress;
        self::$property->propetyCity     = $request->propetyCity;
        self::$property->propetyState       = $request->propetyState;
        self::$property->propetyZip       = $request->propetyZip;
        self::$property->LName    = $request->LName;
        self::$property->Lmail    = $request->Lmail;
        self::$property->Lnumber    = $request->Lnumber;
        self::$property->details    = $request->details;
        self::$property->propertyImages         = self::$imageUrl;
        self::$property->save();
    }

    public static function deletePropertyAuth($id)
    {
        self::$property = PropertyAuth::find($id);
        if (file_exists(self::$property->propertyImages))
        {
            unlink(self::$property->propertyImages);
        }
        self::$property->delete();
    }
}
