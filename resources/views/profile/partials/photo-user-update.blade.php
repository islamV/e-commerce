<section>
    <div class="card-body">
       
        <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="text-center">
                   
                    <img src="{{asset('photos/'.Auth::user()->image->image)}}" alt="User Avatar"
                        class="rounded-circle user-avatar-xxl">
                </div>
              

            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
                <div class="user-avatar-info">
                    <div class="m-b-20">
                        <div class="user-avatar-name">
                            <h2 class="mb-1">{{ $user->name }}</h2>
                        </div>

                    </div>
                    <!--  <div class="float-right"><a href="#" class="user-avatar-email text-secondary">www.henrybarbara.com</a></div> -->
                    <div class="user-avatar-address">
                        <p class="border-bottom pb-3">
                            <span class="d-xl-inline-block d-block mb-2"><i
                                    class="fa fa-map-marker-alt mr-2 text-primary "></i>{{ $user->profile->country }}</span>
                            <span class="mb-2 ml-xl-4 d-xl-inline-block d-block">Joined date:
                                {{ $user->created_at }} </span>
                            <span class=" mb-2 d-xl-inline-block d-block ml-xl-4">{{$user->profile->gender}}
                            </span>
                            <span
                                class=" mb-2 d-xl-inline-block d-block ml-xl-4">{{ $user->profile->age }}
                                Year Old </span>
                        </p>
                        <div class="mt-3">
                            <a href="#" class="badge badge-light mr-1">Fitness</a> <a
                                href="#" class="badge badge-light mr-1">Life Style</a> <a
                                href="#" class="badge badge-light">Gym</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="inputText0" class="col-form-label"></label>
            <form action="{{route('Image.update',['Image'=>$user->id])}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <input type="file" name='image' class="btn btn-primary">
            <button class="btn btn-outline-dark" type="submit">Upload Image</button> 
            </form>
        </div>
    </div>
</section>
