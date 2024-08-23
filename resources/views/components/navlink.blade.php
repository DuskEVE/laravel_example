@props(['active'=>false, 'type'])

@php

@endphp

<{{$type}} class="{{$active?"nav-link active":"nav-link"}} {{$type=='button'? 'btn btn-secondary':''}}"  {{$attributes}}>{{$slot}}</{{$type}}>