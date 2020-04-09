// JavaScript Document
(function ($) {
    $(document).ready(function () {


        var $window = $(window),
            hd = $('#header'),
            hh = hd.outerHeight(),
            wh = $(window).outerHeight(),
            wst = $(window).scrollTop(),
            banner = $('#bannertop'),
            banner2 = $('#bannertop2');

        function imgres() {
            $(".iframeres").each(function () {
                var w = $(this).attr('width'),
                    h = $(this).attr('height');
                if (w && h) {
                    s = 'display: block';
                    $(this).wrap('<span class="imgres" style="' + s + '; "></span>');
                    var pr = $(this).parent(),
                        sp = $('<span style="padding-top:' + (h / w * 100) + '%;">');
                    pr.prepend(sp);
                }
            });
        }
        //imgres();


        // FIXED HEADER
        /*-----------------------------------------------------------------*/
        function headerSingle() {
            if ($('#panel').length > 0) { p = $('#panel').height(); } else { p = 0; }
            if (hd.hasClass('fixe')) {
                var ah = $('<div class="afterHeader"> ');
                hd.after(ah.height(hh));
                $(window).scroll(function () {
                    if ($(window).scrollTop() > p) $('#header').addClass('sticky');
                    else $('#header').removeClass('sticky');
                });
            }
        }
        var headerBanner = function () {
            $window.on('scroll', function (event) {
                event.preventDefault();
                var mainFirstChildHeight = banner.outerHeight();
                if ($window.scrollTop() < hh) {
                    hd.removeClass('stickyUp');
                }
                else if (($window.scrollTop() > 0) & ($window.scrollTop() < mainFirstChildHeight - hh)) {
                    hd.addClass('stickyUp');
                    hd.removeClass('stickyDown').removeClass('sticky');
                }
                else {
                    hd.addClass('stickyDown').addClass('sticky');
                    hd.removeClass('stickyUp');
                }

            });
        };
        if (banner.length > 0) {
            $('body').addClass('hasbanner');
        }
        if (banner2.length > 0) {
            $('body').addClass('hasbanner2');
        }

        // else {
        //     headerSingle();
        // } 

        headerSingle();






        // TOGGLECLASS
        /*-----------------------------------------------------------------*/
        $(".toggleClass > .toggle").each(function () {
            $(this).click(function () {
                $(this).parent().toggleClass('active');
            });
        });



        // VIDEO BG
        /*-----------------------------------------------------------------*/
        function resv(l) {
            var w = parseInt(l.width()),
                h = parseInt(l.height()),
                f = l.children(),
                dw = f.attr("width"),
                dh = f.attr("height");
            if (w > h && (h / w < dh / dw)) {
                hf = (w * dh) / dw;
                tf = -((hf - h) / 2);
                f.css({ 'width': "", 'height': hf, 'top': tf, 'left': "" });
            } else {
                wf = (h * dw) / dh;
                lf = -((wf - w) / 2);
                f.css({ 'width': wf, 'height': "", 'top': "", 'left': lf });
            }
        }

        function resVideo() {
            $(".wrapVideoBg").each(function () {
                resv($(this));
            });
        }

        // MENU MOBILE 
        /*-----------------------------------------------------------------*/
        $('.menu-btn').click(function () {
            $('body').toggleClass('showMenu');
        });


        $('ul.menu-top-header > li.megascreen >a').click(function () {
            $(this).parent().toggleClass('showmega');
        });


        $('.menu-top-header li[class*="children"]').each(function () {
            $(this).children('ul').wrap('<div class="wrapul"></div>');
        })



        var wrapmb = $('.wrap-menu-mb'),
            smb = wrapmb.data('style');
        wrapmb.find('li[class*="children"]').each(function () {
            var
                p = $(this),
                idli = p.attr('id'),
                ul = p.children('ul');
            btn = $('<span>', { 'class': 'showsubmenu icon-arrow-3', text: '' });
            p.children('ul').children('li').children('ul').attr("data-parent", idli);
            //a.addClass('outactive').attr("data-parent",id);

            if (smb == 1) {
                btn.click(function () {
                    if (p.hasClass('parent-showsub')) {
                        ul.slideUp(300, function () {
                            p.removeClass('parent-showsub');
                        });
                    } else {
                        ul.slideDown(300, function () {
                            p.addClass('parent-showsub');
                        });
                    }
                }); p.prepend(btn);
            } else if (smb == 2) {
                btn.click(function () {
                    p.toggleClass('activesubmenu');
                }); p.prepend(btn);
                var text = p.children('a').html();
                var head = $('<div class="menu-head"><h3>' + text + '</h3><span class="back"><i class="icon-arrow-3"></i></span></div>');

                ul.wrap('<div class="wrapul"></div>');

                p.children('.wrapul').prepend(head);
                $('.back').click(function () {
                    $(this).parent().parent().parent().removeClass('activesubmenu');
                });
            } else {
                var text = p.children('a').html();
                var head = $('<div class="menu-head"><h3>' + text + '</h3><span class="back"><i class="icon-arrow-3"></i></span></div>');

                id = p.attr('id');

                ulp = ul.data('parent');
                ul.wrap('<div id="w-' + id + '" data-parent="w-' + ulp + '"  class="wrapul"></div>');
                var wrap = p.children('.wrapul');
                wrap.prepend(head);


                wrapmb.append(wrap);

                btn.click(function () {
                    id = $(this).parent().attr('id');
                    a = p.closest(".wrapul");
                    if (a.hasClass('outactive')) {
                        a.removeClass('outactive').addClass('outactive2');
                    } else {
                        a.addClass('outactive');
                    }
                    wrapmb.children('#w-' + id + '').addClass('outactive');
                }); p.prepend(btn);


                $('.back').click(function () {
                    pr = $(this).parent().parent();
                    id = pr.data('parent');
                    pr.removeClass('outactive');
                    a = wrapmb.children('#' + id + '');
                    if (id == 'w-undefined') {
                        $('.wrapul.main').removeClass('outactive');
                    } else {
                        a.addClass('outactive').removeClass('outactive2');
                    }

                });
            }
        });    // append - prepend - after - before

        // EQUAL HEIGHT
        /*-----------------------------------------------------------------*/
        // equalHeight
        function equal() {
            $(".equalHeight").each(function () {
                var $this = $(this),
                    $equal = $this.find(".equal"),
                    padding = $this.attr('data-padding');
                if (!padding) padding = 0;
                if ($this.length > 0) {
                    $equal.imagesLoaded(function () {
                        equalHeight($equal, parseInt(padding));
                    });
                }
            });
        }
        /* Equal Height good*/
        function equalHeight(className, padding) {
            var tempHeight = 0;
            $(className).each(function () {
                current = $(this).height();
                if (parseInt(tempHeight) < parseInt(current)) {
                    tempHeight = current;
                }
            });
            $(className).css("height", tempHeight + padding + "px");
        }

        // CLICK SCROLL
        /*-----------------------------------------------------------------*/
        // Click scroll a
        $("a.scrollspy").click(function (event) {
            event.preventDefault();
            var id = $(this).attr('href'),
                top = $(id).offset().top;
            $('html, body').animate({
                scrollTop: $(id).offset().top - hh
            }, 1000)
        });

        // Back-top
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#back-top').addClass('show');
            } else {
                $('#back-top').removeClass('show');
            }
        });
        $('#back-top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        // THEME
        /*-----------------------------------------------------------------*/



        $("#product-menu li .item").each(function () {
            $(this).on('click',function () {
                var li = $(this).parent(),
                    img = $(this).data('img'),
                    link = $(this).data('link'),
                    text = $(this).html();
                $("#product-menu li").removeClass('active').removeClass('show');
                li.find('li:first-child').addClass('show');
                $(this).parents('li').addClass('active');


                syn = $('#product-menu .synproduct');
                syn.children('.img').children('img').attr('src', img);
                syn.children('.title').html(text);
                syn.children('.viewall').attr('href', link);

            });
        });


        //toggleHeight
        $(".toggleHeight > .toggle").each(function () {
            var p = $(this).parent(),
                c = p.children('.tgh-content'),
                f = c.children('.tgh-full'),
                first = f.children('.tgh-first'),
                full = f.outerHeight(),
                h = 0;
            first.each(function () {
                var current = $(this).outerHeight();
                h = h + current;
            });
            c.attr('data-sh', h).attr('data-fh', full);
            c.animate({ height: h + "px" }, { queue: false, duration: 300 });
            $(this).click(function () {
                var sh = c.data('sh'),
                    fh = c.data('fh');
                if ($(this).hasClass('less')) {
                    c.animate({ height: sh + "px" }, { queue: false, duration: 300 }).removeClass('less');
                    c.removeClass('less');
                    $(this).removeClass('less');
                } else {
                    c.animate({ height: fh + "px" }, { queue: false, duration: 300 }).addClass('less');;
                    $(this).addClass('less');
                }
            });
        });

        $(".block-single-1 .divtext ").each(function () {
            var w = $(this).outerWidth();
            $(this).css('height', w * 0.9 + 'px');
        });

        function syncInput(e) {
            $(".fsync").each(function () {
                s = $(this).data('sync');
                v = $(this).val();
                $('#' + s + '').html(v);
                $(this).change(function () {
                    s = $(this).data('sync');
                    v = $(this).val();
                    $('#' + s + '').html(v);
                });
            });
        }
        syncInput();


        $('.selectpicker').selectpicker({
            dropupAuto: false,
            hideDisabled: true,
            size: 10,
            noneSelectedText: 'Nhiều lựa chọn'
        });



        $('.sec-filter .bottomsearch').click(function () {
            if ($('.sec-filter').hasClass('showsearch')) {
                $('.sec-filter').removeClass('showsearch');
                $('.sec-filter .showmore').slideUp();

            } else {
                $('.sec-filter').addClass('showsearch');
                $('.sec-filter .showmore').slideDown();

                return false;
            }
        });
        $('.sec-filter .btnreset').click(function () {

            $('.selectpicker').val('default').selectpicker("refresh");


        });
        $('.box-collapse > .tab > .tab-title').each(function () {
            var btnInfo = $(this).click(function () {
                btnInfo.next().slideToggle(300);
                btnInfo.parent().toggleClass('show');
            });
        });
        $('.box-acordion > .tab > .tab-title').each(function () {
            $(this).click(function () {
                var parent = $(this).parent(),
                    acordion = $(this).parent().parent(),
                    tab = acordion.children('.tab');
                if (parent.hasClass('show')) {
                    $(this).next().slideToggle(300);
                    parent.removeClass('show');
                } else {
                    //hide
                    acordion.children('.tab').children('.tab-content').slideUp(300);
                    tab.removeClass('show');
                    //show
                    $(this).next().slideDown(300);
                    parent.addClass('show');
                };
            });
        });

        //---popup------//


        var member = "";
        var img = "", title = "", name = "";

        $('[data-dismiss="modal"]').click(function (e) {
            e.preventDefault();
            $("#loginModal").modal("show");
        });

        // LAZYLOAD
        /*-----------------------------------------------------------------*/
        var offdefault = 50;  //BJLL.threshold;
        var BJLL_options = BJLL_options || {},
            BJLL = {
                _ticking: !1,
                check: function () {
                    if (!BJLL._ticking) {
                        BJLL._ticking = !0, void 0 === BJLL.threshold && (void 0 !== BJLL_options.threshold ? BJLL.threshold = parseInt(BJLL_options.threshold) : BJLL.threshold = 200);
                        var e = document.documentElement.clientHeight || body.clientHeight,
                            t = !1,
                            n = document.getElementsByClassName("lazy-hidden");
                        [].forEach.call(n, function (n, a, i) {
                            var s = n.getBoundingClientRect(),
                                offset = parseFloat(n.getAttribute('offset'));
                            if (offset) o = 0 - offset;
                            else o = offdefault;
                            e - s.top + o > 0 && (BJLL.show(n), t = !0)
                        }), BJLL._ticking = !1, t && BJLL.check()
                    }
                },
                show: function (e) {
                    e.className = e.className.replace(/(?:^|\s)lazy-hidden(?!\S)/g, ""), e.addEventListener("load", function () {
                        e.className += " lazy-loaded", BJLL.customEvent(e, "lazyloaded");
                    }, !1);
                    var t = e.getAttribute("data-lazy-type");
                    e.className += ' loaded';
                    if ("image" == t) null != e.getAttribute("data-lazy-srcset") && e.setAttribute("srcset", e.getAttribute("data-lazy-srcset")), null != e.getAttribute("data-lazy-sizes") && e.setAttribute("sizes", e.getAttribute("data-lazy-sizes")), e.setAttribute("src", e.getAttribute("data-lazy-src"));

                    else if ("bg" == t) {
                        var n = e.getAttribute("data-lazy-src");
                        e.style.backgroundImage = 'url(' + n + ')';
                    }
                    else if ("iframe" == t) {
                        var n = e.getAttribute("data-lazy-src");

                        e.setAttribute('src', n);
                    }
                    else if ("mp4" == t) {
                        var n = e.getAttribute("data-lazy-src"),
                            a = '<source src="' + n + '" type="video/mp4">';
                        e.innerHTML += a;
                    }
                },
                customEvent: function (e, t) {
                    var n;
                    document.createEvent ? (n = document.createEvent("HTMLEvents")).initEvent(t, !0, !0) : (n = document.createEventObject()).eventType = t, n.eventName = t, document.createEvent ? e.dispatchEvent(n) : e.fireEvent("on" + n.eventType, n)
                }
            };
        window.addEventListener("load", BJLL.check, !1), window.addEventListener("scroll", BJLL.check, !1), window.addEventListener("resize", BJLL.check, !1), document.getElementsByTagName("body").item(0).addEventListener("post-load", BJLL.check, !1);

        // RESPONSIVE
        /*-----------------------------------------------------------------*/

        $window.bind("load", function () {
            equal();
            resVideo();
            $window.resize(function () {
                resVideo();
            });
        });

        isRes = function () { return $window.width() > 767 };
        $window.resize(function () {
            //if(isRes()){ followequal();}
            equal();
        });

        $("ul").find("#list-store").click(function (e) {
            e.preventDefault();
            var section = $(this).attr("href");
            var div = $("#list-store")
            $("html, body").animate({
                scrollTop: $(section).offset().top
            });
        });

        /** */
        
    });
})(jQuery); 
