<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryType extends Model
{
    protected $table = 'category_type';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'title',
        'description'];
}
