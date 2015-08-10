<?php

namespace LawGrabber\Laws;

use Illuminate\Database\Eloquent\Model;

class Issuer extends Model
{
    const FIELD_NAME = 'Видавники';

    public $incrementing = false;
    public $timestamps = false;
    public $primaryKey = 'name';
    public $fillable = ['id', 'name', 'full_name', 'group_name', 'website', 'url', 'international'];
}

