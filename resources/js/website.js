import "./bootstrap";

// Core Js
import jQuery from "jquery";
window.$ = jQuery;
window.jQuery = jQuery;

// select2
import select2 from 'select2';
window.select2 = select2;
select2(window.$);
import 'select2/dist/css/select2.min.css';

// dropdown
import { loadDropdown, populateSelect2 } from '@/custom/dropdown.js';
window.loadDropdown = loadDropdown;
window.populateSelect2 = populateSelect2;

// helpers select2
import { loadSelect2Dropdown, loadDependentDropdowns } from "@/helpers/select2.js";
window.loadSelect2Dropdown = loadSelect2Dropdown;
window.loadDependentDropdowns = loadDependentDropdowns;

import GLightbox from 'glightbox';
window.GLightbox = GLightbox;

import 'glightbox/dist/css/glightbox.min.css';

/* ============================================================ */
/* PRELOADER
/* ============================================================ */
$(window).on('load', function() {
    $(".site__preloader").fadeOut();     
});

//=============  StickyHeader  =============\\
var header = $("header");
window.addEventListener('scroll', () => {
    const scrollPosition = window.scrollY;

    if (scrollPosition > 60) {
        header.addClass('stickyHeader');
    } else {
        header.removeClass('stickyHeader');
    }
});


// Nav Tabs
function Tabs(selector, options) {
    if (!(this instanceof Tabs)) return new Tabs(selector, options);

    this.options = $.extend({
        linkActive: 'active',
        paneActive: 'active show',
        activeTab: 0
    }, options || {});

    this.init($(selector));
}

Tabs.prototype.init = function ($tabGroups) {
    const self = this;

    $tabGroups.each(function () {
        const $tabGroup = $(this);
        const $links = $tabGroup.find('.nav-item');
        const $wrapper = $tabGroup.closest('.tab-wrapper').length ? $tabGroup.closest('.tab-wrapper') : $tabGroup.parent();
        const $panes = $wrapper.find('.tab-content .tab-pane');

        $links.each(function (index) {
            $(this).on('click', function (e) {
                e.preventDefault();

                // Deactivate all tabs
                $links.removeClass(self.options.linkActive);
                $panes.removeClass(self.options.paneActive.split(' ').join(' '));

                // Activate current tab and pane
                $(this).addClass(self.options.linkActive);
                const target = $(this).attr('href');
                const $targetPane = $(target);

                if ($targetPane.length) {
                    $targetPane.addClass(self.options.paneActive);
                }
            });
        });

        // Activate default tab
        $links.eq(self.options.activeTab).trigger('click');
    });
};

// 🔥 Initialize
new Tabs('.nav-tabs');


// Lightbox 
const lightbox = GLightbox({
    touchNavigation: true,
    loop: true,
    autoplayVideos: true
});

// Accordion
$(document).on("click", ".accordion-title", function () {
    var $this = $(this);
    var $item = $this.closest(".accordion-item");

    // Toggle active class on current
    $this.toggleClass("active");
    $this.next(".accordion-content").slideToggle();

    // Toggle 'is-active' class on the accordion-item
    $item.toggleClass("is-active");

    // Close others
    $item.siblings(".accordion-item").removeClass("is-active").find(".accordion-content").slideUp();
    $item.siblings(".accordion-item").find(".accordion-title").removeClass("active");
});

// Show/hide Password on Toggle
$(document).on("click", ".toggle-password", function () {
    $(this).toggleClass("show");
    var input = $($(this).attr("data-toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});



$(document).on("click", ".next-step", function () {
	const current_fs = $(this).closest("fieldset");
	const next_fs = current_fs.next("fieldset");

	current_fs.hide();
	next_fs.show();

	$("#registration_step .step-item")
		.eq($(".fieldset-wrapper fieldset").index(next_fs))
		.addClass("active");
});

$(document).on("click", ".prev-step", function () {
	const current_fs = $(this).closest("fieldset");
	const previous_fs = current_fs.prev("fieldset");

	current_fs.hide();
	previous_fs.show();

	$("#registration_step .step-item")
		.eq($(".fieldset-wrapper fieldset").index(current_fs))
		.removeClass("active");
});
