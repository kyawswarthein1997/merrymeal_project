<?php

namespace App\Models;

use App\Models\User;
use App\Models\Partner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meal extends Model
{
    use HasFactory;

    protected $fillable = [
        'meal_name',
        'meal_type',
        'meal_image',
        'partner_id',
        'user_id',
    ];

    public function partners(){
        return $this->belongsTo(Partner::class, 'partner_id', 'id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
