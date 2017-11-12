<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      '	title', 'company_name', 'category', 'experience', 'location', 'description', 'email_address', 'created_at',
  ];
}
