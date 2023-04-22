<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
  use HasFactory;
  protected $table = 'projects';
  protected $primaryKey = 'project_id';
  protected $foriegenKey = 'user_id';


  protected $fillable = [
    'project_title',
    'project_slug',
    'thumbnail',
    'category',
    'description',
    'dos',
    'email',
    'code',
    'fee',
    'user_id',
  ];

  public function user()
  {
    return $this->belongsTo('App\Models\User','user_id');
  }
}
