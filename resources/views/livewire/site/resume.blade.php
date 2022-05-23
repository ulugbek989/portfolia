<div class="row mt--50">
    <!-- Brand style three -->
    <div class="col-lg-6 col-md-6 col-12">
        <div class="progress-wrapper">
            <div class="content">
                <span
                    class="subtitle">Xususiyatlari</span>
                <h4 class="maintitle">Frontend
                </h4>
                @foreach($resumes as $resume)
                @if($resume->sort=="frontend")
                <!-- Start Single Progress Charts -->
                <div class="progress-charts">
                    <h6 class="heading heading-h6">
                        {{$resume->title}}</h6>
                    <div class="progress">
                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: {{$resume->percent}}%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                            <span
                                class="percent-label">{{$resume->percent}}%</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Progress Charts -->    
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Single Progressbar  -->

    <!-- Start Single Progressbar  -->
    <div class="col-lg-6 col-md-6 col-12 mt_sm--60">
        <div class="progress-wrapper">
            <div class="content">
                <span
                    class="subtitle">Xususiyatlari</span>
                <h4 class="maintitle">Backend (dasturlash)</h4>
                @foreach($resumes as $resume)
                @if($resume->sort=="backend")
                <!-- Start Single Progress Charts -->
                <div class="progress-charts">
                    <h6 class="heading heading-h6">
                        {{$resume->title}}</h6>
                    <div class="progress">
                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: {{$resume->percent}}%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                            <span
                                class="percent-label">{{$resume->percent}}%</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Progress Charts -->
                @endif
                @endforeach

            </div>
        </div>
    </div>
    <!-- End Single Progressbar  -->
    <!-- Brand style three End -->
</div>