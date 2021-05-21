<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birth',
        'email',
        'address',
        'cpf',
    ];

    public function owner() {
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function grades() {
    	return $this->belongsTo(Grade::class, 'grade_id');
    }
}
