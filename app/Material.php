<?php

namespace App;

use Illuminate\Http\UploadedFile;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = ['url', 'name', 'type'];



    public function materiable()
    {
        return $this->morphTo();
    }


    public static function upload(UploadedFile $file)
    {
        $material = static::create([
            'url' => ' ',
            'name' => ' ',
        ]);
        $folder_name = random_int(10, 99);
        $subfolder_name = random_int(10, 99);
        $material_extention = strtolower($file->getClientOriginalExtension());
        $path = $file->storeAs(
            'public\\files\\'. $folder_name . '\\' . $subfolder_name,
            $material->id.'.'.$material_extention);
        $material->url = "/storage/files/$folder_name/$subfolder_name/".$material->id.'.'.$material_extention;
        $material->name = $file->getClientOriginalName();
        $material->save();

        return $material;
    }

    public function bound(string $class, int $id, ?string $type)
    {
        $this->materiable_type = $class;
        $this->materiable_id = $id;
        $this->type = $type;
        $this->save();
    }

    public function unbound()
    {
        $this->materiable_type = null;
        $this->materiable_id = null;
        $this->type = null;
        $this->save();
    }

    public function updateParent(array $oldValues)
    {
        $this->materiable_type = $oldValues['materiable_type'] ?? null;
        $this->materiable_id = $oldValues['materiable_id'] ?? null;
        $this->type = $oldValues['type'] ?? null;
        if (isset($oldValues['old_file'])) {
            $oldValues['old_file']->unbound();
        }
        $this->save();
    }
}
