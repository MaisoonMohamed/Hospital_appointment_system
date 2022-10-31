<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    protected $table = 'appointments';
    
    protected $fillable = [
        'name',
        'email',
        'phone',
        'doctor',
        'date',
        'timestart',
        'timeend',
        'message',
        'status',
        'user_id',
    ];

  
  
      public function User() {
        return $this->belongsTo('App\Models\User');
      }
}
