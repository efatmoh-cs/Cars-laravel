<div class="profile clearfix">
    <div class="profile_pic">
        <img src="{{  asset('assets/images/img.jpg')}}" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
       <h3><a href="{{route('index')}}">Home</a></h3>
      <h2>  {{ Auth::user()->name }}</h2>

    </div>
</div>
