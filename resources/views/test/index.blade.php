@extends('layouts.app')

@section('content')
    <h1>Test</h1>  
    
    @if (count($test) > 0)
        @foreach ($test as $test)
            <div class="well">
                <div class="row">
                    
                
                    <div class="col-md-8 col-sm-8">
                            <h3><a href="/test/{{$test->id}}">{{$test->section_id}}</a></h3>
                            
                    </div>
                </div>

            </div>
             
        @endforeach
        {{$test->links()}}
    @else
        <p>No posts</p>    
    @endif

@endsection