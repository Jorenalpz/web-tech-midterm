<div class="table-responsive">
    <table class="table" id="earthQuakes-table">
        <thead>
            <tr>
                <th>Location</th>
        <th>Intensity</th>
        <th>Date Time Happen</th>
        <th>Number Of Casualty</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($earthQuakes as $earthQuake)
            <tr>
                <td>{{ $earthQuake->location }}</td>
            <td>{{ $earthQuake->intensity }}</td>
            <td>{{ $earthQuake->date_time_happen }}</td>
            <td>{{ $earthQuake->number_of_casualty }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['earthQuakes.destroy', $earthQuake->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('earthQuakes.show', [$earthQuake->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('earthQuakes.edit', [$earthQuake->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
