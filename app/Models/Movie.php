<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'logo', 'year', 'tags', 'production', 'director', 'country', 'description', 'user_id', 'email', 'runtime', 'actors'];

    public function scopeFilter($query, array $filters){
        if($filters['tag'] ?? false){
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if($filters['actor'] ?? false){
            $query->where('actors', 'like', '%' . request('actor') . '%');
        }

        if($filters['search'] ?? false){
            $query->where('title' , 'like', '%' . request('search') . '%')
            ->orWhere('actors', 'like', '%' . request('search') . '%')
            ->orWhere('director', 'like', '%' . request('search') . '%')
            ->orWhere('year', 'like', '%' . request('search') . '%')
            ->orWhere('description' , 'like' , '%' . request('search') . '%')
            ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
