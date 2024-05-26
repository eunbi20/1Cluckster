<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbDevices extends Model
{
    use HasFactory;
    protected $table = 'tbdevices';
    protected $fillable = [
        'devices_name',
        'location_id',
        'devices_type_id',
    ];
}
