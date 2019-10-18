$(function () {
    getTitles();
});

function getTitles() {
    $.ajax({
        url         : api.main + api.main_titles + '?no_paginate=true',
        type        : 'get',
        dataType    : 'json',
        success     : function (response) {
            var main_titles = response["data"];
            var $listMenu = $('#list--menu');
            $listMenu.empty();

            $.ajax({
                url         : api.main + api.top_titles + '?no_paginate=true',
                type        : 'get',
                dataType    : 'json',
                success     : function (response) {
                    var top_titles = response["data"];

                    for (var i = 0; i < main_titles.length; i++) {
                        var html =  '<li class="menu-item menu-item-has-children">' +
                                        '<i class="ion-arrow-down-b"></i>' +
                                        '<a href="javascript:void(0);">'+main_titles[i]["title"]+'</a>' +
                                        '<ul class="sub-menu menu-animation">';
                        for (var j = 0; j < top_titles.length; j++) {
                            if (top_titles[j]["main_title"] === main_titles[i]["identifier"]) {
                                html += '<li><a href="/arama?main_title='+main_titles[i]["identifier"]+'&top_title='+top_titles[j]["identifier"]+'">'+top_titles[j]["title"]+'</a></li>';
                            }
                        }

                        html +=     '</ul>' +
                            '</li>';

                        $listMenu.append(html);
                    }
                }
            });
        }
    });
}

String.prototype.turkishToLower = function(){
    var string = this;
    var letters = { "İ": "i", "I": "ı", "Ş": "ş", "Ğ": "ğ", "Ü": "ü", "Ö": "ö", "Ç": "ç" };
    string = string.replace(/(([İIŞĞÜÇÖ]))/g, function(letter){ return letters[letter]; })
    return string.toLowerCase();
}