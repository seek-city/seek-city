@extends('layouts.master')

@section('title')
Manage Moods
@stop

@section('content')
    <div id="manageWrap" class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th id="deleteTableHead"><button type="button" class="btn btn-xs btn-danger delete-btn">Delete</button></th>
                        <th>Mood Name</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($moods as $mood)
                        <tr id="mood-row-{{{ $mood->id }}}">
                            <td class="mass-delete-check">{{ Form::checkbox('delete-check', $mood->id, false, array('class' => 'delete-check')) }}</td>
                            <td id="mood-name-{{{ $mood->id }}}">{{{ $mood->name }}}</td>
                            <td>
                                <div class="btn-group">
                                    {{ link_to_action('MoodsController@edit', 'Edit', $mood->id, array('class' => 'btn btn-default')) }}
                                </div>
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
            {{ $moods->links() }}
        </div>
    </div>
@stop

@section('bottom-script')

<script>
    var csrfToken = "{{{ Session::get('_token') }}}";
    var fadeTimer = 500;
    
    $(".delete-btn").click(function()
    {
        $(".delete-check:checked").each(function() {
            var moodId = $(this).val();
            var moodName = $("#mood-name" + moodId).text();
            
            if (confirm('Are you sure you want to delete the mood?')) {
                $.ajax({
                    url: '{{{ Request::root() }}}' + '/moods/' + moodId,
                    type: 'POST',
                    data: {
                        _token: csrfToken,
                        _method: 'delete'
                    },
                    success: function(data) {
                        if (data.success) {
                            alert(data.message);
                            $("#mood-row-" + moodId).fadeOut(fadeTimer);
                        }
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            }
        });
    });
</script>
@stop