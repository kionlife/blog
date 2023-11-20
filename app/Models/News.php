<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Http;

class News extends Model
{
    use SoftDeletes;

    protected $hidden = ["deleted_at"];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'text',
        'image',
    ];


    public static function getRandomImageFromUnsplash()
    {
        $response = Http::get('https://api.unsplash.com/photos/random', [
            'client_id' => config('unsplash.access_key'),
            'query' => 'nature',
            'orientation' => 'landscape'
        ]);

        if ($response->successful()) {
            return $response->json()['urls']['regular'];
        }

        return null;
    }
}
