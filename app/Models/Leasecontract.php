<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leasecontract extends Model
{
    use HasFactory;
    protected $table = "leasecontract";
    protected $fillable = ['company_id','pay_method','agreed_rules','prijs','product','firstname','lastname'];

    public function company(){
        return Company::findOrFail($this->company_id);
    }

    public function invoice() {
        return Invoice::findOrFail($this->company_id);
    }

}
