@extends('layouts.site1')
@section('content')
   
<div class="col-lg-12 ">
    <div class="tab-area">
        <div class="d-flex align-items-start">
            <div class="tab-content col-12" >
                <a href="{{route('index')}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 8 18">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                  </svg> back</a>      
        
                <div class="d-flex flex-column  align-items-center">
                    <h3>Qilgan ishni qisqacha mazmuni</h3>
                    <img src="{{asset('storage/'. $slug->img)}}">
                    <div class="d-flex flex-column p-5">
                        <h5 class="p-2">  {{$slug->title_uz}}</h5>
                        <p class="p-2">  {{$slug->text_uz}}</p>
                        <div class="d-flex flex-columns flex-md-wrap">
                            <a href="https://bekboy.uz" target="_blank">Saytni ko'rish</a>
                        <i class="p-2">  {{$slug->created_at}}</i>

                        </div>
                    </div>
                    
                </div>
       
         
                <a href="{{route('index')}}" ><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 8 18">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                  </svg> back</a>      
        </div>
        </div>
    </div>
</div>
    
@endsection