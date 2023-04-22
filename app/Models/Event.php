<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'event';
    protected $primaryKey = 'event_id';

    protected $fillable = [
        'event_title',
        'event_thumbnail' ,
        'event_fees',
        'event_location',
        'event_description',
        'event_organizer'
    ];
}
