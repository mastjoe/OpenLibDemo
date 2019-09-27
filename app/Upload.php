<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    //
    protected $table = 'uploads';

    protected $fillable = [
        'path',
        'title',
        'description',
        'uploaded_by',
        'size',
        'file_type',
        'category_id',
        'label_id',
        'approved_by',
        'approved'
    ];
}
