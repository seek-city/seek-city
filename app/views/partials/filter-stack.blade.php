
    <div id="filterStackWrap">
        <input name="filterStack" id="filterStack">
        {{ Form::open(['action' => 'ActivitiesController@index', 'method' => 'GET']) }}
        <input type="hidden" id="mood" name="mood">
        <input type="hidden" id="category" name="category">
        <input type="hidden" id="price" name="price">
        {{ Form::submit('Go!', ['class' => 'btn btn-primary', 'id' => 'activityFilter']) }}
        {{ Form::close() }}
    </div>
    
    
    <script>
    $(document).ready(function(){
        var mood = [];
        var category = [];
        var price = [];
        var csrfToken = "{{{ Session::get('_token') }}}";
        
        $('#filterStack').tagsInput({
            'interactive': false
        });
        
        $(".queryButtonMood").on('click', function(e) {
            tag = $(this).data('title');
            $('#fiterStack').addTag(tag);
            mood = [];
            mood.push(tag);

        });
        
        $(".queryButtonCategory").on('click', function(e) {
            tag = $(this).data('title');
            category = [];
            category.push(tag);

        });
        
        $(".queryButtonPrice").on('click', function(e) {
            tag = $(this).data('title');
            console.log(tag);
            switch(tag) {
                case 'Free':
                    tag = 0;
                    break;
                case '$':
                    tag = 1;
                    break;
                case '$$':
                    tag = 2;
                    break;
                case '$$$':
                    tag = 3;
                    break;
                case '$$$$':
                    tag = 4;
                    break;
                default:
                    tag = 'uh oh';
                    break;
            }
            console.log(tag);
            price = [];
            price.push(tag);

        });
        
        $("#activityFilter").click(function(e) {
            e.preventDefault;
            $("#mood").val(mood);
            $("#category").val(category);
            $("#price").val(price);
            console.log($('#mood').val());
            console.log($('#category').val());
            console.log($('#price').val());
        });
    });
</script>