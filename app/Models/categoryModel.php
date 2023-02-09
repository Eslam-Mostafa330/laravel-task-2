<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class categoryModel extends Model
{
    use HasFactory;
    protected $table  = "categories";
    public $timestamps = false;
    protected $fillable = [
        "name"
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => strtolower($value),
        );
    }
}
