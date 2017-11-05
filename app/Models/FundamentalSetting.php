<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class FundamentalSetting extends Model
{
    protected $table = 'fundamental_settings';
    //что разрешаем править
    protected $fillable = [
        'name', 'var', 'value', 'description',
    ];
}