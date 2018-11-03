<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'image_url',
        'image_alt',
        'id_language',
        'image_order',
        'image_tooltip'];
}
