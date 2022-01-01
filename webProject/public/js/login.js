const changeState = function(){
    if($('#inputPassword').attr('type') === 'password'){
        $('#inputPassword').attr('type', 'text');
    }else{
        $('#inputPassword').attr('type', 'password');
    }
}