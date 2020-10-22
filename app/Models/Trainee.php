<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Trainee extends Model
{
    use HasFactory, Notifiable;

    public function training() {
    	return $this->belongsTo('App\Models\Training');
    }
}
