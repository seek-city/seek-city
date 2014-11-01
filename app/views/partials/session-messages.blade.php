@if (Session::has('info'))
<div class="alert adjusted alert-info fade in">
    <button class="close button" data-dismiss="alert">
        &times;
    </button>
    <i class="fa-fw fa-lg fa fa-info"></i>
    {{{ Session::get('info') }}}
</div>
@elseif (Session::has('success'))
<div class="alert adjusted alert-success fade in">
    <button class="close button" data-dismiss="alert">
        &times;
    </button>
    <i class="fa-fw fa-lg fa fa-check"></i>
    {{{ Session::get('success') }}}
</div>
@elseif (Session::has('failure'))
<div class="alert adjusted alert-danger fade in">
    <button class="close button" data-dismiss="alert">
        &times;
    </button>
    <i class="fa-fw fa-lg fa fa-exclamation"></i>
    {{{ Session::get('failure') }}}
</div>
@endif

@if (Session::get('error'))
    <div class="alert alert-error alert-danger">
        @if (is_array(Session::get('error')))
            {{ head(Session::get('error')) }}
        @endif
    </div>
@endif

@if (Session::get('notice'))
    <div class="alert">{{ Session::get('notice') }}</div>
@endif