<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Intensity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('intensity', 'Intensity:') !!}
    {!! Form::number('intensity', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Time Happen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_time_happen', 'Date Time Happen:') !!}
    {!! Form::text('date_time_happen', null, ['class' => 'form-control','id'=>'date_time_happen']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_time_happen').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Number Of Casualty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number_of_casualty', 'Number Of Casualty:') !!}
    {!! Form::number('number_of_casualty', null, ['class' => 'form-control']) !!}
</div>