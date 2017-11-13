<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      '	job_id', 'name', 'report', 'view', 'created_at',
  ];
}
