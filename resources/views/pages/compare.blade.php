@extends('layouts.maingrid')

@section('underlying')
    @include('includes.underlying', ['title' => $title])
@endsection

@section('trade_legs')
    <h1>Compare Trade Legs</h1>
@endsection

@section('chart')
    <h1>Compare Chart</h1>
@endsection
