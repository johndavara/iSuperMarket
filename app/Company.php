<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    protected $primaryKey = 'id';
    protected $fillable = [
        'company_name',
        'company_logo',
        'company_telephone',
        'company_email',
        'company_address',
        'company_facebook',
        'company_youtube',
        'company_instagram',
        'company_twiter',
        'company_googleplus'];
}
