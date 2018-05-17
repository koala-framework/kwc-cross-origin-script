var onReady = require('kwf/on-ready');
var loadedUrls = {};
onReady.onRender('.kwcClass', function(el) {
    var config = el.data('config');
    var start = function() {
        el.removeClass('kwcBem--loading');
    };
    if (loadedUrls[config.scriptUrl] === true) {
        start();
    } else {
        if (loadedUrls[config.scriptUrl]) {
            loadedUrls[config.scriptUrl].push(start);
        } else {
            loadedUrls[config.scriptUrl] = [ start ];
            var se = document.createElement('script');
            se.type = 'text/javascript';
            se.async = true;
            se.src = config.scriptUrl;
            se.onload = function() {
                loadedUrls[config.scriptUrl].forEach(function(i) {
                    i();
                });
                loadedUrls[config.scriptUrl] = true;
            };
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(se,s);
        }
    }
});

