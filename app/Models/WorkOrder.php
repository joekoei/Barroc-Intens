<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        "products_worked_on",
        "parts_used",
        "description",
        "user_id",
        "company_id",
        "note",
        "when",
        "location",
        "workorder_id"

    ];


    public function company(){
        return Company::findOrFail($this->company_id);
    }

    public function user(){
        return User::findOrFail($this->user_id);
    }

    protected $table = "workorder";
}
