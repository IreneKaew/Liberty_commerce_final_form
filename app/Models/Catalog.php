<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'title',

    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'users_has_catalogs');
    }
}
