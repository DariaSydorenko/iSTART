<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $primaryKey = 'phone_id';

    public function model()
    {
        return $this->belongsTo(PhoneModel::class, 'model_id', 'model_id');
    }

    public function color()
    {
        return $this->belongsTo(PhoneColor::class, 'color_id', 'color_id');
    }
}
