
var modal = document.getElementById('add_category_modal');
var close = document.getElementsByClassName('close_button');

function add_category(){
    this.modal.style.display='block'
}

function close_button(){
    this.modal.style.display='none'
}

window.onclick = function(e){
    if(e.target==modal){
        this.modal.style.display='none'
    }
}