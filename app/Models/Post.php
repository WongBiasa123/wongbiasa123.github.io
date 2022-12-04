<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body', 'slug', 'category_id'];
    protected $guarded = ['id'];
    protected $with = ['mapel', 'author'];


    public function scopeFilter($posts)
    {
        if(request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
            }
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
            'source' => 'title'
            ]
        ];
    }
}
