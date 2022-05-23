

@foreach ($abouts as $about)

<div class="row">
    <div class="col-lg-5">
        <div class="image-area shadow-none padding-none " >
            <div class="thumbnail ">
                <img src="{{('storage/'. $about->img)}}" alt="Personal Portfolio Image">
            </div>
        </div>
    </div>
    <div  class="col-lg-7 mt_sm--30">
        <div class="contant">
            <div class="section-title text-left">
                <span class="subtitle">{{$about->title_uz}}</span>
                <h2 class="title small-h2">Men haqimda qisqacha</h2>
            </div>
            <p class="discription color-body">
                {{$about->text_uz}}
            </p>
            <button class="rn-btn"  wire:click="export"><span>Resumeni yuklab olish</span></button>
        </div>
    </div>
</div>

@endforeach

