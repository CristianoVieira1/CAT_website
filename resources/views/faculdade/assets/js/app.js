function scrollToTarget(e, i) {
    var t = $(e);
    i = new Object, t.length && $("html, body").animate({ scrollTop: t.offset().top + (i.offset || -headerHeight) }, i.duration || 1500)
}! function(e, o, t) {
    function a(a, n) {
        (t = this).opt = e.extend({}, o, a), t.$el = e(n);
        var r = t.$el.attr("href");
        r = /^(#.*)/.test(r) ? null : r, t.target = t.$el.attr("data-box-target") || t.opt.target, t.copy = !0 === e.parseJSON(t.$el.attr("data-box-copy") || t.opt.copy), t.html = t.$el.attr("data-box-html") || t.opt.html, t.image = t.$el.attr("data-box-image") || t.opt.image, t.url = t.$el.attr("data-box-url") || t.opt.url || r, t.success = t.$el.attr("data-box-success") || t.opt.success, t.info = t.$el.attr("data-box-info") || t.opt.info, t.warning = t.$el.attr("data-box-warning") || t.opt.warning, t.danger = t.$el.attr("data-box-danger") || t.opt.danger, t.header = t.$el.attr("data-box-header") || t.opt.header, t.footer = t.$el.attr("data-box-footer") || t.opt.footer, t.width = t.$el.attr("data-box-width") || t.opt.width, t.height = t.$el.attr("data-box-height") || t.opt.height, t.addClass = t.$el.attr("data-box-add-class") || t.opt.addClass, t.animateOpen = t.$el.attr("data-box-animate-open") || t.opt.animateOpen, t.animateClose = t.$el.attr("data-box-animate-close") || t.opt.animateClose, t.beforeOpen = t.$el.attr("data-box-before-open") ? new Function(t.$el.attr("data-box-before-open")) : t.opt.beforeOpen, t.afterOpen = t.$el.attr("data-box-after-open") ? new Function(t.$el.attr("data-box-after-open")) : t.opt.afterOpen, t.beforeClose = t.$el.attr("data-box-before-close") ? new Function(t.$el.attr("data-box-before-close")) : t.opt.beforeClose, t.afterClose = t.$el.attr("data-box-after-close") ? new Function(t.$el.attr("data-box-after-close")) : t.opt.afterClose, t.close = t.$el.attr("data-box-close") ? JSON.parse(t.$el.attr("data-box-close")) : t.opt.close, t.animation = t.$el.attr("data-box-animation") ? JSON.parse(t.$el.attr("data-box-animation")) : t.opt.animation, t.$box = e('<div class="edbox"/>'), t.$boxError = e('<div class="edbox-error"/>'), t.$boxLoad = e('<div class="edbox-load"/>'), t.$boxBody = e('<div class="edbox-body"/>'), t.$boxClose = e('<div class="edbox-close"/>'), t.$boxContent = e('<section class="edbox-content"/>'), t.$boxHeader = e('<header class="edbox-header"/>'), t.$boxFooter = e('<footer class="edbox-footer"/>'), t.$boxTemp = e('<div class="edbox-temp"/>'), t.animateEvents = "webkitAnimationEnd oanimationend msAnimationEnd animationend", t.init()
    }
    a.prototype = {
        init: function() {
            t.base();
            var o = t.target || t.html || t.image || t.url,
                a = (t.success ? "success" : t.info && "info") || t.warning && "warning" || t.danger && "danger";
            if (o || a) {
                if (t.beforeOpen(), !t.target) return t.html ? void t.insert(t.html) : t.image ? (t.imageObj = new Image, t.imageObj.src = t.image, void(t.imageObj.complete ? t.insert(t.imageObj) : t.load.start(t.image))) : t.url ? void t.load.start(t.url) : a ? void t.alert(a, t[a]) : void 0;
                var n = e(t.target);
                n.length ? (t.copy ? n = n.clone() : n.after(t.$boxTemp).addClass("edbox-target"), t.insert(n)) : t.error('Unable to find element: "' + t.target + '"')
            } else t.error("Undefined")
        },
        base: function() { t.$box.addClass(t.addClass).addClass(!t.close && "edbox-close-false").add(t.$boxClose).on("click", t.events.click), e("body").prepend(t.$box), e(window).on("keydown", t.events.keydown) },
        error: function(e) { t.$box.removeClass(t.opt.addClass), t.opt = o, t.responseError = !0, t.alert("danger", e) },
        alert: function(o, a) { t.$box.addClass("edbox-alert edbox-alert-" + o).append(e("<div/>").addClass("edbox-alert-container").append("<div>" + a + "</div>", t.$boxClose)), t.toggle("open") },
        insert: function(o) { t.$box.append(t.$boxBody.css({ width: t.width, height: t.height }).append(t.header ? t.$boxHeader.append(t.$boxClose, t.header) : t.$boxClose, t.$boxContent.append(o), t.footer && t.$boxFooter.append(t.footer))), t.boxCloseCssRight = t.$boxClose.css("right"), t.toggle("open"), e(window).on("resize", t.events.resize).resize() },
        toggle: function(e, o) { "close" == e && !t.loading && !t.responseError && t.beforeClose(), t.animation ? t.$box.children().removeClass(t.animateOpen, t.animateClose).addClass("open" == e ? t.animateOpen : t.animateClose).one(t.animateEvents, (function() { "function" == typeof o ? o() : t.callback[e]() })) : "function" == typeof o ? o() : t.callback[e]() },
        load: { start: function(o) { t.loading = !0, t.$box.append(t.$boxLoad), t.toggle("open", (function() { t.urlLoad = e.ajax({ url: o, cache: !t.image }).fail((function(e) { t.load.complete("error", (t.image || t.url) + " " + e.statusText.toLowerCase()) })).done((function(e) { t.load.complete("insert", null, t.imageObj || e) })) })) }, complete: function(e, o, a) { t.toggle("close", (function() { t.loading = !1, t.$boxLoad.remove(), t[e](o || a) })) } },
        events: {
            click: function(e) { t.close && e.target == e.currentTarget && t.toggle("close") },
            keydown: function(e) { t.close && 27 == e.which && t.toggle("close") },
            resize: function() {
                var e = t.$boxBody.outerHeight(),
                    o = t.$boxHeader.outerHeight(),
                    a = t.$boxFooter.outerHeight(),
                    n = t.$boxContent.get(0).scrollHeight,
                    r = Math.ceil(e - (o + a)) < n;
                t.$box[r ? "addClass" : "removeClass"]("edbox-scroll-y-true")
            }
        },
        callback: { open: function() {!t.responseError && t.afterOpen() }, close: function() { e(window).off({ keydown: t.events.keydown, resize: t.events.resize }), !t.responseError && !t.copy && e(t.target).removeClass("edbox-helper-class").appendTo(t.$boxTemp).unwrap(), t.loading && t.urlLoad.abort(), t.$box.remove(), e.removeData(window, "edbox"), !t.loading && !t.responseError && t.afterClose() } }
    }, e.edboxSettings = function(t) { return e.extend(o, t) }, e.edbox = function(o, t) { var n = e.data(window, "edbox"); return "close" == o && n ? void n.toggle("close") : "object" != typeof o && !e(t).length || n ? void 0 : void e.data(window, "edbox", new a(o, t)) }, e.fn.edbox = function(o) { return this.each((function() { e(this).on("click", (function(t) { t.preventDefault(), e.edbox(o, this) })) })) }, e("[edbox]").edbox()
}(jQuery, { target: null, copy: !1, html: null, image: null, url: null, success: null, info: null, warning: null, danger: null, header: null, footer: null, width: null, height: null, addClass: null, close: !0, animation: !0, animateOpen: "edbox-animate-open", animateClose: "edbox-animate-close", beforeOpen: function() {}, afterOpen: function() {}, beforeClose: function() {}, afterClose: function() {} }),
function(e) { "function" == typeof define && define.amd ? define(["jquery"], e) : e("object" == typeof exports ? require("jquery") : jQuery) }((function(e) {
    var t, n = navigator.userAgent,
        a = /iphone/i.test(n),
        i = /chrome/i.test(n),
        r = /android/i.test(n);
    e.mask = { definitions: { 9: "[0-9]", a: "[A-Za-z]", "*": "[A-Za-z0-9]" }, autoclear: !0, dataName: "rawMaskFn", placeholder: "_" }, e.fn.extend({
        caret: function(e, t) { var n; if (0 !== this.length && !this.is(":hidden") && this.get(0) === document.activeElement) return "number" == typeof e ? (t = "number" == typeof t ? t : e, this.each((function() { this.setSelectionRange ? this.setSelectionRange(e, t) : this.createTextRange && ((n = this.createTextRange()).collapse(!0), n.moveEnd("character", t), n.moveStart("character", e), n.select()) }))) : (this[0].setSelectionRange ? (e = this[0].selectionStart, t = this[0].selectionEnd) : document.selection && document.selection.createRange && (n = document.selection.createRange(), e = 0 - n.duplicate().moveStart("character", -1e5), t = e + n.text.length), { begin: e, end: t }) },
        unmask: function() { return this.trigger("unmask") },
        mask: function(n, o) {
            var c, l, u, f, s, g, h, m;
            if (!n && this.length > 0) { var d = (c = e(this[0])).data(e.mask.dataName); return d ? d() : void 0 }
            return o = e.extend({ autoclear: e.mask.autoclear, placeholder: e.mask.placeholder, completed: null }, o), l = e.mask.definitions, u = [], f = h = n.length, s = null, n = String(n), e.each(n.split(""), (function(e, t) { "?" == t ? (h--, f = e) : l[t] ? (u.push(new RegExp(l[t])), null === s && (s = u.length - 1), e < f && (g = u.length - 1)) : u.push(null) })), this.trigger("unmask").each((function() {
                function c() {
                    if (o.completed) {
                        for (var e = s; e <= g; e++)
                            if (u[e] && E[e] === d(e)) return;
                        o.completed.call(w)
                    }
                }

                function d(e) { return e < o.placeholder.length ? o.placeholder.charAt(e) : o.placeholder.charAt(0) }

                function p(e) { for (; ++e < h && !u[e];); return e }

                function v(e) { for (; --e >= 0 && !u[e];); return e }

                function b(e, t) {
                    var n, a;
                    if (!(e < 0)) {
                        for (n = e, a = p(t); n < h; n++)
                            if (u[n]) {
                                if (!(a < h && u[n].test(E[a]))) break;
                                E[n] = E[a], E[a] = d(a), a = p(a)
                            }
                        S(), w.caret(Math.max(s, e))
                    }
                }

                function k(e) {
                    var t, n, a, i;
                    for (t = e, n = d(e); t < h; t++)
                        if (u[t]) {
                            if (a = p(t), i = E[t], E[t] = n, !(a < h && u[a].test(i))) break;
                            n = i
                        }
                }

                function y(e) {
                    var t = w.val(),
                        n = w.caret();
                    if (m && m.length && m.length > t.length) {
                        for (T(!0); n.begin > 0 && !u[n.begin - 1];) n.begin--;
                        if (0 === n.begin)
                            for (; n.begin < s && !u[n.begin];) n.begin++;
                        w.caret(n.begin, n.begin)
                    } else {
                        var a = (T(!0), t.charAt(n.begin));
                        n.begin < h && (u[n.begin] ? u[n.begin].test(a) && n.begin++ : (n.begin++, u[n.begin].test(a) && n.begin++)), w.caret(n.begin, n.begin)
                    }
                    c()
                }

                function x(e) { T(), w.val() != D && w.change() }

                function j(e) {
                    if (!w.prop("readonly")) {
                        var t, n, i, r = e.which || e.keyCode;
                        m = w.val(), 8 === r || 46 === r || a && 127 === r ? (n = (t = w.caret()).begin, (i = t.end) - n == 0 && (n = 46 !== r ? v(n) : i = p(n - 1), i = 46 === r ? p(i) : i), R(n, i), b(n, i - 1), e.preventDefault()) : 13 === r ? x.call(this, e) : 27 === r && (w.val(D), w.caret(0, T()), e.preventDefault())
                    }
                }

                function A(t) {
                    if (!w.prop("readonly")) {
                        var n, a, i, o = t.which || t.keyCode,
                            l = w.caret();
                        if (!(t.ctrlKey || t.altKey || t.metaKey || o < 32) && o && 13 !== o) {
                            if (l.end - l.begin != 0 && (R(l.begin, l.end), b(l.begin, l.end - 1)), (n = p(l.begin - 1)) < h && (a = String.fromCharCode(o), u[n].test(a))) {
                                var f;
                                if (k(n), E[n] = a, S(), i = p(n), r) setTimeout((function() { e.proxy(e.fn.caret, w, i)() }), 0);
                                else w.caret(i);
                                l.begin <= g && c()
                            }
                            t.preventDefault()
                        }
                    }
                }

                function R(e, t) { var n; for (n = e; n < t && n < h; n++) u[n] && (E[n] = d(n)) }

                function S() { w.val(E.join("")) }

                function T(e) {
                    var t, n, a, i = w.val(),
                        r = -1;
                    for (t = 0, a = 0; t < h; t++)
                        if (u[t]) {
                            for (E[t] = d(t); a++ < i.length;)
                                if (n = i.charAt(a - 1), u[t].test(n)) { E[t] = n, r = t; break }
                            if (a > i.length) { R(t + 1, h); break }
                        } else E[t] === i.charAt(a) && a++, t < f && (r = t);
                    return e ? S() : r + 1 < f ? o.autoclear || E.join("") === C ? (w.val() && w.val(""), R(0, h)) : S() : (S(), w.val(w.val().substring(0, r + 1))), f ? t : s
                }
                var w = e(this),
                    E = e.map(n.split(""), (function(e, t) { if ("?" != e) return l[e] ? d(t) : e })),
                    C = E.join(""),
                    D = w.val();
                w.data(e.mask.dataName, (function() { return e.map(E, (function(e, t) { return u[t] && e != d(t) ? e : null })).join("") })), w.one("unmask", (function() { w.off(".mask").removeData(e.mask.dataName) })).on("focus.mask", (function() {
                    var e;
                    w.prop("readonly") || (clearTimeout(t), D = w.val(), e = T(), t = setTimeout((function() { w.get(0) === document.activeElement && (S(), e == n.replace("?", "").length ? w.caret(0, e) : w.caret(e)) }), 10))
                })).on("blur.mask", x).on("keydown.mask", j).on("keypress.mask", A).on("input.mask paste.mask", (function() {
                    w.prop("readonly") || setTimeout((function() {
                        var e = T(!0);
                        w.caret(e), c()
                    }), 0)
                })), i && r && w.off("input.mask").on("input.mask", y), T()
            }))
        }
    })
}));
var $header = $(".header"),
    headerHeight = $header.outerHeight(),
    ts = Math.round(new Date / 6e4);
$.getScript("https://d1cqjkd0k5bd3q.cloudfront.net/upload/geral/js/chat.js?v=1").done((function() { customChat("#E2353A") })), $.getScript("https://d1cqjkd0k5bd3q.cloudfront.net/upload/geral/js/detectmobilebrowser.js?v=1").done((function() {
    $('[href*="api.whatsapp"]').each((function() {
        if (!mobileCheck()) {
            var e = $(this).prop("href").replace("api", "web");
            $(this).prop("href", e)
        }
    }))
})), $(document).on("click", ".alert .close", (function(e) { $(this).parent(".alert").remove() })), $(".anchor-link").on("click", (function(e) {
    e.preventDefault();
    var i = "#" + $(this).attr("data-anchor");
    $(i).length ? (scrollToTarget(i), $(".menu-wrapper").removeClass("active")) : window.location = "/" + i
})), $(".btn-toggle-menu").on("click", (function() { $(this).add(".header-menu").toggleClass("active") })), $(".celular, [name=celular], .telefone, [name=telefone]").mask("(99) 99999-999?9"), location.hash && scrollToTarget(location.hash), $(document).ready((function() {
    $(window).on("scroll", (function() {
        var e;
        e = $(window).innerWidth() < 450 ? 700 : 200, $(window).scrollTop() > e ? $(".price-fixed").css("display", "flex") : $(".price-fixed").hide()
    }))
}));
var urlAtual = window.location.pathname;
$(document).ready((function() {
    var e = $(".link-inteiro").width(),
        i = $(".link-inteiro-pos").width(),
        t = $(".link-inteiro-ext").width(),
        o = $(".course-name").outerWidth(),
        a = $(".link-inteiro-pos ").find(".course-name").outerWidth(),
        n = $(".detail-duracao").outerWidth(),
        c = $(".detail-investimento").outerWidth(),
        r = $(".detail-carga").outerWidth(),
        s = $(".detail-inicio").outerWidth();
    $(".cabecalho").width(e), $(".cabecalho-pos").width(i), $(".cabecalho-ext").width(t), $(".name-pos").css("min-width", a), $(".name").css("min-width", o), $(".duracao").css("min-width", n), $(".investimento").css("min-width", c), $(".carga").css("min-width", r), $(".inicio").css("min-width", s);
    var d = $("#extensao").find(".course-name").outerWidth();
    $(".cabecalho-ext").find(".name").css("min-width", d), $(window).on("resize", (function() {
        var e = $(".link-inteiro").width(),
            i = $(".link-inteiro-pos").width(),
            t = $(".link-inteiro-ext").width(),
            o = $(".course-name").outerWidth(),
            a = $(".link-inteiro-pos ").find(".course-name").outerWidth(),
            n = $(".detail-duracao").outerWidth(),
            c = $(".detail-investimento").outerWidth(),
            r = $(".detail-carga").outerWidth(),
            s = $(".detail-inicio").outerWidth(),
            d = $("#extensao").find(".course-name").outerWidth();
        $(".cabecalho-ext").find(".name").css("min-width", d), $(".cabecalho").width(e), $(".cabecalho-pos").width(i), $(".cabecalho-ext").width(t), $(".name-pos").css("min-width", a), $(".name").css("min-width", o), $(".duracao").css("min-width", n), $(".investimento").css("min-width", c), $(".carga").css("min-width", r), $(".inicio").css("min-width", s)
    }));
    var h = $(".showcase").outerHeight(),
        l = $("#graduacao").outerHeight(),
        u = l + $("#posGraduacao").height();
    $(window).on("scroll", (function() { valor_atual = $(document).scrollTop(), valor_atual >= u ? ($(".cabecalho").hide(), $(".cabecalho-pos").hide()) : (valor_atual >= h ? ($(".cabecalho").addClass("fixa"), $(".cabecalho-pos").hide()) : ($(".cabecalho").removeClass("fixa"), $(".cabecalho-pos").show()), valor_atual >= l ? ($(".cabecalho").hide(), $(".cabecalho-pos").show(), $(".cabecalho-pos").addClass("fixa")) : ($(".cabecalho").show(), $(".cabecalho-pos").hide(), $(".cabecalho-pos").removeClass("fixa"))) })), $(".vermais").on("click", (function() {
        var e = $(this).data("target");
        if ("/" == urlAtual) var i = $(e).position().top - 300;
        else var i = $(e).position().top - 75;
        $("html").animate({ scrollTop: i }, 1e3)
    })), $("#filtroPolos #estado").on("change", (function() { $("#cidade").val(""), $("#filtroPolos").submit(), $("button").addClass("disabled") })), $("#filtroPolos #cidade").on("change", (function() { $("#filtroPolos").submit(), $("button").addClass("disabled") }))
})), $(document).on("click", ".heading-semestre", (function() { $(this).parent().toggleClass("accordion-active") })), $(document).on("click", ".heading-modulo", (function() { $(this).toggleClass("accordion-item-active") }));