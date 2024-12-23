$(document).ready(function() {
    $('#registration-form').submit(function(e) {
        e.preventDefault();

        // Simple form validation
        let isValid = true;
        $('input').each(function() {
            if ($(this).val() === '') {
                isValid = false;
                $(this).css('border', '2px solid red');
            } else {
                $(this).css('border', '1px solid #ddd');
            }
        });

        // If the form is valid, submit via AJAX (or traditional form submission)
        if (isValid) {
            $('#submit-btn').prop('disabled', true);
            $(this).unbind('submit').submit();  // Allow the form to be submitted to PHP
        }
    });
});
