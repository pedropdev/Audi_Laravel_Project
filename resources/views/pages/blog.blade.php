@extends('master.main')

@section('styles')
@endsection

@section('script')
@endsection


@section('content')

    @component('Components.blog-layout.blog-title-callout')
    @endcomponent

    <div class="container" id="blogPost">
        <div class="row">
            <div class="col-md-10">
                <h1 style="font-style: italic">Daily News</h1>
                <br>
                <hr>
                @component('Components.blog-layout.blogfeed')
                @endcomponent
            </div>

            <div class="col-md-2">
                @component('Components.blog-layout.blog-archives-elsewhere')
                @endcomponent
            </div>
        </div>
    </div>
@stop
