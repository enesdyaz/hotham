@extends('layouts.app')

@section('content')

<div class='image-full grid-container'>
    <div class='image-full-item'>HOTHAM VALLEY PROJECT<br><span>ADMIN</span></div>
</div>

<div class='menu-bottom'>
    <div class='wrap'>
        <button  type="button" data-toggle="modal" data-target="#exampleModalCenter">ADD MENU</button>
    </div>
</div>


<!-- modal content -->
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
            
                <form action="">
                    <label for="create_title">Title</label>
                    <input id='create_title' type="text">
                </form>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Save</button>
            </div>
        </div>
        </div>
</div>





<div style='height: 80px;'></div>


@endsection
