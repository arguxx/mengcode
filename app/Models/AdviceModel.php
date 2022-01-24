<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdviceModel extends Model
{
    use HasFactory;
    protected $table = 'advice';
    protected $fillable = [
    'title',
    'category',
    'link',
    'description',
];
}