<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    use HasFactory;
    protected $fillable = [
        'convo_id'	,
        'convo_content',	
        'date_sent'	,
        'sender_id'	,
        'receiver_id',	
        'sender_name',	
        'receiver_name',	
        'con_stats'
    ];
}
