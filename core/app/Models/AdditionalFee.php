<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalFee extends Model
{
    protected $table = "additional_fees";
    protected $fillable = ['topic_id', 'fee_name', 'fee_type','fee_text','fee_value'];
}
