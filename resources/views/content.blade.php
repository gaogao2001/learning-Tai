@extends('layout')

@section('tinhchuvi')
    {{"chieu dai : ". $chieuDai . "chieu rong:" . $chieuRong . 'chu vi:' . $chuVi}}
    <form action="/tinh-chu-vi-post" method="post">
        <input name="chieuDai" value="{{$chieuDai}}" >
        <input name="chieuRong" value="{{$chieuRong}}" >

        @csrf
        <input type="submit" value="Submit">
    </form>
@endsection

@section('footer')
    Footer
@endsection
