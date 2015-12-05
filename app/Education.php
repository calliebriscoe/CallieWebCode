<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'education';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['main_image_edu', 'school', 'start_date', 'end_date', 'description', 'skill_img_1', 'skill_head_1', 'skill_desc_1', 'skill_img_2', 'skill_head_2', 'skill_desc_2', 'skill_img_3', 'skill_head_3', 'skill_desc_3'];

  public function education()
  {
      $education = Education::all();

      $education = $education->reverse();

      return $education;
  }

  public function experience()
  {
    $experiences = Experience::all();

    $experiences = $experiences->reverse();

    return $experiences;
  }

  public function Home()
  {
          $home = array( 'website_name' => "Callie Briscoe's Website",
                         'who_am_i' => "I am a life long adventurist and I live for a challenge.",
                         'what_am_i' => "I thrive in quick, ever changing environments.",
                         'where_am_i' => "I am not afraid to think outside the box while I strive for knowledge."
                       );

          return $home;
  }


}
