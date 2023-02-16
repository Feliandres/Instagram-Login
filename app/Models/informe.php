<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'information',
        'image',
        'user_id'
    ];
    
    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
