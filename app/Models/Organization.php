<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $table = "organizations";
    protected $fillable = ["id", "name"];

    public function news()
    {
        return $this->hasMany(News::class);
    }
}