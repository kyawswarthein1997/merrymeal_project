<?php

namespace App\Models;

use App\Models\Meal;
use App\Models\User;
use App\Models\Partner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin_Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'partner_id',
        'meal_id',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function partners(){
        return $this->belongsTo(Partner::class, 'partner_id', 'id');
    }

    public function meals(){
        return $this->belongsTo(Meal::class, 'meal_id', 'id');
    }
}
