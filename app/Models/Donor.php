<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'donation_plan',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
