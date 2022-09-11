@extends('master.main')

@section('styles')
@endsection

@section('script')
@endsection


@section('content')

    @component('Components.gallery-layout.gallerypresents')
    @endcomponent

    @component('Components.gallery-layout.gallerydisplay')
    @endcomponent

@stop
