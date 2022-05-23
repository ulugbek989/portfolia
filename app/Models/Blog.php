<?php

namespace App\Models;

use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function  getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title_uz')
            ->saveSlugsTo('slug')
            ->slugsShouldBeNoLongerThan(100)
            ->usingLanguage('en');
    }

   public function getRouteKeyName()
   {
      return 'slug';
  }
}
