<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';//не обязательно если имя модели в ед числе совпад с имен табл в множ числе
    public $timestamps = TRUE;// автоматическое заполнение полей create и update
    protected $fillable = ['name'];//список полей для которых разрешенно массовое заполнение
}
