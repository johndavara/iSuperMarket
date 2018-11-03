<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'id',
        'id_post',
        'id_category',
        'comment'];
}
