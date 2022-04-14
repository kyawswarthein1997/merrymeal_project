<?php

namespace App\Models;

use App\Models\Admin_Partner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
       'user_id',
       'partnership_organization',
       'partnership_timeline',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
