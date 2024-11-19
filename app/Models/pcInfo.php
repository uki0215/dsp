<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pcInfo extends Model
{
    use HasFactory;

    protected $table = 'pc_device_info';

    protected $fillable = [
        'ubtzNum',
        'regNum',
        'serviceTag',
        'brand',
        'mark',
        'subDevice',
        'deviceType',
        'orgName',
        'workplaceName',
        'positionName',
        'ownerName',
        'osType',
        'cpu',
        'ram',
        'hard',
        'price',
        'buyedDate',
        'comment',

    ];
}
