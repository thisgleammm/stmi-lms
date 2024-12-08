@extends('errors::layout')

@section('title', __('Internal Server Error'))
@section('code', '500')
@section('message', __('Something went wrong.'))
