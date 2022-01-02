const colorClicked = function(c){
    $('.lead #color').attr('value', c.attr('id'));
    $('.lead .color').css('border', 'none');
    c.css('border', '3px solid black');
    console.log($('.lead #color').val());
}

const categorySelected = function(c){

}

const selectAll = function(c){
    
}
