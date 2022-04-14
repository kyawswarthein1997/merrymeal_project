<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'caregiver_name',
        'caregiver_phone',
        'caregiver_address',
    ];

     public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
