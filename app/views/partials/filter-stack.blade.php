<div id="filterStackWrap">
    <input name="filterStack" id="filterStack">
    {{ Form::open(['action' => 'ActivitiesController@index', 'method' => 'GET', 'id' => 'filterForm']) }}
    {{ Form::submit('Go!', ['class' => 'btn btn-primary', 'id' => 'activityFilter']) }}
    {{ Form::close() }}
</div>