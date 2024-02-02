$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.js-brone').on('click', function () {
        let id = $(this).data('id');
        $.ajax({
            type: 'POST',
            url: '/ajax',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (data) {
                $("#msg").html(data.msg);
            }
        });
    })


    $('#dovizSecimi').on('change', function () {
        let id = $(this).data('id');
        $.ajax({
            // type:'POST',
            // url:'/ajax',
            // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            // success:function(data){
            //     $("#msg").html(data.msg);

            type: 'POST',
            url: '/degisken-doviz',
            data: {currency: secilenDoviz},
            success: function (response) {
                // İşlem başarılı olduğunda yapılacaklar
                console.log('Oturum değeri gönderildi');
            }

        });
    });


})


