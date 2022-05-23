<div>
    <div class="row mt--10 mt_md--10 mt_sm--10 mt-dec-30">
        @foreach ($works as $work)
            <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true"
                class="col-lg-6 col-xl-4 col-md-6 col-12 mt--30 mt_md--30 mt_sm--30">
                <div class="rn-portfolio" >
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="{{route('workInfo',$work->slug)}}" >
                                <img src="{{ asset('storage/' . $work->img) }}" alt="Personal Portfolio Images">
                            </a>
                        </div>
                        <div class="content">
                            <div class="category-info">
                                <div class="category-list">
                                    <a href="{{route('workInfo',$work->slug)}}" >{{ $work->title_uz }}</a>
                                </div>

                            </div>
                            <h4 class="title"><a href="{{route('workInfo',$work->slug)}}">
                                <td>{{  Str::limit($work->text_uz, 40, ' (...)');}}</td>
                                <i class="feather-arrow-up-right"></i></a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- End Single Portfolio -->
    </div>
    @if ($count >= App\Models\Work::count())
        <div class="row mt--40">
            <div class="col-12 text-center">
                no more

            </div>
        </div>
    @else
        <div class="row mt--40">
            <div class="col-12 text-center">
                <button class="rn-btn" wire:click="showMore">See More <i class="feather-loader"></i></button>
            </div>
        </div>
    @endif

</div>
