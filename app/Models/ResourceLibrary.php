<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResourceLibrary extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'resource_libraries';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama',
        'alamat',
        'pic',
        'long',
        'lat'
    ];
}
