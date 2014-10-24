@extends('layouts.master')

@section('title')
Manage Categories
@stop

@section('content')
    <div id="manageWrap" class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th id="deleteTableHead"><button type="button" class="btn btn-xs btn-danger delete-btn">Delete</button></th>
                        <th>Category Name</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                        <tr id="category-row-{{{ $category->id }}}">
                            <td class="mass-delete-check">{{ Form::checkbox('delete-check', $category->id, false, array('class' => 'delete-check')) }}</td>
                            <td id="category-name-{{{ $category->id }}}">{{{ $category->name }}}</td>
                            <td>
                                <div class="btn-group">
                                    {{ link_to_action('CategoriesController@edit', 'Edit', $category->id, array('class' => 'btn btn-default')) }}
                                </div>
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
            {{ $categories->links() }}
        </div>
    </div>
@stop

@section('bottom-script')

<script>
    var csrfToken = "{{{ Session::get('_token') }}}";
    var fadeTimer = 500;
    console.log(csrfToken);
    
    
    $(".delete-btn").click(function()
    {
        $(".delete-check:checked").each(function() {
            var categoryId = $(this).val();
            var categoryName = $("#category-name" + categoryId).text();
            
            if (confirm('Are you sure you want to delete the category?')) {
                $.ajax({
                    url: '{{{ Request::root() }}}' + '/categories/' + categoryId,
                    type: 'POST',
                    data: {
                        _token: csrfToken,
                        _method: 'delete'
                    },
                    success: function(data) {
                        if (data.success) {
                            alert(data.message);
                            $("#category-row-" + categoryId).fadeOut(fadeTimer);
                        }
                    }
                });
            }
        });
    });
</script>
@stop