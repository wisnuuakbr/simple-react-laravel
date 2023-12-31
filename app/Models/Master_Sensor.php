<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Master_Sensor extends Model
{
    use HasFactory;
    // soft delete
    // use SoftDeletes;
    // for customing name without s
    protected $table = 'master_sensor';
    // fill the db
    protected $fillable = [
        'sensor', 'sensor_name', 'unit', 'created_by', 'created_at',
    ];
    // excepting the updated_at
    public $timestamps = false;

}