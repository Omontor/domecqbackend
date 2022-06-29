<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Variante extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'variantes';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'producto',
        'marca_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function marca()
    {
        return $this->belongsTo(Brand::class, 'marca_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
