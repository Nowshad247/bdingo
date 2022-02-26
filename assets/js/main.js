; jQuery(function ($) {
    function setLanguageCookie(cookieValue) {
        var today = new Date();
        var expire = new Date();
        var cookieName = 'lang';
        //var cookieValue = "bn";
        var nDays = 5;
        expire.setTime(today.getTime() + 3600000 * 24 * nDays);
        document.cookie = cookieName + "=" + escape(cookieValue) +
            ";expires=" + expire.toGMTString();
    }

    function setLanguage() {
        $("#lang_form").submit();
        return false;
    }

    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#front-image-slider").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 3000,
            maxwidth: 960,
            namespace: "callbacks",
            pause: true
        });
        $("#right-content a").click(function () {
            var url = $(this).attr('href');
            if (isExternal(url) && url != 'javascript:;') {
                openInNewTab(url);
                return false;
            }
        });
    });

    // function openInNewTab(url) {
    //     var win = window.open(url, '_blank');
    //     win.focus();
    // }

    // function isExternal(url) {
    //     var match = url.match(/^([^:\/?#]+:)?(?:\/\/([^\/?#]*))?([^?#]+)?(\?[^#]*)?(#.*)?/);
    //     if (typeof match[1] === "string" && match[1].length > 0 && match[1].toLowerCase() !== location.protocol)
    //         return true;
    //     if (typeof match[2] === "string" && match[2].length > 0 && match[2].replace(new RegExp(":(" + {
    //         "http:": 80,
    //         "https:": 443
    //     }[location.protocol] + ")?$"), "") !== location.host)
    //         return true;
    //     return false;
    // }
    $(function () {
        var cnt = 0;
        $(".nav-toggle").click(function () {
            cnt++;
            if (cnt % 2 == 1) {
                $(".mzr-responsive").slideDown("slow", function () {
                    // Animation complete.
                });
            } else {
                $(".mzr-responsive").slideUp("slow", function () {
                    // Animation complete.
                });
            }
        });

        var cnt_inner = 0;
        $(".mzr-drop a").click(function () {
            cnt_inner++;

            if (cnt_inner % 2 == 1) {
                if ($(this).next().length) {
                    $(this).next().slideDown("slow", function () {
                        // Animation complete.
                    });
                }
            } else {
                if ($(this).next().length) {
                    $(this).next().slideUp("slow", function () {
                        // Animation complete.
                    });
                }
            }

            //console.log($(this));

        });

    });
    var $domain = 'www.bangladesh.gov.bd';
    var $siteurl = '//' + $domain + '/topServiceLocator.php?name=topSite&number=10&from=2022-02-18&to=2022-02-23';
    getDataSites($siteurl, 'topsites');

    var $pageurl = '//' + $domain + '/topServiceLocator.php?name=topPage&number=10&from=2022-02-18&to=2022-02-23';
    //console.log($pageurl);
    getDataPages($pageurl, 'toppages');

    var $serviceurl = '//' + $domain + '/topServiceLocator.php?name=topService';
    getDataServices($serviceurl, 'topservices');

    function displayLoader($target) {
        $('.' + $target + ' span').show();
    }
    function hideLoader($target) {
        $('.' + $target + ' span').hide();
    }

    function getTopService($url, $target) {

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: $url,
            beforeSend: function () {
                displayLoader($target);
            },
            success: function (result) {
                $('.' + $target).html(result);
            },
            complete: function () {
                hideLoader($target);
            }
        });
    }

    function getDataSites($url, $target) {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: $url,
            beforeSend: function () {
                displayLoader($target);
            },
            dataType: 'json',
            success: function (result) {
                if ($target == 'topsites') {
                    decorateSites(result, $target);
                }
                else if ($target == 'toppages') {
                    decoratePages(result, $target);
                }
                else if ($target == 'topservices') {
                    decorateServices(result, $target);
                }
            },
            complete: function () {
                hideLoader($target);
            }
        });

    }

    function getDataPages($url, $target) {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: $url,
            beforeSend: function () {
                displayLoader($target);
            },
            dataType: 'json',
            success: function (result) {
                if ($target == 'topsites') {
                    decorateSites(result, $target);
                }
                else if ($target == 'toppages') {
                    decoratePages(result, $target);
                }
                else if ($target == 'topservices') {
                    decorateServices(result, $target);
                }
            },
            complete: function () {
                hideLoader($target);
            }
        });

    }

    function getDataServices($url, $target) {
        $.ajax({
            type: 'GET',
            url: $url,
            beforeSend: function () {
                displayLoader($target);
            },
            dataType: 'json',
            success: function (result) {
                if ($target == 'topsites') {
                    decorateSites(result, $target);
                }
                else if ($target == 'toppages') {
                    decoratePages(result, $target);
                }
                else if ($target == 'topservices') {
                    decorateServices(result, $target);
                }
            },
            complete: function () {
                hideLoader($target);
            }
        });

    }

    function decorateSites(result, $target) {
        var buffer = "<ul  style='list-style-type:square'>";
        $.each(result, function (index, val) {
            buffer += "<li><a title=" + val.label + " target='_blank' href=http://" + val.label + ">" + val.label + "</a></li>";
        });
        buffer += "</ul>";
        $('.' + $target).html(buffer);
    }
    function decoratePages(result, $target) {
        var buffer = "<ul  style='list-style-type:square'>";
        $.each(result, function (index, val) {
            $title = val.title;
            if ($title != null) {
                buffer += "<li><a title='" + escape(val.title) + "'  target='_blank'  href='http://www." + val.url + "'>" + $title.substring(0, 40) + '...' + "</a></li>";
            }
        });
        buffer += "</ul>";
        $('.' + $target).html(buffer);
    }

    function decorateServices(result, $target) {
        var buffer = "<ul  style='list-style-type:square'>";
        $.each(result, function (index, val) {
            $title = val.title_bn;
            buffer += "<li><a title=" + $title + " target='_blank' href=//www.bangladesh.gov.bd/redirector.php?url=" + val.service_url + "&id=" + val.id + ">" + $title + "</a></li>";
            ;
        });
        buffer += "</ul>";
        $('.' + $target).html(buffer);
    }



    $(document).ready(function () {
        setTimeout(popup, 3000);
    
        function popup() {
            $("#logindiv").css("display", "block");
        }
    
        $("#feedback-btn").click(function () {
            $("#contactdiv").css("display", "block");
            var winH = $(window).height();
            var winW = $(window).width();
            //Set the popup window to center
    
            var left = 1020 / 2 - $("#contactdiv").width() / 2;
            var top = winH / 2 - $("#contactdiv").height() / 2;
    
    
            $("#contactdiv").css('top', top);
            $("#contactdiv").css('left', left);
    
    
        });
        $("#cancel").click(function () {
            $("#contactdiv").hide();
            $("#name").val("");
            $("#email").val("");
            $("#message").val("");
        });
    
        $("#cancel-form").click(function () {
            $("#contactdiv").hide();
            $("#name").val("");
            $("#email").val("");
            $("#message").val("");
        });
    
        $("#send").click(function () {
    
            $("#msg-loading-icon").css("display", "block");
            var name = $("#name").val();
            var email = $("#email").val();
            var message = $("#message").val();
    
    
            if (name == "" || email == "" || message == "") {
                $("#msg-loading-icon").css("display", "none");
                alert("Please Fill All Fields");
            } else {
    
                $.post("feedback.html", {
                    name: name,
                    email: email,
                    message: message
                }, function (data, status) {
                    if (data == "OK") {
                        $("#msg-loading-icon").css("display",
                            "none");
                        $("#success-message").css("display",
                            "block");
                        $("#success-message").fadeIn(3000);
                        $("#success-message").css("margin-top",
                            "-10px");
    
                        $("#contactdiv").hide(5000);
                    }
                });
    
                //alert('cc');
                if (validateEmail(email)) {
                    //alert('cc');
                    $("#contactdiv").css("display", "none");
                } else {
                    alert('Invalid Email Address');
                }
    
                function validateEmail(email) {
                    //alert('dd');
                    var filter =
                        "/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/";
                    if (filter.test(email)) {
                        return true;
                    } else {
                        return false;
                    }
                }
            }
        });
    });

    $(function () {
        $("#infogra-corner").hover(function () {
            $("#infogra-first-item").css("background",
                "url('themes/responsive_npf/templates/bangladesh/images/infographic-bg-red.png') repeat-x;"
            );
        }, function () {
            $("#infogra-corner").css("background",
                "url('themes/responsive_npf/templates/bangladesh/images/infographic-corner.png') no-repeat left top"
            );
        });

        $("#infogra-first-item").hover(function () {
            $("#infogra-corner").css("background",
                "url('themes/responsive_npf/templates/bangladesh/images/info_corner_red.png') no-repeat left top"
            );
        },
            function () {
                $("#infogra-corner").css("background",
                    "url('themes/responsive_npf/templates/bangladesh/images/infographic-corner.png') no-repeat left top"
                );
            }
        );
    });

    $(function () {
        $("#circle").click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
            return false;
        });
    });

    $(function () {

            // eServices Tabs
            $('.eservices-tabs .tab-links a').on('click', function (e) {
                var currentAttrValue = $(this).attr('href');

                // Show/Hide Tabs
                $('.eservices-tabs ' + currentAttrValue).fadeIn(400).siblings().hide();

                // Change/remove current tab to active
                $(this).parent('li').addClass('active').siblings().removeClass('active');

                e.preventDefault();
            });
            // eServices Tabs

            // eServices Tab Slider
            $('.slider1').anyslider({
                animation: 'fade',
                interval: 3000,
                reverse: true,
                showControls: false,
                startSlide: 1
            });

            $('.slider2').anyslider({
                animation: 'fade',
                interval: 3000,
                reverse: true,
                showControls: false,
                startSlide: 1
            });


            // eServices Tab Slider


        });
        

        $(document).ready(function () {

            var parent = "";
            var domain_type = "";
            var siteurl = "index-2.html";


            $("#np-div-list").change(function () {


                parent = $("#np-div-list").val();
                domain_type = "District";

                if (parent == "") {
                    //alert("Please select ministry/division");
                } else {

                    $("#np-msg-loading-icon").css("display", "block");

                    $.post(siteurl + "/cd.portal.nav.bangla.php", { parent: parent, domain_type: domain_type }, function (data, status) {

                        $("#np-msg-loading-icon").css("display", "none");
                        $("#div-np-dist-list").css("display", "block");
                        $("#div-np-upz-list").css("display", "none");
                        $("#div-np-union-list").css("display", "none");

                        $("#go-np-dist-list").css("display", "none");
                        $("#np-dist-list").html(data);

                    });

                }

            });




            $("#np-dist-list").change(function () {

                $("#np-msg-loading-icon").css("display", "block");
                parent = $("#np-dist-list").val();
                domain_type = "Upazilla";

                if (parent == "") {
                    alert("Please select District");
                } else {

                    $.post(siteurl + "/cd.portal.nav.bangla.php", { parent: parent, domain_type: domain_type }, function (data, status) {

                        $("#np-msg-loading-icon").css("display", "none");
                        $("#div-np-upz-list").css("display", "block");
                        $("#div-np-union-list").css("display", "none");

                        $("#go-np-dist-list").css("display", "block");
                        $("#go-np-upz-list").css("display", "none");

                        $("#np-upz-list").html(data);

                    });

                }

            });


            $("#np-upz-list").change(function () {

                $("#np-msg-loading-icon").css("display", "block");
                parent = $("#np-upz-list").val();
                domain_type = "Union";

                if (parent == "") {
                    alert("Please select Upazilla");
                } else {

                    $.post(siteurl + "/cd.portal.nav.bangla.php", { parent: parent, domain_type: domain_type }, function (data, status) {

                        $("#np-msg-loading-icon").css("display", "none");
                        $("#div-np-union-list").css("display", "block");

                        $("#go-np-upz-list").css("display", "block");

                        $("#np-union-list").html(data);

                    });

                }

            });



            // GO TO URL
            var site_url = "";

            $("#go-np-div-list").click(function () {
                site_url = $("#np-div-list option:selected").attr('url');
                window.open(site_url, '_blank');
            });

            $("#go-np-dist-list").click(function () {
                site_url = $("#np-dist-list option:selected").attr('url');
                window.open(site_url, '_blank');
            });

            $("#go-np-upz-list").click(function () {
                site_url = $("#np-upz-list option:selected").attr('url');
                window.open(site_url, '_blank');
            });

            $("#go-np-union-list").click(function () {
                site_url = $("#np-union-list option:selected").attr('url');
                window.open(site_url, '_blank');
            });
        });
});









