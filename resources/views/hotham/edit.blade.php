@extends('layouts.app')

@section('content')


<!-- Square Title -->
<div class='image-full-title grid-container'>
    <div class='image-full-item'>EAT&DRINK</div><br><br>
    <h6><i class="far fa-caret-square-down"></i> Category</h6>
    <p>
            <span class='span-box-white'>
                {{$eatdrink->category_id}}
            </span>
    </p>
    <br>

    <p>
        <i class="fas fa-utensils"></i> Eat&Drink Details
    </p>

    <div class='card-box-show'>
        <form style='font-size: 1rem;' action='/hotham/add_eatdrink/{{$eatdrink->id}}' method="POST">
            @method('PUT')
            @csrf


        <div class='image'><img src="{{asset('/storage/image/eatdrink/' .$eatdrink->image)}}"></div>
            <div class='content'>

                <div class='category'> Category: {{$eatdrink->category_id}}</div>
                <input type="hidden" name='category_id' value='{{$eatdrink->category_id}}'>

                <div class='title'> Name: </div>
                <input type="text" name='name'  value="{{$eatdrink->name}}">
                
                <div class='subtitle'> Subtitle: </div>
                <input type="text" name='subtitle' value="{{$eatdrink->subtitle}}">

                <div class='address'>Address: <i class='fa fa-map-marker-alt'></i></div>
                <input type="text" name='address' value="{{$eatdrink->address}}">

                <div class='phone'>Phone: <i class='fa fa-mobile-alt'></i></div>
                <input type="tel" name='phone' value="{{$eatdrink->phone}}">
                
            <div style='text-align: right;'>
                <button class='btn btn-success' style='display: inline-block'>UPDATE</button>
            </div>
        </form>
            </div>
        </div>
    </div>


    <!-- Menu at Bottom -->
 <div class='menu-bottom'>
    <div class='wrap'>
        <a href="/hotham/eatdrink"><button  type="button" ><i class='fas fa-home'></i></button></a>
        <button  type="button" data-toggle="modal" data-target="#exampleModalCenter">DELETE</button>
        <a href="/hotham/add_eatdrink/{{$eatdrink->id}}"><button type="button" data-toggle="modal" data-target="#exampleModalCenter2" >UPDATE</button></a>
        <button type="button" data-toggle="modal" data-target="#exampleModalCenter2" >ADD PICTURE</button>
    </div>
</div> 


<!-- modal content 1-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">DELETE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                    <label for="create_title">Are you sure to delete?</label><br>
        

                    <form action="/hotham/add_eatdrink/{{$eatdrink->id}}" method='POST'>
                        @method('DELETE')
                        @csrf
                        <button type="submit" style='float:right; margin-left: 10px;' class="btn btn-success" >Delete</button>
                        <button type="button" style='float:right' data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                    </form>

            </div>
    </div>
    </div>

</div>

    <div style='height: 150px;'></div>


@endsection
