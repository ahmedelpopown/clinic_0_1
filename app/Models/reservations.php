<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservations extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'Phone', 'email', 'id_doctor'];

    public function doctors(){
        return $this->belongsTo(doctors::class);
    }
}

 