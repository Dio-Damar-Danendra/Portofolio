@extends('design.master')

@section('title', 'Log Out Success! - Amazing E-Book')

@section('content')

<style>
    .circle{
        width:400px;
        height:400px;
        border-radius:50%;
        color:black;
        line-height:100px;
        text-align:center; 
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 180px;
        margin-bottom: 180px;
        border: 12px solid #77badf;
        }
</style>
<div class="d-flex justify-content-center align-items-center"> 
    <div class="circle">
        <p style="font-size: 28px; margin-top: 47px">{{ __('Saved!') }}</p><br>
        <p style="font-size: 22pt; margin-top: 47px"><a>{{ __('Click here to "Home"') }}</a></p>
    </div>    
</div>

@endsection
