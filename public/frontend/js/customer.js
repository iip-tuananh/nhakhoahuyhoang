$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
});
$(document).ready(function($) {
    $('.btn_appointment').click(function(e){
        e.preventDefault();
        $('.loadingcover').show();

        var UrlAppointment = $('#calendar_form').attr('action');
        var data = $("#calendar_form").serialize();

        $.ajax({
            type: 'POST',
            url: UrlAppointment,
            dataType: "json",
            data: data,
            success:function(data){
                if(data.message_name_a){
                    $('.fr-error').css('display', 'block');
                    $('#error_name_a').html(data.message_name_a);
                } else {
                    $('#error_name_a').html('');
                }
                if(data.message_email_a){
                    $('.fr-error').css('display', 'block');
                    $('#error_email_a').html(data.message_email_a);
                } else {
                    $('#error_email_a').html('');
                }
                if(data.message_phone_a){
                    $('.fr-error').css('display', 'block');
                    $('#error_phone_a').html(data.message_phone_a);
                } else {
                    $('#error_phone_a').html('');
                }
                if(data.message_address_a){
                    $('.fr-error').css('display', 'block');
                    $('#error_address_a').html(data.message_address_a);
                } else {
                    $('#error_address_a').html('');
                }
                if(data.message_service_a){
                    $('.fr-error').css('display', 'block');
                    $('#error_service_a').html(data.message_service_a);
                } else {
                    $('#error_service_a').html('');
                }
                if(data.message_note_a){
                    $('.fr-error').css('display', 'block');
                    $('#error_note_a').html(data.message_note_a);
                } else {
                    $('#error_note_a').html('');
                }
                if (data.success) {
                    $('#calendar_form')[0].reset();
                    $('.bs-modal').removeClass('show-modal');
                    $('body').removeClass('active-modal');
                    toastr["success"](data.success, "Thông báo");
                }
                $('.loadingcover').hide();
            }
        });
    });

    $('.btn_calendar').click(function(e){
        e.preventDefault();
        $('.loadingcover').show();

        var UrlAppointment = $('#appointment_form').attr('action');
        var data = $("#appointment_form").serialize();

        $.ajax({
            type: 'POST',
            url: UrlAppointment,
            dataType: "json",
            data: data,
            success:function(data){
                if(data.message_name_a){
                    $('.fr-error').css('display', 'block');
                    $('#error_name').html(data.message_name_a);
                } else {
                    $('#error_name').html('');
                }
                if(data.message_email_a){
                    $('.fr-error').css('display', 'block');
                    $('#error_email').html(data.message_email_a);
                } else {
                    $('#error_email').html('');
                }
                if(data.message_phone_a){
                    $('.fr-error').css('display', 'block');
                    $('#error_phone').html(data.message_phone_a);
                } else {
                    $('#error_phone').html('');
                }
                if(data.message_service_a){
                    $('.fr-error').css('display', 'block');
                    $('#error_service').html(data.message_service_a);
                } else {
                    $('#error_service').html('');
                }
                if(data.message_note_a){
                    $('.fr-error').css('display', 'block');
                    $('#error_note').html(data.message_note_a);
                } else {
                    $('#error_note').html('');
                }
                if (data.success) {
                    $('#appointment_form')[0].reset();
                    toastr["success"](data.success, "Thông báo");
                }
                $('.loadingcover').hide();
            }
        });
    });
});
