<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function business(){
        return $this->belongsTo('App\Models\Business');
    }
}
