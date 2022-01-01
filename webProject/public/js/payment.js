const editPressed = () => {
    const old = $('.bg-image .edit-icon').attr("src");
    let newimg = old.slice(0, -13);
    newimg += 'save.jpg';
    $('.bg-image .edit-icon').attr("src", newimg);
    $('.bg-image .editable').css("text-decoration", "underline");
    $('.bg-image .edit-a').attr("onclick", "savePressed()");
}

const savePressed = () => {
    const old = $('.bg-image .edit-icon').attr("src");
    let newimg = old.slice(0, -8);
    newimg += 'editimage.jpg';
    $('.bg-image .edit-icon').attr("src", newimg);
    $('.bg-image .editable').css("text-decoration", "none");
    $('.bg-image .edit-a').attr("onclick", "editPressed()");
}

const step1 = () => {
    $('.bg-image .check-1').css('display', 'block');
    $('.bg-image .check-2').css('display', 'none');
    $('.bg-image .check-3').css('display', 'none');
    $('.bg-image .back-arrow').attr('href', "{{ url()->previous() }}");
    $('.bg-image .back-arrow').attr('onclick', "");
    $('.bg-image .stepwizard-step .s1').html('1');
    $('.bg-image .stepwizard-step .s2').html('2');
    $('.bg-image .stepwizard-step .s3').html('3');
    $('.bg-image .end-bar').css('display', 'block');
    $('.bg-image .end-bar .next-step').attr('href', '#step2');
    $('.bg-image .end-bar .next-step').attr('onclick', 'step2();return false;');
}

const step2 = () => {
    $('.bg-image .check-1').css('display', 'none');
    $('.bg-image .check-2').css('display', 'block');
    $('.bg-image .check-3').css('display', 'none');
    $('.bg-image .back-arrow').attr('href', "#step1");
    $('.bg-image .back-arrow').attr('onclick', "step1();return false;");
    $('.bg-image .stepwizard-step .s1').html('<i class="fa fa-check"></i>');
    $('.bg-image .stepwizard-step .s2').html('2');
    $('.bg-image .stepwizard-step .s3').html('3');
    $('.bg-image .end-bar').css('display', 'block');
    $('.bg-image .end-bar .next-step').attr('href', '#step3');
    $('.bg-image .end-bar .next-step').attr('onclick', 'step3();return false;');
}

const step3 = () => {
    $('.bg-image .check-1').css('display', 'none');
    $('.bg-image .check-2').css('display', 'none');
    $('.bg-image .check-3').css('display', 'block');
    $('.bg-image .back-arrow').attr('href', "#step2");
    $('.bg-image .back-arrow').attr('onclick', "step2();return false;");
    $('.bg-image .stepwizard-step .s1').html('<i class="fa fa-check"></i>');
    $('.bg-image .stepwizard-step .s2').html('<i class="fa fa-check"></i>');
    $('.bg-image .stepwizard-step .s3').html('3');
    $('.bg-image .end-bar').css('display', 'none');
}
