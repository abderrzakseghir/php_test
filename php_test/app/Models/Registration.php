<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = ['nom','email', 'formation_id'];

    public $timestamps = false;

    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }
}
