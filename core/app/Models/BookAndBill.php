<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookAndBill extends Model
{
    protected $table = "book_and_bill";
    protected $fillable = ['topic_id', 'booking_id', 'bill_type','u_price','d_price','p_price,l_price'];
}
