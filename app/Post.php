<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    protected $with = ['creator'];

    public function creator() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function images() {
        return $this->hasMany(Image::class);
    }

    public function uploadImages($photos) {
        foreach ($photos as $photo) {
            $photoName = 'images/' . $photo->store('', 'images');
            $this->images()->create([
                'url' => $photoName
            ]);
        }
    }

    public function deleteImages() {
        $this->images->each->delete();
    }

}
