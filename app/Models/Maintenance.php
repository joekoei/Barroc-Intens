<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;
    protected $table = 'maintenance_appointments';
    protected $fillable = ['remark'];


    public function company(){
        return Company::findOrFail($this->company_id);
    }

    // $appointment->company()->name
}
