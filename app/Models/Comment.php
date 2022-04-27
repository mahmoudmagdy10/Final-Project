<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $fillable = [
        'content',
        'contractor_id',
        'project_id ',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

}
