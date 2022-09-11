@extends('master.main')


@section('styles')
@endsection

@section('script')
@endsection



@section('content')

    {{--Carousel--}}
    @component('Components.carousel')
    @endcomponent
    {{--.Carousel--}}

    <div class="container">
        {{--Card deck--}}
        @component('Components.card-deck.cards')
        @endcomponent
        {{--.Card deck--}}


        {{--Center-Aligned-Media--}}
        @component('Components.media-and-text.center-aligned-media')
        @endcomponent
        {{--.Center-Aligned-Media--}}
    </div>
@stop
