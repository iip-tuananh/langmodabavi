function lazyloadImage() {
	var ll = new LazyLoad({
		elements_selector: ".lazyload",
		load_delay: 500,
		threshold: 0
	});
}

function convertVietnamese(i) {
	return i = i.toLowerCase(), i = i.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a"), 
		i = i.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e"), i = i.replace(/ì|í|ị|ỉ|ĩ/g, "i"), 
		i = i.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o"), i = i.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u"), 
		i = i.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y"), i = i.replace(/đ/g, "d"), i = i.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g, "-"), 
		i = i.replace(/-+-/g, "-"), i = i.replace(/^\-+|\-+$/g, "");
}

function product_action(i) {}

function callbackW() {
	iWishCheck(), iWishCheckInCollection(), $(".iWishAdd").click(function() {
		var i = iWish$(this).parents("form").find("[name='id']").val();
		void 0 === i && (i = iWish$(this).parents("form").find("[name='variantId']").val());
		var e = iWish$(this).attr("data-product");
		if (("collection" == Bizweb.template || "index" == Bizweb.template) && (i = iWish$(this).attr("data-variant")), 
			void 0 === i || void 0 === e) return !1;
		if (0 == iwish_cid) iWishGotoStoreLogin(); else {
			var t = {
				actionx: "add",
				cust: iwish_cid,
				pid: e,
				vid: i
			};
			iWish$.post(iWishLink, t, function(e) {
				if (void 0 != iWishFindAndGetVal("#iwish_post_result", e)) {
					var t = "true" === ("" + iWishFindAndGetVal("#iwish_post_result", e)).toLowerCase(), a = parseInt(iWishFindAndGetVal("#iwish_post_redirect", e), 10);
					t && ("product" == Bizweb.template ? (iWish$(".iWishAdd").addClass("iWishHidden"), 
														  iWish$(".iWishAdded").removeClass("iWishHidden"), 2 == a && iWishSubmit(iWishLink, {
						cust: iwish_cid
					})) : ("collection" == Bizweb.template || "index" == Bizweb.template) && iWish$.each(iWish$(".iWishAdd"), function() {
						var e = $(this);
						e.attr("data-variant") == i && (e.addClass("iWishHidden"), e.parent().find(".iWishAdded").removeClass("iWishHidden"));
					}));
				}
			}, "html");
		}
		return !1;
	}), $(".iWishAdded").click(function() {
		var i = iWish$(this).parents("form").find("[name='id']").val();
		void 0 === i && (i = iWish$(this).parents("form").find("[name='variantId']").val());
		var e = iWish$(this).attr("data-product");
		if (("collection" == Bizweb.template || "index" == Bizweb.template) && (i = iWish$(this).attr("data-variant")), 
			void 0 === i || void 0 === e) return !1;
		if (0 == iwish_cid) iWishGotoStoreLogin(); else {
			var t = {
				actionx: "remove",
				cust: iwish_cid,
				pid: e,
				vid: i
			};
			iWish$.post(iWishLink, t, function(e) {
				if (void 0 != iWishFindAndGetVal("#iwish_post_result", e)) {
					var t = "true" === ("" + iWishFindAndGetVal("#iwish_post_result", e)).toLowerCase();
					parseInt(iWishFindAndGetVal("#iwish_post_redirect", e), 10);
					t && ("product" == Bizweb.template ? (iWish$(".iWishAdd").removeClass("iWishHidden"), 
														  iWish$(".iWishAdded").addClass("iWishHidden")) : ("collection" == Bizweb.template || "index" == Bizweb.template) && iWish$.each(iWish$(".iWishAdd"), function() {
						var e = $(this);
						e.attr("data-variant") == i && (e.removeClass("iWishHidden"), e.parent().find(".iWishAdded").addClass("iWishHidden"));
					}));
				}
			}, "html");
		}
		return !1;
	});
}

window.awe = window.awe || {}, awe.init = function() {
	awe.showPopup(), awe.hidePopup();
}, lazyloadImage(), window.convertVietnamese = convertVietnamese, window.product_action = product_action, 
	window.callbackW = callbackW, $(".nav-category .fa-angle-down").click(function(i) {
	$(this).parent().toggleClass("active");
}), jQuery(document).ready(function(i) {
	 i("#nav-mobile .fa").click(function(e) {
		e.preventDefault(), i(this).parent().parent().toggleClass("open");
	}), i(".menu-bar").click(function(e) {
		e.preventDefault(), i("#nav-mobile").toggleClass("open");
	}), i(".open-filters").click(function(e) {
		i(this).toggleClass("open"), i(".dqdt-sidebar").toggleClass("open");
	}), i(".inline-block.account-dr>a").click(function(e) {
		i(window).width() < 992 && e.preventDefault();
	}), navigator.userAgent.toLowerCase().indexOf("firefox") > -1 && (i(".sidebar-category .aside-content .nav-item .fa.fa-caret-right").css("top", "19px"), 
																	  i(".sidebar-category .aside-content .nav-item .nav-item .fa.fa-caret-right").css("top", "16px"));
}), $(".site-footer h3").click(function() {
	$(this).parent().find(".list-menu").toggleClass("active"), $(this).toggleClass("active");
}), $(".aside.aside-mini-products-list .aside-title h3").click(function() {
	$(this).parents(".aside-mini-products-list").find("#collection-filters-container").toggleClass("active");
}), $(".toggle-menu .caret").click(function() {
	return $(this).closest("li").find("> .sub-menu").slideToggle("fast"), $(this).closest("li").toggleClass("open"), 
		!1;
}), $(".off-canvas-toggle").click(function() {
	$("body").toggleClass("show-off-canvas"), $(".off-canvas-menu").toggleClass("open");
}), $("body").click(function(i) {
	$(i.target).closest(".off-canvas-menu").length || $("body").removeClass("show-off-canvas");
}), $(".accordion .nav-link").click(function(i) {
	i.preventDefault, $(this).parent().toggleClass("active");
}), $(".dropdown-toggle").click(function() {
	$(this).parent().toggleClass("open");
}), $("#dropdownMenu1").click(function() {
	var i = $(this).parent().find(".dropdown-menu").width(), e = $(".menu-mobile").offset().left;
	$(".site-header-inner button.btn-close").css("left", i - e + "px");
}), $(".btn-close").click(function() {
	$(this).parents(".dropdown").toggleClass("open");
}), $("body").click(function(i) {
	$(i.target).closest(".dropdown").length || $(".dropdown").removeClass("open");
}), $("body").click(function(i) {
	$(i.target).closest(".collection-selector").length || $(".list_search").css("display", "none");
}), $(".e-tabs:not(.not-dqtab)").each(function() {
	$(this).find(".tabs-title li:first-child").addClass("current"), $(this).find(".tab-content").first().addClass("current"), 
		$(this).find(".tabs-title li").click(function() {
		var i = $(this).attr("data-tab"), e = $(this).attr("data-url");
		$(this).closest(".e-tabs").find(".tab-viewall").attr("href", e), $(this).closest(".e-tabs").find(".tabs-title li").removeClass("current"), 
			$(this).closest(".e-tabs").find(".tab-content").removeClass("current"), $(this).addClass("current"), 
			$(this).closest(".e-tabs").find("#" + i).addClass("current");
	});
}), awe.showNoitice = function(i) {
	$(i).animate({
		right: "0"
	}, 500), setTimeout(function() {
		$(i).animate({
			right: "-300px"
		}, 500);
	}, 3500);
}, awe.showLoading = function(i) {
	var e = $(".loader").html();
	$(i).addClass("loading").append(e);
}, awe.hideLoading = function(i) {
	$(i).removeClass("loading"), $(i + " .loading-icon").remove();
}, awe.showPopup = function(i) {
	$(i).addClass("active");
}, awe.hidePopup = function(i) {
	$(i).removeClass("active");
}, $(document).on("click", ".overlay, .close-popup, .btn-continue, .fancybox-close", function() {
	return awe.hidePopup(".awe-popup"), setTimeout(function() {
		$(".loading").removeClass("loaded-content");
	}, 500), !1;
}), $(window).on("load resize", function(i) {
	$(window).width() < 1200 && $(".mobile-checkout").html('<i class="ion-android-checkmark-circle"></i> Đơn hàng');
}), $(document).on("keydown", "#qty, #quantity-detail, .number-sidebar", function(i) {
	-1 !== $.inArray(i.keyCode, [ 46, 8, 9, 27, 13, 110, 190 ]) || /65|67|86|88/.test(i.keyCode) && (!0 === i.ctrlKey || !0 === i.metaKey) || 35 <= i.keyCode && 40 >= i.keyCode || (i.shiftKey || 48 > i.keyCode || 57 < i.keyCode) && (96 > i.keyCode || 105 < i.keyCode) && i.preventDefault();
}), $(document).on("click", ".qtyplus", function(i) {
	i.preventDefault(), fieldName = $(this).attr("data-field");
	var e = parseInt($("input[data-field=" + fieldName + "]").val());
	isNaN(e) ? $("input[data-field=" + fieldName + "]").val(0) : $("input[data-field=" + fieldName + "]").val(e + 1);
}), $(document).on("click", ".qtyminus", function(i) {
	i.preventDefault(), fieldName = $(this).attr("data-field");
	var e = parseInt($("input[data-field=" + fieldName + "]").val());
	!isNaN(e) && e > 1 ? $("input[data-field=" + fieldName + "]").val(e - 1) : $("input[data-field=" + fieldName + "]").val(1);
}), jQuery(document).ready(function(i) {		
	 i(".aside-content.filter-group > ul").each(function(e) {
		0 == i(this)[0].childElementCount && i(this).parents(".aside-filter").addClass("hidden");
	});

	



});