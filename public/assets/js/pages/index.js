var current_type = 'oncoming';
var current_page = 1;
var html;

$(function () {
    $('#menu--home').addClass('active');
    getEvents(current_type);
});

function getEvents(type) {
    var $listEvents = $('#list--events');

    if (type !== current_type) {
        $listEvents.empty();
        $listEvents.html('<div class="text-center margin-b150 margin-t150 loading"><i class="fa fa-spin fa-spinner"></i> YÜKLENİYOR...</div>');
        current_page = 1;
        $('#event--types').find('li').each(function () {
            $(this).removeClass('active');
        });
        $('#event--' + type).addClass('active');
    }

    current_type = type;

    $.ajax({
        url         : api.main + api.events + '?eventType=' + current_type + '&page=' + current_page + '&status=approved',
        type        : 'get',
        dataType    : 'json',
        beforeSend  : function () {
            $('.load-more').html('YÜKLENİYOR...');
        },
        success     : function (response) {
            $('div.loading').remove();
            var events = response["data"];
            $listEvents.find('button').remove();
            if (events.length <= 0) {
                $listEvents.html('<div class="text-center margin-b150 margin-t150"><i class="fa fa-warning"></i> Bu kategoride etkinlik bulunmamaktadır.</div>');
                return;
            }
            html = '<div class="grid-blog row">';
            for (var i = 0; i < events.length; i++) {
                html += '<div class="post-item col-sm-4">' +
                            '<div class="post-thumb">' +
                                '<div class="list-cat-btn">' +
                                    '<ul>' +
                                        '<li><a href="/etkinlikler/'+events[i]["slug"]+'" class="university-bg">'+events[i]["mainTitleDetails"]["title"]+'</a></li>' +
                                    '</ul>' +
                                '</div>' +
                                '<a href="/etkinlikler/'+events[i]["slug"]+'"><img src="'+events[i]["pictureH"]+'" width="100%" alt="'+events[i]["title"]+'"></a>' +
                            '</div>' +
                            '<div class="post-info">' +
                                '<a href="/etkinlikler/'+events[i]["slug"]+'"><b>'+events[i]["title"]+'</b></a>' +
                                '<ul class="post-list-info">' +
                                    '<li>' +
                                        '<i class="ion-android-calendar"></i>&nbsp;' +
                                        '<span>'+moment(events[i]["beginDate"]).format('DD/MM/YYYY HH:mm, dddd')+'</span>' +
                                    '</li>' +
                                    '<li>' +
                                        '<a href="/arama?city='+events[i]["cityDetails"]["title"].turkishToLower()+'">' +
                                            '<i class="ion-ios-location"></i>&nbsp;' +
                                            '<span>'+events[i]["cityDetails"]["title"]+'</span>' +
                                        '</a>' +
                                    '</li>' +
                                '</ul>' +
                            '</div>' +
                        '</div>';
            }
            html += '</div>';
            $listEvents.append(html);
            if (current_page < response["meta"]["pagination"]["total_pages"]) {
                current_page = current_page + 1;
                $listEvents.append('<button class="color-title load-more" onclick="getEvents(\''+current_type+'\')">Daha Fazla</button>');
            }
        }
    });
}