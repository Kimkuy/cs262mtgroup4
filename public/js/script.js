// --- 1. WordPress / Breakdance Application Data State ---
if (!window.BreakdanceFrontend) {
    window.BreakdanceFrontend = {};
}

window.BreakdanceFrontend.data = {
    "homeUrl": "https:\/\/esports.org.sg",
    "ajaxUrl": "https:\/\/esports.org.sg\/wp-admin\/admin-ajax.php",
    "elementsPluginUrl": "https:\/\/esports.org.sg\/wp-content\/plugins\/breakdance\/subplugins\/breakdance-elements\/",
    "BASE_BREAKPOINT_ID": "breakpoint_base",
    "breakpoints": [
        { "id": "breakpoint_base", "label": "Desktop", "defaultPreviewWidth": "100%" },
        { "id": "breakpoint_tablet_landscape", "label": "Tablet Landscape", "defaultPreviewWidth": 1024, "maxWidth": 1119 },
        { "id": "breakpoint_tablet_portrait", "label": "Tablet Portrait", "defaultPreviewWidth": 768, "maxWidth": 1023 },
        { "id": "breakpoint_phone_landscape", "label": "Phone Landscape", "defaultPreviewWidth": 480, "maxWidth": 767 },
        { "id": "breakpoint_phone_portrait", "label": "Phone Portrait", "defaultPreviewWidth": 400, "maxWidth": 479 }
    ],
    "subscriptionMode": "pro"
};

// --- 2. JQuery UI Datepicker Default Locales Configurations ---
if (typeof jQuery !== 'undefined' && jQuery.datepicker) {
    jQuery(function(jQuery) {
        jQuery.datepicker.setDefaults({
            "closeText": "Close",
            "currentText": "Today",
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "nextText": "Next",
            "prevText": "Previous",
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "dateFormat": "MM d, yy",
            "firstDay": 1,
            "isRTL": false
        });
    });
}

// --- 3. Unified DOM Event Initialization Pipeline ---
document.addEventListener('DOMContentLoaded', function() {
    
    // Hash Scroll Handler
    (function () {
        const hash = window.location.hash;
        if (!hash) return;
        const el = document.querySelector(hash);
        if (el) el.scrollIntoView({ block: 'start' });
        window.addEventListener('load', () => setTimeout(scrollToHash, 0));
    })();

    // UI Builders and Awesome Menu Init
    if (typeof BreakdanceHeaderBuilder !== 'undefined') {
        new BreakdanceHeaderBuilder(".breakdance .bde-header-builder-1744-100", "100", false);
    }

    if (typeof AwesomeMenu !== 'undefined') {
        new AwesomeMenu(".breakdance .bde-menu-1744-104 .breakdance-menu", {
            dropdown: {
                openOnClick: false,
                mode: { desktop: 'dropdown' },
                placement: 'center',
                width: null,
                animation: 'stripe'
            },
            link: {
                effect: 'underline',
                effectDirection: 'center',
            },
            mobile: {
                breakpoint: '',
                mode: 'offcanvas',
                offcanvasPosition: 'right',
                offset: null,
                followLinks: true
            }
        });
    }

    // Components Animations Configurations (GSAP/Breakdance Entrances)
    if (typeof BreakdanceEntrance !== 'undefined') {
        const animations = [
            { selector: '.breakdance .bde-column-1737-102', type: 'slideDown' },
            { selector: '.breakdance .bde-column-1737-105', type: 'slideUp' },
            { selector: '.breakdance .bde-section-1737-172', type: 'slideUp' },
            { selector: '.breakdance .bde-heading-1737-115', type: 'slideUp' },
            { selector: '.breakdance .bde-text-1737-116', type: 'slideUp' },
            { selector: '.breakdance .bde-logo-list-1737-117', type: 'slideUp' },
            { selector: '.breakdance .bde-columns-1737-119', type: 'slideUp' },
            { selector: '.breakdance .bde-div-1737-126', type: 'slideUp' },
            { selector: '.breakdance .bde-heading-1737-133', type: 'slideUp' },
            { selector: '.breakdance .bde-div-1737-135', type: 'slideUp' },
            { selector: '.breakdance .bde-div-1737-139', type: 'slideUp' },
            { selector: '.breakdance .bde-div-1737-143', type: 'slideUp' },
            { selector: '.breakdance .bde-heading-1737-148', type: 'slideUp' },
            { selector: '.breakdance .bde-div-1737-150', type: 'slideUp' },
            { selector: '.breakdance .bde-div-1737-154', type: 'slideUp' }
        ];

        animations.forEach(anim => {
            new BreakdanceEntrance(anim.selector, { "animation_type": anim.type });
        });
    }

    // Lozad Lazyloading Initialization
    if (typeof lozad !== 'undefined') {
        const observer = lozad();
        observer.observe();
    }

    // Forms Systems Initialization
    if (typeof breakdanceForm !== 'undefined') {
        breakdanceForm.init('.breakdance .bde-form-builder-1737-129 .breakdance-form');
    }

    // Back To Top Button Engine Configuration
    if (typeof BreakdanceBackToTop !== 'undefined') {
        new BreakdanceBackToTop('.breakdance .bde-back-to-top-1737-171', { type: "icon", show: null, advanced: null });
    }
});

// --- 4. System Developer Watermark Signature ---
(function() {
    const leftStyle = "background: #1a1a1a; color: #999; padding: 5px 10px; border-radius: 5px 0 0 5px; font-family: sans-serif; font-weight: 500;";
    const rightStyle = "background: #ffffff; color: #000; padding: 5px 12px; border-radius: 0 5px 5px 0; font-family: sans-serif; font-weight: bold; border: 1px solid #1a1a1a; border-left: none;";
    console.log("%cDesigned and developed by %czul.sg", leftStyle, rightStyle);
})();