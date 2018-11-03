<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_language',
        'title',
        'description',
        'meta_description',
        'meta_keyword',
        'meta_author',
        'meta_viewport',
        'image_url',
        'image_alt',
        'order',
        'video_url'];
    }