<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
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
        'image',
        'titlecircuit',
        'imagecircuit',
        'descrip',
        'price',
        'stock',
    ];
    public function cart()
    {
        return $this->belongsTo(cart::class);
    }
    public function catalog()
    {
        return $this->belongsTo(Catalog::class);
    }
}
