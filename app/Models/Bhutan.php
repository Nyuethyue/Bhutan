<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bhutan extends Model
{
    use HasFactory;

    protected $fillable = [
        'dzongkhag_id',
        'gewog_id',
        'lhakhang_name',
        'work_type',
        'work_desc',
        'no_of_thangka',
        'remarks'
    ];
}
