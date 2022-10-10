<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;


    /* In een view kan je hierdoor bij een bedrijf heel simpel de eigenaar verkrijgen, je doet simpelweg $company->owner->name (om de eigenaar zn naam te pakken) */

    public function owner(){
        return $this->hasOne(User::class,'id');
    }

}
