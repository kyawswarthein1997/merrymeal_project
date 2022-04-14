<?php

namespace App\Models;

use App\Models\User;
use App\Models\Donor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donate extends Model
{
    use HasFactory;

    protected $fillable = [
        'donar_name',
        'donation_amount',
        'payment_type',
        'date',
        'donor_id',
    ];

    public function donors(){
        return $this->belongsTo(Donor::class, 'donor_id', 'id');
    }

    // public function users(){
    //     return $this->belongsTo(User::class, 'user_id', 'id');
    // }

}
