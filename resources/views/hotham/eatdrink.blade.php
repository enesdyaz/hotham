@extends('layouts.app')

@section('content')

<!-- Square Title -->
<div class='image-full-title grid-container'>
    <div class='image-full-item'>EAT&DRINK</div><br><br>
    <h6><i class="far fa-caret-square-down"></i> Category</h6>
    <p>
        @foreach($category as $cat)
        <span class='span-box-white'>
            {{$cat->name}}
        </span>
        @endforeach
    </p>
    <br>
   

    <p>
        <i class="fas fa-utensils"></i> Eat&Drink
  
    
    </p>

<!-- card_box -->
@foreach($eatdrink as $eat)
    <div class='card-box'>
    <div class='image' style="background: url('{{asset('/storage/image/eatdrink/' .$eat->image)}}')">image</div>
        <div class='content'>
            <div class='category'>{{$eat->category_id}}</div>
            <div class='title'>{{$eat->name}}</div>
            <div class='subtitle'>{{$eat->subtitle}}</div>
            <div class='address'><i class='fa fa-map-marker-alt'></i>{{$eat->address}}</div>
            <div class='phone'><i class='fa fa-mobile-alt'></i> {{$eat->phone}}</div>
        </div>
    </div>
@endforeach

<div style='height:140px;'></div>

</div>



<!-- Menu at Bottom -->
 <div class='menu-bottom'>
    <div class='wrap'>
        <button  type="button" data-toggle="modal" data-target="#exampleModalCenter">ADD CATEGORY</button>
        <button type="button" data-toggle="modal" data-target="#exampleModalCenter2" >ADD EAT&DRINK</button>
    </div>
</div> 


<!-- modal content 1-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">CREATE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="/hotham/add_category_eatdrink" method='post'>
                        @csrf
                        <label for="create_title">Title</label>
                        <input id='create_title' name='name' type="text">
            
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </form>
                </div>
        </div>
        </div>

</div>

<!-- modal content 2-->

<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">CREATE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/hotham/add_eatdrink" method='post' enctype='multipart/form-data'>
                    @csrf
                    <select style='margin-bottom: 15px;' class="custom-select" name="category_id">
                        <option value="" selected>Choose Category</option>
                        @foreach($category as $cat)
                        <option value="{{$cat->name}}">{{$cat->name}}</option>
                        </span>
                        @endforeach
                    </select>
                    <input name='name' type="text" placeholder='Restaurant Name'>
                    <input name='subtitle' type="text" placeholder="Subtitle">
                    <input name='address' type="text" placeholder="Address">
                    <input name='phone' type="tel" placeholder="Phone">
                    <input name='tradinghour' type="text" placeholder="Trading Hour 10:00-16:00">
                    <textarea name='description' type="text" placeholder='description'></textarea>
                    <input class='input-file-button' type="file" name='image'>
        
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save changes</button>
                </form>
            </div>
    </div>
    </div>
</div>





@endsection
