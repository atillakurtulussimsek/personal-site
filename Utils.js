const moment = require('moment-timezone');

exports.skipLog = (req, res) => {
    var url = req.url;
    if (url.indexOf('?') > 0)
        url = url.substr(0, url.indexOf('?'));
    if (url.match(/(js|jpg|png|ico|css|woff|woff2|eot|map)$/ig)) {
        return true;
    }
    return false;
}

exports.getTime = (Clean = false) => {
    if(Clean == true){ return moment().tz("Europe/Istanbul").format("HH:mm:ss"); }else{ return "**``[" + moment().tz("Europe/Istanbul").format("HH:mm:ss") + "]``**"; }
}