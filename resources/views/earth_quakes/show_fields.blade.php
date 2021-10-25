<!-- Location Field -->
<div class="col-sm-12">
    {!! Form::label('location', 'Location:') !!}
    <p>{{ $earthQuake->location }}</p>
</div>

<!-- Intensity Field -->
<div class="col-sm-12">
    {!! Form::label('intensity', 'Intensity:') !!}
    <p>{{ $earthQuake->intensity }}</p>
</div>

<!-- Date Time Happen Field -->
<div class="col-sm-12">
    {!! Form::label('date_time_happen', 'Date Time Happen:') !!}
    <p>{{ $earthQuake->date_time_happen }}</p>
</div>

<!-- Number Of Casualty Field -->
<div class="col-sm-12">
    {!! Form::label('number_of_casualty', 'Number Of Casualty:') !!}
    <p>{{ $earthQuake->number_of_casualty }}</p>
</div>

