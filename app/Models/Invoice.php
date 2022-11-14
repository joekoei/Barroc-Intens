<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = "custom_invoices";
    protected $fillable = ['company_id','date','naam_klant','paid_at','achternaam_klant','gemaakte_afspraken','prijs'];


    public function company(){
        return Company::findOrFail($this->company_id);
    }
}
