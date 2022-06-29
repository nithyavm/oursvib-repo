<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = ['list_id', 'strategic_location1', 'strategic_location2','strategic_location3',
                            'near_by1','near_by2','near_by3'];
}
