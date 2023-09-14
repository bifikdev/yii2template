// Api Ajax jQuery Plugin
(function ($) {
    var methods = {
        loadMonitoring: function (options) {
            const data = $.fn.api('ajaxRequest', options);

            // if (typeof (data) === 'object') {
            //     $.fn.api('renderMonitoring', data);
            // }
        },
        loadNews: function (options) {
        },

        ajaxRequest: function (options) {
            return $.ajax({
                url: options.url,
                type: 'json',
                success: function (response) {
                    if (response.hasError === false && typeof (response) === 'object') {
                        return response.data;
                    } else {
                        console.log('Error: ' + response);
                    }
                },
                error: function () {
                    console.log('Error Ajax Request');
                },
            });
        },
        renderMonitoring: function (data) {
            $(data).each(function (index, data) {
                $.fn.api('renderMonitoringItem', data);
            });
        },
        renderMonitoringItem: function (data) {
            // console.log(data);
            // $('#main_monitoring').append('<li class="list-inline-item"><div id="monitoring_item" class="card">' +
            //     '<div class="card-body">' +
            //     '<h5 class="card-title">' + data.name + '</h5>' +
            //     '<p class="card-text">' + data.online.Players + ' / ' + data.online.MaxPlayers + '</p>' +
            //     '</div></div></li>');
        },
        renderNews: function (data) {

        },
        renderNewsItem: function (data) {

        }
    };
    $.fn.api = function (method) {
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || !method) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Отсутствует метод ' + method);
        }
    }
})(jQuery);