const changed = function(){
    if($('#creditCardNo').val() && $('#address').val() && $('#pinCode').val()){
        $('.save').prop('disabled', false);
    }else{
        $('.save').prop('disabled', true);
    }
}

const viewDetails = function(){
    console.log('sd');
}