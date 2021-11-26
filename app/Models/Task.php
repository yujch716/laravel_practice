<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    //title과 body만 넣을수 있음
    protected $fillable = ['title', 'body', 'user_id']; 

    //title만 못 넣음
    //protected $guraded =  ['title'];
}
