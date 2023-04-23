<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $primaryKey = 'blog_id';

    protected $fillable = [
        'blog_title',
        'blog_thumbnail',
        'blog_views',
        'blog_category',
        'blog_description',
        'blog_author'
    ];
}
