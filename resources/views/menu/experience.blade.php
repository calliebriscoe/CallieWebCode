@extends('base')

@section('menu.experience')
<table>
<tr>
<div class="section">
  <div class="sub_title">
    <h1>Experience</h1>
  </div>
</tr>
  <div>
    @if (count($experiences) > 1)


    @foreach ($experiences as $experience)
    <hr class="featurette-divider">
    <table>
    <tr>
      <th width="70%">
      <div class="row featurette">
        <div class="text_experience">
          <h1 class="featurette-heading">{{ $experience['job_title'] }}</h1>
          <h2 class="featurette-date">{{ $experience['company'] }}</br><span class="text-muted">{{ $experience['start_date'] }} - {{ $experience['start_date'] }}</span></h2>
        </div>
    </th>
    <th width="30%">
        <div class="image_experience">
          <img class="featurette-image img-responsive" src="{{ $experience['image'] }}">
        </div>
    </th>
    </div>
    </tr>
  </table>
    <tr>
        <p class="text">{{ $experience['description'] }}</p>
 </tr>

@endforeach
<hr class="featurette-divider">
@endif
  </table>
  </div>
</div>

@stop
