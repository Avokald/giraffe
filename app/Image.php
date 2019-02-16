<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{ // TODO elementses label, placeholder & etc.
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

    public function bound(string $class, int $id, ?string $type)
    {
        $this->imageable_type = $class;
        $this->imageable_id = $id;
        $this->type = $type;
        $this->save();
    }

    public function unbound()
    {
        $this->imageable_type = null;
        $this->imageable_id = null;
        $this->type = null;
        $this->save();
    }

    public function updateParent(array $oldValues)
    {
        $this->imageable_type = $oldValues['imageable_type'] ?? null;
        $this->imageable_id = $oldValues['imageable_id'] ?? null;
        $this->type = $oldValues['type'] ?? null;
        if (isset($oldValues['old_image'])) {
            $oldValues['old_image']->unbound();
        }
        $this->save();
    }


}
