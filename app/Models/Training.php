<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Training extends Model
{
    use HasFactory, Notifiable;

    public function trainee() {
    	return $this->hasMany('App\Models\Trainee');
    }
}
