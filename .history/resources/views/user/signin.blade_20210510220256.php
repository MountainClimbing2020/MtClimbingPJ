@extends('layouts.master_auth')

@section('content')
<div class="row">
<div class="col-md-4 col-md-offset-4">
    <h1>Sign In</h1>
        @if(count($errors) >0)
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
