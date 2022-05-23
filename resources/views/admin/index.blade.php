@extends('layouts.admin')
@section('content')
    <div class="row mt-6">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                  </svg>                          
                            </div>
                            <div class="d-sm-none">
                                <h2 class="fw-extrabold h5">Users</h2>
                                <h3 class="mb-1">{{App\Models\User::count()}}</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Users</h2>
                                <h3 class="fw-extrabold mb-2">{{App\Models\User::count()}}</h3>
                            </div>
                            <small class="text-gray-500">
                                Feb 1 - Apr 1
                            </small> 
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                  </svg>                          
                            </div>
                            <div class="d-sm-none">
                                <h2 class="fw-extrabold h5">About</h2>
                                <h3 class="mb-1">{{App\Models\About::count()}}</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">About</h2>
                                <h3 class="fw-extrabold mb-2">{{App\Models\About::count()}}</h3>
                            </div>
                            <small class="text-gray-500">
                                Feb 1 - Apr 1
                            </small> 
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                  </svg>                          
                            </div>
                            <div class="d-sm-none">
                                <h2 class="fw-extrabold h5">Resumes</h2>
                                <h3 class="mb-1">{{App\Models\Resume::count()}}</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Resumes</h2>
                                <h3 class="fw-extrabold mb-2">{{App\Models\Resume::count()}}</h3>
                            </div>
                            <small class="text-gray-500">
                                Feb 1 - Apr 1
                            </small> 
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                  </svg>                          
                            </div>
                            <div class="d-sm-none">
                                <h2 class="fw-extrabold h5">Works</h2>
                                <h3 class="mb-1">{{App\Models\Work::count()}}</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Works</h2>
                                <h3 class="fw-extrabold mb-2">{{App\Models\Work::count()}}</h3>
                            </div>
                            <small class="text-gray-500">
                                Feb 1 - Apr 1
                            </small> 
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                  </svg>                          
                            </div>
                            <div class="d-sm-none">
                                <h2 class="fw-extrabold h5">Blogs</h2>
                                <h3 class="mb-1">{{App\Models\Blog::count()}}</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Blogs</h2>
                                <h3 class="fw-extrabold mb-2">{{App\Models\Blog::count()}}</h3>
                            </div>
                            <small class="text-gray-500">
                                Feb 1 - Apr 1
                            </small> 
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                  </svg>                          
                            </div>
                            <div class="d-sm-none">
                                <h2 class="fw-extrabold h5">Contact</h2>
                                <h3 class="mb-1">{{App\Models\Contact::count()}}</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Contact</h2>
                                <h3 class="fw-extrabold mb-2">{{App\Models\Contact::count()}}</h3>
                            </div>
                            <small class="text-gray-500">
                                Feb 1 - Apr 1
                            </small> 
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
         

        {{-- <div class="col-12 mb-4">
            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0 rounded">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-0 rounded-start">#</th>
                                    <th class="border-0">Traffic Source</th>
                                    <th class="border-0">Source Type</th>
                                    <th class="border-0">Category</th>
                                    <th class="border-0">Global Rank</th>
                                    <th class="border-0">Traffic Share</th>
                                    <th class="border-0 rounded-end">Change</th>
                                </tr>
                            </thead>
                            <tbody>
                       
                               
                                <tr>
                                    <td><a href="#" class="text-primary fw-bold">4</a></td>
                                    <td class="fw-bold">
                                        <div class="d-flex align-items-center"><svg
                                                class="icon icon-xxs text-gray-500 me-2" aria-hidden="true"
                                                focusable="false" data-prefix="fab" data-icon="yahoo" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor"
                                                    d="M223.69,141.06,167,284.23,111,141.06H14.93L120.76,390.19,82.19,480h94.17L317.27,141.06Zm105.4,135.79a58.22,58.22,0,1,0,58.22,58.22A58.22,58.22,0,0,0,329.09,276.85ZM394.65,32l-93,223.47H406.44L499.07,32Z">
                                                </path>
                                            </svg> yahoo.com</div>
                                    </td>
                                    <td>Referral</td>
                                    <td><a class="small fw-bold" href="#">News and Media</a></td>
                                    <td>#11</td>
                                    <td>
                                        <div class="row d-flex align-items-center">
                                            <div class="col-12 col-xl-2 px-0">
                                                <div class="small fw-bold">8%</div>
                                            </div>
                                            <div class="col-12 col-xl-10 px-0 px-xl-1">
                                                <div class="progress progress-lg mb-0">
                                                    <div class="progress-bar bg-dark" role="progressbar"
                                                        aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 8%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-danger">
                                        <div class="d-flex align-items-center"><svg class="icon icon-xs me-1"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg> <span class="fw-bold">9.45%</span></div>
                                    </td>
                                </tr>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    
@endsection
