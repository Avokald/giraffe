<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Image extends Material
{
    protected $fillable = ['url', 'name', 'type', 'alt'];

    public function imageable()
    {
        return $this->morphTo();
    }

    public static function upload(UploadedFile $file)
    {
        $image = static::create([
            'url' => public_path('images/404.png'),
            'name' => '404.png',
        ]);
        $folder_name = random_int(10, 99);
        $subfolder_name = random_int(10, 99);
        $image_extention = strtolower($file->getClientOriginalExtension());
        $path = $file->storeAs(
            'public\\images\\'. $folder_name . '\\' . $subfolder_name,
            $image->id.'.'.$image_extention);
        $image->url = "/storage/images/$folder_name/$subfolder_name/".$image->id.'.'.$image_extention;
        $image->name = $file->getClientOriginalName();
        $image->save();

        return $image;
    }

    public function updateParent(array $oldValues)
    {
        $this->imageable_type = $oldValues['imageable_type'];
        $this->imageable_id = $oldValues['imageable_id'];
        $this->type = $oldValues['type'];
        if ($oldValues['old_banner']) {
            $oldValues['old_banner']->delete();
        }
        $this->save();
    }


}
