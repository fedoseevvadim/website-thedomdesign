function submitFeedBackForm ( ) {

    let formData    = new FormData();

    formData.append('NAME', document.getElementById('name').value);
    formData.append('PHONE', document.getElementById('phoneNumber').value)

    $.ajax({
        url:  "/local/components/sbrus/content/templates/feedback/ajax.php",
        data: formData,
        processData: false,
        contentType: false,
        type: 'post',
        success: function() {
            alert('Спасибо, Мы с вами свяжемся!');
        }
    });

}