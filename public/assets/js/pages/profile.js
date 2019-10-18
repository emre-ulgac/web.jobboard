$(function () {
    // Kişisel Bilgilerim event'i
    $('#profile_menu--personal_information').click(function () {
        hideContent();

        $(this).parent().addClass('current-menu-item');
        $('#content--personal_information').removeClass('hide');
    });

    // Bildirim Ayarlarım event'i
    $('#profile_menu--notification_settings').click(function () {
        hideContent();

        $(this).parent().addClass('current-menu-item');
        $('#content--notification_settings').removeClass('hide');
    });

    // Etkinlik Listem event'i
    $('#profile_menu--my_event_list').click(function () {
        hideContent();

        $(this).parent().addClass('current-menu-item');
        $('#content--my_event_list').removeClass('hide');
    });

    // Katılacağım Etkinlikler event'i
    $('#profile_menu--join_event').click(function () {
        hideContent();

        $(this).parent().addClass('current-menu-item');
        $('#content--my_join_event_list').removeClass('hide');
    });

    // Etkinlik Ekle event'i
    $('#profile_menu--add_event').click(function () {
        hideContent();

        $(this).parent().addClass('current-menu-item');
        $('#content--add_event').removeClass('hide');
    });

    $("#new_personal--file").on('change', (function() {
        readUrlUser(this);
        $(this).prop("value", "");
        $('#preview_user--save').attr('onclick', 'saveUserPicture();');
    }));

    var $user_picture = $('#picture_preview');
    var cropBoxData;
    var canvasData;

    $('#m_modal--user_preview').on('shown.bs.modal', function () {
        $user_picture.cropper({
            aspectRatio: 1 / 1,
            ready: function () {
                $user_picture.cropper('setCanvasData', canvasData);
                $user_picture.cropper('setCropBoxData', cropBoxData);
            }
        });
    }).on('hidden.bs.modal', function () {
        cropBoxData = $user_picture.cropper('getCropBoxData');
        canvasData = $user_picture.cropper('getCanvasData');
        $user_picture.cropper('destroy');
    });

    $('#area-of-interest-select').on('change', function () {
        var interest = $(this).find('option:selected').val();
        if (interest !== "") {
            $('#area-of-interest').tagsinput('add', interest);
            $(this).find('option:eq(0)').prop('selected', true);
        }
    });

    $("#new_event--file").on('change', (function() {
        readUrlEvent(this);
        $(this).prop("value", "");
        $('#preview_event--save').attr('onclick', 'saveEventPoster();');
    }));

    var $image_vertical = $('#poster_preview_vertical');
    var $image_horizontal = $('#poster_preview_horizontal');
    var cropBoxData_vertical;
    var cropBoxData_horizontal;
    var canvasData_vertical;
    var canvasData_horizontal;

    $('#m_modal--event_preview').on('shown.bs.modal', function () {
        $image_vertical.cropper({
            aspectRatio: 5 / 7,
            ready: function () {
                $image_vertical.cropper('setCanvasData', canvasData_vertical);
                $image_vertical.cropper('setCropBoxData', cropBoxData_vertical);
            }
        });

        $image_horizontal.cropper({
            aspectRatio: 3 / 2,
            ready: function () {
                $image_horizontal.cropper('setCanvasData', canvasData_horizontal);
                $image_horizontal.cropper('setCropBoxData', cropBoxData_horizontal);
            }
        });
    }).on('hidden.bs.modal', function () {
        cropBoxData_vertical = $image_vertical.cropper('getCropBoxData');
        canvasData_vertical = $image_vertical.cropper('getCanvasData');
        $image_vertical.cropper('destroy');

        cropBoxData_horizontal = $image_horizontal.cropper('getCropBoxData');
        canvasData_horizontal = $image_horizontal.cropper('getCanvasData');
        $image_horizontal.cropper('destroy');
    });

    $('#new_event--main_title').on('change', function () {
        var $subTitles = $('#new_event--sub_title');
        $subTitles.find('option').not(':first').remove();
        $subTitles.parent().addClass('hide');

        var selected = $(this).find('option:selected').val();
        if (!selected) {
            var $topTitles = $('#new_event--top_title');
            $topTitles.find('option').not(':first').remove();
            $topTitles.parent().addClass('hide');
            return;
        }

        $.ajax({
            url         : api.main + api.main_titles + '/' + selected + api.top_titles + '?no_paginate=true',
            type        : 'get',
            dataType    : 'json',
            success     : function (response) {
                var $topTitles = $('#new_event--top_title');
                $topTitles.find('option').not(':first').remove();
                for (var i = 0; i < response["data"].length; i++) {
                    $topTitles.append('<option value="'+response["data"][i]["identifier"]+'">'+response["data"][i]["title"]+'</option>');
                }
                $topTitles.parent().removeClass('hide');
            }
        });
    });

    $('#new_event--top_title').on('change', function () {
        var selected = $(this).find('option:selected').val();
        if (!selected) {
            var $subTitles = $('#new_event--sub_title');
            $subTitles.find('option').not(':first').remove();
            $subTitles.parent().addClass('hide');
            return;
        }

        $.ajax({
            url         : api.main + api.top_titles + '/' + selected + api.sub_titles + '?no_paginate=true',
            type        : 'get',
            dataType    : 'json',
            success     : function (response) {
                var $subTitles = $('#new_event--sub_title');
                $subTitles.find('option').not(':first').remove();
                if (response["data"].length > 0) {
                    for (var i = 0; i < response["data"].length; i++) {
                        $subTitles.append('<option value="'+response["data"][i]["identifier"]+'">'+response["data"][i]["title"]+'</option>');
                    }
                    $subTitles.parent().removeClass('hide');
                } else {
                    $subTitles.parent().addClass('hide');
                }
            }
        });
    });

    $('#new_event--interests1').on('change', function () {
        var interest = $(this).find('option:selected').val();
        if (interest !== "") {
            $('#new_event--tags').tagsinput('add', interest);
            $(this).find('option:eq(0)').prop('selected', true);
        }
    });

    $('#new_event--interests2').on('change', function () {
        var interest = $(this).find('option:selected').val();
        if (interest !== "") {
            $('#new_event--tags').tagsinput('add', interest);
            $(this).find('option:eq(0)').prop('selected', true);
        }
    });

    $('#new_event--interests3').on('change', function () {
        var interest = $(this).find('option:selected').val();
        if (interest !== "") {
            $('#new_event--tags').tagsinput('add', interest);
            $(this).find('option:eq(0)').prop('selected', true);
        }
    });

    $('#new_event--interests4').on('change', function () {
        var interest = $(this).find('option:selected').val();
        if (interest !== "") {
            $('#new_event--tags').tagsinput('add', interest);
            $(this).find('option:eq(0)').prop('selected', true);
        }
    });

    $('#new_event--interests5').on('change', function () {
        var interest = $(this).find('option:selected').val();
        if (interest !== "") {
            $('#new_event--tags').tagsinput('add', interest);
            $(this).find('option:eq(0)').prop('selected', true);
        }
    });

    $('#new_event--beginDate').datetimepicker({
        language: 'tr',
        todayHighlight: !0,
        autoclose: !0,
        format: "dd/mm/yyyy hh:ii",
        pickerPosition: "bottom-right",
        minDate: new Date()
    });
});

/**
 * Tüm içeriği gizler, yeni içeriği göstermeden önce varolanları gizlemek için kullanılır.
 */
function hideContent() {
    $('.current-menu-list').find('li').each(function () {
        $(this).removeClass('current-menu-item');
    });

    $('#content--personal_information').addClass('hide');
    $('#content--notification_settings').addClass('hide');
    $('#content--my_event_list').addClass('hide');
    $('#content--my_join_event_list').addClass('hide');
    $('#content--add_event').addClass('hide');
}

function readUrlUser(input) {
    var file = input.files[0];
    var imageFile = file.type;
    var imageSize = file.size;
    var match = ["image/jpeg", "image/png", "image/jpg"];
    var maxSize = 2097152;

    if (imageSize > maxSize) {
        swal("Hata!", "Görsel en fazla 2MB olabilir.", "error");
    } else if (!((imageFile == match[0]) || (imageFile == match[1]) || (imageFile == match[2]))) {
        swal("Hata!", "Yüklediğiniz görsel desteklenmiyor.", "error");
    } else {
        var reader = new FileReader();
        reader.onload = function(e) {
            $("#picture_preview").attr("src", e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
        $('#m_modal--user_preview').modal({backdrop: 'static', keyboard: false});
    }
}

function saveUserPicture() {
    var canvas = $('#picture_preview').cropper('getCroppedCanvas');
    if (canvas.toBlob) {
        canvas.toBlob(function (blob) {
            var formData = new FormData();
            formData.append('file', blob);

            $.ajax({
                url         : api.main + api.file_upload,
                type        : 'post',
                data        : formData,
                cache       : false,
                processData : false,
                contentType : false,
                context     : this,
                dataType    : 'json',
                success     : function (response) {
                    $("#picture").attr("src", api.tmp + '/' + response["data"]["file"]).attr('data-name', response["data"]["file"]);
                },
                error       : function (request) {
                    swal(JSON.stringify(request["responseJSON"]["code"]), JSON.stringify(request["responseJSON"]["error"]), "error");
                }
            });
        });
    }

    $('#m_modal--user_preview').modal('hide');
}

function readUrlEvent(input) {
    var file = input.files[0];
    var imageFile = file.type;
    var imageSize = file.size;
    var match = ["image/jpeg", "image/png", "image/jpg"];
    var maxSize = 2097152;

    if (imageSize > maxSize) {
        swal("Hata!", "Görsel en fazla 2MB olabilir.", "error");
    } else if (!((imageFile == match[0]) || (imageFile == match[1]) || (imageFile == match[2]))) {
        swal("Hata!", "Yüklediğiniz görsel desteklenmiyor.", "error");
    } else {
        var reader = new FileReader();
        reader.onload = function(e) {
            $("#poster_preview_vertical").attr("src", e.target.result);
            $("#poster_preview_horizontal").attr("src", e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
        $('#m_modal--event_preview').modal({backdrop: 'static', keyboard: false});
    }
}

function saveEventPoster() {
    var canvas = $('#poster_preview_vertical').cropper('getCroppedCanvas');
    if (canvas.toBlob) {
        canvas.toBlob(function (blob) {
            var formData = new FormData();
            formData.append('file', blob);

            $.ajax({
                url         : api.main + api.file_upload,
                type        : 'post',
                data        : formData,
                cache       : false,
                processData : false,
                contentType : false,
                context     : this,
                dataType    : 'json',
                success     : function (response) {
                    $("#new_event--previewV").attr("src", api.tmp + '/' + response["data"]["file"]).attr('data-name', response["data"]["file"]);
                },
                error       : function (request) {
                    swal(JSON.stringify(request["responseJSON"]["code"]), JSON.stringify(request["responseJSON"]["error"]), "error");
                }
            });
        });
    }

    canvas = $('#poster_preview_horizontal').cropper('getCroppedCanvas');
    if (canvas.toBlob) {
        canvas.toBlob(function (blob) {
            var formData = new FormData();
            formData.append('file', blob);

            $.ajax({
                url         : api.main + api.file_upload,
                type        : 'post',
                data        : formData,
                cache       : false,
                processData : false,
                contentType : false,
                context     : this,
                dataType    : 'json',
                success     : function (response) {
                    $("#new_event--previewH").attr("src", api.tmp + '/' + response["data"]["file"]).attr('data-name', response["data"]["file"]);
                },
                error       : function (request) {
                    swal(JSON.stringify(request["responseJSON"]["code"]), JSON.stringify(request["responseJSON"]["error"]), "error");
                }
            });
        });
    }

    $('#m_modal--event_preview').modal('hide');
}

function createNewEvent() {
    var user_id = $('#new_event--user_id').val();
    var pictureV = $('#new_event--previewV').attr('data-name');
    var pictureH = $('#new_event--previewH').attr('data-name');
    var main_title = $('#new_event--main_title').find('option:selected').val();
    var top_title = $('#new_event--top_title').find('option:selected').val();
    var sub_title = $('#new_event--sub_title').find('option:selected').val();
    var event_type = 'standard';
    var title = $('#new_event--title').val();
    var details = $('#new_event--details').val();
    var event_link = $('#new_event--link').val();
    var city = $('#new_event--city').find('option:selected').val();
    var $begin_date = $('#new_event--beginDate');
    if (!$begin_date.val()) {
        var begin_date = "";
    } else {
        var tmp_datetime = $begin_date.val().split(" ");
        var tmp_date = tmp_datetime[0].split("/");
        var tmp_time = tmp_datetime[1];
        begin_date = tmp_date[2] + '-' + tmp_date[1] + '-' + tmp_date[0] + ' ' + tmp_time + ':00';
    }
    var tags = $('#new_event--tags').tagsinput('items');

    if (!pictureV || !pictureH || !main_title || !top_title || !title || !details || !event_link || !city || !begin_date) {
        swal("Hata!", "Lütfen gerekli alanları doldurun.", "error");
        return;
    }

    $.ajax({
        url         : api.main + api.events,
        type        : 'post',
        data        : {
            'pictureV'  : pictureV,
            'pictureH'  : pictureH,
            'main_title': main_title,
            'top_title' : top_title,
            'sub_title' : sub_title,
            'eventType' : event_type,
            'user'      : user_id,
            'title'     : title,
            'details'   : details,
            'eventLink' : event_link,
            'city'      : city,
            'beginDate' : begin_date,
            'status'    : 'pending',
            'tags'      : tags
        },
        dataType    : 'json',
        success     : function () {
            $('#m_modal_new').modal('hide');
            swal("Başarılı!", "Etkinlik oluşturuldu", "success");
            setTimeout(function () {
                location.reload();
            }, 2000);
        },
        error       : function (request) {
            swal(JSON.stringify(request["responseJSON"]["code"]), JSON.stringify(request["responseJSON"]["error"]), "error");
        }
    });
}

function changePersonalInformation() {
    var picture = $('#picture').attr('data-name');
    var birthDate_day = $('#birthday--day').find('option:selected').val();
    var birthDate_month = $('#birthday--month').find('option:selected').val();
    var birthDate_year = $('#birthday--year').find('option:selected').val();
    var gender = $('#gender').val();
    var email = $.trim($('#email').val());
    var job = $('#job').find('option:selected').val();
    var interests = $('#area-of-interest').tagsinput('items');
    var phone = $('#phone').val();
    var password = $('#password').val();
    var repassword = $('#repassword').val();

    if (!birthDate_day || !birthDate_month || !birthDate_year || !email) {
        swal('Hata!', 'Lütfen gerekli alanları doldurun.', "error");
        return;
    }

    if ((password && !repassword) || (!password && repassword)) {
        swal('Hata!', 'Lütfen parolanızı değiştirmek için iki alanı da doldurun.', "error");
        return;
    }

    if (password && repassword && password.length < 6) {
        swal('Hata!', 'Parolanız en az 6 karakterden oluşmalıdır.', "error");
        return;
    }

    if (password !== repassword) {
        swal('Hata!', 'Parolalar eşleşmemektedir.', "error");
        return;
    }

    if (birthDate_day < 0) birthDate_day = '0' + birthDate_day;
    if (birthDate_month < 0) birthDate_month = '0' + birthDate_month;
    var birthDate = birthDate_year + '-' + birthDate_month + '-' + birthDate_day;

    $.ajax({
        url         : api.main + api.users + '/' + $('#user_id').val(),
        type        : 'put',
        data        : {
            'email'                 : email,
            'birthDate'             : birthDate,
            'gender'                : gender,
            'phone'                 : phone,
            'job'                   : job,
            'picture'               : picture,
            'interests'             : interests,
            'password'              : password,
            'password_confirmation' : repassword
        },
        dataType    : 'json',
        success     : function (response) {
            swal('Başarılı!', 'Bilgileriniz başarıyla güncellendi.', "success");
            $('#image--avatar').attr('src', response["data"]["picture"]);
        },
        error       : function (request) {
            swal(JSON.stringify(request["responseJSON"]["code"]), JSON.stringify(request["responseJSON"]["error"]), "error");
        }
    });
}

function changeNotificationSettings() {
    var setting = [];
    if ($('#notification--oncoming_events').is(":checked")) setting.push('1');
    if ($('#notification--popular_events').is(":checked")) setting.push('2');
    if ($('#notification--interested_events').is(":checked")) setting.push('3');
    if ($('#notification--reminders_of_events_on_my_list').is(":checked")) setting.push('4');
    if ($('#notification--event_suggestions').is(":checked")) setting.push('5');
    $.ajax({
        url         : api.main + api.users + '/' + $('#user_id').val() + api.notification_settings,
        type        : 'post',
        data        : {
            'setting' : setting
        },
        dataType    : 'json',
        success     : function (response) {
            swal('Başarılı!', response["data"], "success");
        },
        error       : function (request) {
            swal(JSON.stringify(request["responseJSON"]["code"]), JSON.stringify(request["responseJSON"]["error"]), "error");
        }
    });
}

function getUserEvents(page) {
    $.ajax({
        url         : api.main + api.users + '/' + $('#user_id').val() + api.events + '?page=' + page,
        type        : 'get',
        dataType    : 'json',
        beforeSend  : function () {
            $('.load-more').html('YÜKLENİYOR...');
        },
        success     : function (response) {
            $('.load-more').remove();
            html = '';
            var $userEvents = $('#events--user_events');
            for (var i = 0; i < response["data"].length; i++) {
                html += '<div class="post-item col-sm-4">' +
                    '<div class="post-thumb">' +
                    '<div class="list-cat-btn">' +
                    '<ul>' +
                    '<li><a href="/etkinlikler/'+response["data"][i]["slug"]+'" class="university-bg">'+response["data"][i]["mainTitleDetails"]["title"]+'</a></li>' +
                    '</ul>' +
                    '</div>' +
                    '<a href="/etkinlikler/'+response["data"][i]["slug"]+'"><img src="'+response["data"][i]["pictureH"]+'" alt=""></a>' +
                    '</div>' +
                    '<div class="post-info">' +
                    '<a href="/etkinlikler/'+response["data"][i]["slug"]+'"><b>'+response["data"][i]["title"]+'</b></a>' +
                    '<ul class="post-list-info">' +
                    '<li>' +
                    '<i class="ion-android-calendar"></i>&nbsp;' +
                    '<span>'+moment(response["data"][i]["beginDate"]).format('DD/MM/YYYY HH:mm, dddd')+'</span>' +
                    '</li>' +
                    '<li>' +
                    '<a href="/arama?city='+response["data"][i]["cityDetails"]["title"].turkishToLower()+'">' +
                    '<i class="ion-ios-location"></i>&nbsp;' +
                    '<span>'+response["data"][i]["cityDetails"]["title"]+'</span>' +
                    '</a>' +
                    '</li>' +
                    '</ul>' +
                    '</div>' +
                    '</div>';
            }
            $userEvents.append(html);
            if (page < response["meta"]["pagination"]["total_pages"]) {
                page = parseInt(page) + 1;
                $userEvents.append('<button class="color-title load-more" onclick="getUserEvents(\''+page+'\')">Daha Fazla</button>');
            }
        }
    });
}

function getUserParticipants(page) {
    $.ajax({
        url         : api.main + api.users + '/' + $('#user_id').val() + api.event_participant + '?page=' + page,
        type        : 'get',
        dataType    : 'json',
        beforeSend  : function () {
            $('.load-more').html('YÜKLENİYOR...');
        },
        success     : function (response) {
            $('.load-more').remove();
            var html = '';
            var $userParticipants = $('#events--user_participants');
            for (var i = 0; i < response["data"].length; i++) {
                html += '<div class="post-item col-sm-4">' +
                    '<div class="post-thumb">' +
                    '<div class="list-cat-btn">' +
                    '<ul>' +
                    '<li><a href="/etkinlikler/'+response["data"][i]["slug"]+'" class="university-bg">'+response["data"][i]["mainTitleDetails"]["title"]+'</a></li>' +
                    '</ul>' +
                    '</div>' +
                    '<a href="/etkinlikler/'+response["data"][i]["slug"]+'"><img src="'+response["data"][i]["pictureH"]+'" alt=""></a>' +
                    '</div>' +
                    '<div class="post-info">' +
                    '<a href="/etkinlikler/'+response["data"][i]["slug"]+'"><b>'+response["data"][i]["title"]+'</b></a>' +
                    '<ul class="post-list-info">' +
                    '<li>' +
                    '<i class="ion-android-calendar"></i>&nbsp;' +
                    '<span>'+moment(response["data"][i]["beginDate"]).format('DD/MM/YYYY HH:mm, dddd')+'</span>' +
                    '</li>' +
                    '<li>' +
                    '<a href="/arama?city='+response["data"][i]["cityDetails"]["title"].turkishToLower()+'">' +
                    '<i class="ion-ios-location"></i>&nbsp;' +
                    '<span>'+response["data"][i]["cityDetails"]["title"]+'</span>' +
                    '</a>' +
                    '</li>' +
                    '</ul>' +
                    '</div>' +
                    '</div>';
            }
            $userParticipants.append(html);
            if (page < response["meta"]["pagination"]["total_pages"]) {
                page = parseInt(page) + 1;
                $userParticipants.append('<button class="color-title load-more" onclick="getUserParticipants(\''+page+'\')">Daha Fazla</button>');
            }
        }
    });
}

String.prototype.turkishToLower = function(){
    var string = this;
    var letters = { "İ": "i", "I": "ı", "Ş": "ş", "Ğ": "ğ", "Ü": "ü", "Ö": "ö", "Ç": "ç" };
    string = string.replace(/(([İIŞĞÜÇÖ]))/g, function(letter){ return letters[letter]; })
    return string.toLowerCase();
}