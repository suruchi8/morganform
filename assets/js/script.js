// repeater
$(document).ready(function () {
    // form repeater
    $('.repeater').repeater({
        initEmpty: false,
        defaultValues: {
            'text-input': ''
        },
        show: function () {
            $(this).slideDown();
        },
        hide: function (deleteElement) {
            $(this).slideUp(deleteElement);
        },
        isFirstItemUndeletable: true
    })

    // file input on img click
    const avatar = $('#img-upload-input');
    const imgUploadBtn = $('#img-upload-btn');
    $('#img-upload-btn').click(function(){
        avatar.trigger('click');
    });

    $('#img-upload-input').change(event => {
        const file = event.target.files[0];
        const reader = new FileReader();
        reader.readAsDataURL(file);
        console.log(file);

        reader.onloadend = () => {
            imgUploadBtn.attr('aria-label', file.name);
            imgUploadBtn.attr('src', reader.result);
            console.log(reader.result);
        }
    })

    // nepali date picker
    let dobInput = $(".nepali-datepicker-dob");
    dobInput.nepaliDatePicker({
        dateFormat: "DD/MM/YYYY",
        language: "english",
    });

    // english date picker
    $('.english-datepicker').datepicker();
});