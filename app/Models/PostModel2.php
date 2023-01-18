<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel2 extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable =['Title', 'Slug', 'Content', 'category_id', 'posted', 'Image'];
    
}
