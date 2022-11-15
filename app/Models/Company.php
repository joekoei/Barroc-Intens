<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'street',
        'house_number',
        'city',
        'country_code',
        'bkr_checked',
        'contact_id',
    ];

    /* In een view kan je hierdoor bij een bedrijf heel simpel de eigenaar verkrijgen, je doet simpelweg $company->owner->name (om de eigenaar zn naam te pakken) */

    public function owner(){
        return User::findOrFail($this->contact_id);
    }
}
