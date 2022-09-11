@extends('master.main')

@section('styles')
@endsection

@section('script')
@endsection

@section('content')

    @component('Components.contact-details.contactinfo')
    @endcomponent

    @component('Components.contact-details.contactform')
    @endcomponent

@stop
