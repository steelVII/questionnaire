<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    protected $fillable = [

        'name','organization','email','phone_number','url','company_description',
        'redesign_logo','design_theme','design_colors','design_lookandfeel',
        'design_ref','target_audience_info','feature','web_app','in_charge'

    ];
}
