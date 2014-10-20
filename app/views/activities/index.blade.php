@extends('layouts.master')

@section('content')
    <div class="row color">
                        <div class="col-md-4 color">
                    <!--title-->
                    <div class="search_title">
                        <form class="form-inline search_form" role="form">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Search Events" />
                                </div>
                                <button type="submit" class="btn btn-danger">Search</button>
                                <button type="submit" class="btn btn-danger">Sort</button>
                            </div>
                        </form>
                    </div>
                <!-- </div> -->
                <!--/title-->
                    <!--search results-->
                    <!-- <div class="row">
                        <div class="col-md-4 col-md-offset-1 color">
                            <img src="#" alt="..."/>
                            <div class="description_search_results">
                            </div>
                        </div>
                    </div> -->
                    <!--end of search results-->
                    <!-- <div class="col-md-4 col-md-offset-1 color"> -->
                   <!-- <h1>Seek City</h1>
                   <a class='btn btn-default' href="{{ action('ActivitiesController@create') }}">New Entry</a>
                   <hr> -->
                    <article class="color"> 
                        @forelse($activities as $activity)
                    <h3>{{{ $activity->title }}}</h3>

                     <p><span class='glyphicon glyphicon-time'></span> {{{ $activity->updated_at->format(Activity::DATE_FORMAT) }}} </p>

                    <img class='img-responsive' src="{{ $activity->img }}" alt="">

                    <p>{{{ $activity->body }}}</p>

                    <a class="btn btn-sm btn-primary" href="activities/{{ $activity->id }}">More Info <span class="glyphicon glyphicon-chevron-right"></span></a>

                     @empty
                      <p>No Entries match your search</p>
                    @endforelse
                    </article>
                    <br>
                    <hr>
                    <p>No More Results</p>
                    <hr>
                    <!--/result-->
                  </div>
            </div>

            

    
    <hr>

</div>
@stop

