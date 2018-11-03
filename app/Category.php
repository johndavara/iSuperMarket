<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_parent_category',
        'id_language',
        'name',
        'description',
        'meta_description',
        'meta_keywords',
        'meta_author',
        'meta_viewport'];
}
