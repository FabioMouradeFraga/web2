<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
    ];

    public function frequencies() {
        return $this->hasMany(Frequency::class, 'grade_id');
    }
    
    public function owner() {
    	return $this->belongsTo(User::class, 'user_id');
    }
}
