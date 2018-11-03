<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelatedPost extends Model
{
    protected $table = 'relatedpost';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'id_parent_post',
        'id_related_post',
        'order'];
}
