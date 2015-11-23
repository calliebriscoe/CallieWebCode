<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'experience';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['job_title', 'company', 'start_date', 'end_date', 'description', 'image'];

}
