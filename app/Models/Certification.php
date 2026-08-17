<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'issuer',
        'year',
        'badge_text',
        'image_path',
        'credential_url',
        'sort_order',
    ];
}
