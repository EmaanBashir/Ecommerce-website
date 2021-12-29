const editPressed = () => {
    const old = $('.bg-image .edit-icon').attr("src");
    let newimg = old.slice(0, -13);
    newimg += 'save.jpg';
    $('.bg-image .edit-icon').attr("src", newimg);
    $('.bg-image h2').css("text-decoration", "underline");
    $('.bg-image .edit-a').attr("onclick", "savePressed()");
}

const savePressed = () => {
    const old = $('.bg-image .edit-icon').attr("src");
    let newimg = old.slice(0, -8);
    newimg += 'editimage.jpg';
    $('.bg-image .edit-icon').attr("src", newimg);
    $('.bg-image h2').css("text-decoration", "none");
    $('.bg-image .edit-a').attr("onclick", "editPressed()");
}