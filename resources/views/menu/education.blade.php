@extends('base')

@section('menu.education')

<div class="section">
      <hr class="featurette-divider">
  <div class="sub_title">
    <h1>Education</h1>
  </div>
  <div>

@if (count($educations) > 1)
@foreach ($educations as $education)
    <hr class="featurette-divider">
    <div class="container marketing">
      <div class="school_image">
      <div class="item">
        <img class="img_school" src="{{ $education['main_image_edu'] }}">
        <div class="container">
          <div class="caption">
            <h1>{{ $education['school'] }}</h1>
            <h2>{{ $education['start_date'] }} - {{ $education['end_date'] }}</h2>
            <p>{{ $education['description'] }}</p></br>
          </div>
        </div>
      </div>
      <!-- Three columns of text below the carousel -->
      <div class="img">
      </div>
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="{{ $education['skill_img_1'] }}" alt="Generic placeholder image" width="140" height="140">
          <h2>{{ $education['skill_head_1'] }}</h2>
          <p>{{ $education['skill_desc_1'] }}</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="{{ $education['skill_img_2'] }}" alt="Generic placeholder image" width="140" height="140">
          <h2>{{ $education['skill_head_2'] }}</h2>
          <p>{{ $education['skill_desc_2'] }}</p>
        </div>
        <div class="col-lg-4">
          <img class="img-circle" src="{{ $education['skill_img_3'] }}" alt="Generic placeholder image" width="140" height="140">
          <h2>{{ $education['skill_head_3'] }}</h2>
          <p>{{ $education['skill_desc_3'] }}</p>
          </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div>
@endforeach
@endif
</div>
</div>

@stop
