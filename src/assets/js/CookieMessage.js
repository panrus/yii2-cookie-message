var CookieMessage = {
    init: function (cookie) {
        if (cookie === undefined) cookie = {};
        this.cookie(cookie);
        this.modal = jQuery('.CookieMessageBox');
        this.button = jQuery('.CookieMessageOk');
        this.bind();
    },
    cookie: function (cookie) {
        this.name = cookie.name;
        this.domain = cookie.domain;
        this.expires = cookie.expires;
        this.maxAge = cookie.maxAge;
        this.path = cookie.path;
        this.secure = cookie.secure;
    },
    agree: function (e) {
        e.preventDefault();
        this.createCookie();
        this.hideModal();
    },
    bind: function () {
        this.button.on('click', jQuery.proxy(this.agree, this));
    },
    createCookie: function () {
        var value = 1;
        document.cookie = this.name + '=' + value + this.setExpires() + this.setPath() + this.setDomain() + this.setMaxAge() + this.setSecure();
    },
    hideModal: function () {
        this.modal.css('display', 'none');
    },
    setDomain: function () {
        if (this.domain) {
            return '; domain=' + encodeURIComponent(this.domain);
        }
        return '';
    },
    setExpires: function () {
        if (this.expires) {
            var date = new Date();
            date.setTime(date.getTime() + (this.expires * 24 * 60 * 60 * 1000));
            return '; expires=' + date.toGMTString();
        }
        return '';
    },
    setMaxAge: function () {
        if (this.maxAge) {
            return '; max-age=' + this.maxAge;
        }
        return '';
    },
    setPath: function () {
        return '; path=' + (this.path ? this.path : '/');
    },
    setSecure: function () {
        if (this.secure) {
            return '; secure';
        }
        return '';
    }
};