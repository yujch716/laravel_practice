<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Price extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "buy"; //USERS 테이블 대신 MEMBER_DATA 테이블 사용
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [

    ];
}
