// --- jquery-ui-datepicker-js-after ---
jQuery(function (jQuery) { jQuery.datepicker.setDefaults({ "closeText": "Close", "currentText": "Today", "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], "nextText": "Next", "prevText": "Previous", "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"], "dateFormat": "MM d, yy", "firstDay": 1, "isRTL": false }); });
//# sourceURL=jquery-ui-datepicker-js-after

// --- mec-frontend-script-js-extra ---
var mecdata = { "day": "day", "days": "days", "hour": "hour", "hours": "hours", "minute": "minute", "minutes": "minutes", "second": "second", "seconds": "seconds", "next": "Next", "prev": "Prev", "elementor_edit_mode": "no", "recapcha_key": "", "ajax_url": "https://esports.org.sg/wp-admin/admin-ajax.php", "fes_nonce": "db31ca45ef", "fes_thankyou_page_time": "2000", "fes_upload_nonce": "5b5ad0ec30", "current_year": "2026", "current_month": "05", "datepicker_format": "yy-mm-dd", "sf_update_url": "0", "a11y_search_results": "Search updated. %1$s events found%2$s.", "a11y_search_result": "Search updated. %1$s event found%2$s.", "a11y_search_query": " for \"%s\"", "a11y_search_address": " near \"%s\"", "a11y_calendar_dialog": "Calendar date picker" };
var mecdata = { "day": "day", "days": "days", "hour": "hour", "hours": "hours", "minute": "minute", "minutes": "minutes", "second": "second", "seconds": "seconds", "next": "Next", "prev": "Prev", "elementor_edit_mode": "no", "recapcha_key": "", "ajax_url": "https://esports.org.sg/wp-admin/admin-ajax.php", "fes_nonce": "db31ca45ef", "fes_thankyou_page_time": "2000", "fes_upload_nonce": "5b5ad0ec30", "current_year": "2026", "current_month": "05", "datepicker_format": "yy-mm-dd", "sf_update_url": "0", "a11y_search_results": "Search updated. %1$s events found%2$s.", "a11y_search_result": "Search updated. %1$s event found%2$s.", "a11y_search_query": " for \"%s\"", "a11y_search_address": " near \"%s\"", "a11y_calendar_dialog": "Calendar date picker" };
//# sourceURL=mec-frontend-script-js-extra

// ---
document.addEventListener('DOMContentLoaded', function () {
  (function () {
    function scrollToHash() {
      const hash = window.location.hash;
      if (!hash) return;
      const el = document.querySelector(hash);
      if (el) el.scrollIntoView({ block: 'start' });
    }
    window.addEventListener('load', () => setTimeout(scrollToHash, 0));
  })();
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  if (!window.BreakdanceFrontend) {
    window.BreakdanceFrontend = {}
  }

  window.BreakdanceFrontend.data = { "homeUrl": "https:\/\/esports.org.sg", "ajaxUrl": "https:\/\/esports.org.sg\/wp-admin\/admin-ajax.php", "elementsPluginUrl": "https:\/\/esports.org.sg\/wp-content\/plugins\/breakdance\/subplugins\/breakdance-elements\/", "BASE_BREAKPOINT_ID": "breakpoint_base", "breakpoints": [{ "id": "breakpoint_base", "label": "Desktop", "defaultPreviewWidth": "100%" }, { "id": "breakpoint_tablet_landscape", "label": "Tablet Landscape", "defaultPreviewWidth": 1024, "maxWidth": 1119 }, { "id": "breakpoint_tablet_portrait", "label": "Tablet Portrait", "defaultPreviewWidth": 768, "maxWidth": 1023 }, { "id": "breakpoint_phone_landscape", "label": "Phone Landscape", "defaultPreviewWidth": 480, "maxWidth": 767 }, { "id": "breakpoint_phone_portrait", "label": "Phone Portrait", "defaultPreviewWidth": 400, "maxWidth": 479 }], "subscriptionMode": "pro" }
})

// ---
document.addEventListener('DOMContentLoaded', function () { new BreakdanceHeaderBuilder(".breakdance .bde-header-builder-1744-100", "100", false); })

// ---
document.addEventListener('DOMContentLoaded', function () {
  new AwesomeMenu(".breakdance .bde-menu-1744-104 .breakdance-menu", {
    dropdown: {
      openOnClick: false,
      mode: {
        desktop: 'dropdown'
      },
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
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceEntrance(
    '.breakdance .bde-div-1755-106',
    { "animation_type": "slideUp" }
  )
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  const observer = lozad();
  observer.observe();
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceEntrance(
    '.breakdance .bde-video-1755-116',
    { "animation_type": "slideUp" }
  )
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceEntrance(
    '.breakdance .bde-image-1755-120',
    { "animation_type": "slideDown" }
  )
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceEntrance(
    '.breakdance .bde-column-1755-121',
    { "animation_type": "slideUp" }
  )
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceEntrance(
    '.breakdance .bde-text-1755-134',
    { "animation_type": "slideUp" }
  )
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceTabs('.breakdance .bde-advanced-tabs-1755-135', { openOnHover: null, activeTab: 1, isVertical: true, horizontalAt: null });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceEntrance(
    '.breakdance .bde-advanced-tabs-1755-135',
    { "animation_type": "slideUp" }
  )
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-142', { "title": "\ud83e\udd47 Gold", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 0, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-144', { "title": "\ud83e\udd48 Silver", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 1, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-146', { "title": "\ud83e\udd49 Bronze", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 1, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-153', { "title": "\ud83e\udd47 Gold", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 1, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-155', { "title": "\ud83e\udd48 Silver", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 0, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-157', { "title": "\ud83e\udd49 Bronze", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 1, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-164', { "title": "\ud83e\udd47 Gold", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 0, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-166', { "title": "\ud83e\udd48 Silver", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 0, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-168', { "title": "\ud83e\udd49 Bronze", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 1, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-175', { "title": "\ud83e\udd47 Gold", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 0, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-177', { "title": "\ud83e\udd48 Silver", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 0, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-179', { "title": "\ud83e\udd49 Bronze", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 1, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-186', { "title": "\ud83e\udd47 Gold", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 0, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-188', { "title": "\ud83e\udd48 Silver", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 1, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-190', { "title": "\ud83e\udd49 Bronze", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 3, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-197', { "title": "\ud83e\udd47 Gold", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 1, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-199', { "title": "\ud83e\udd48 Silver", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 0, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-201', { "title": "\ud83e\udd49 Bronze", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 1, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-350', { "title": "\ud83e\udd47 Gold", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 1, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-352', { "title": "\ud83e\udd48 Silver", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 0, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceCounter('.breakdance .bde-simple-counter-1755-354', { "title": "\ud83e\udd49 Bronze", "duration": { "number": 1000, "unit": "ms", "style": "1000ms" }, "start": 0, "end": 0, "suffix": null, "ease_count": true, "format_number": false });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  window.BreakdanceSwiper().update({
    id: 'bde-advancedslider-1755-203',
    selector: '.breakdance .bde-advancedslider-1755-203',
    settings: { "effect": "slide", "autoplay": "enabled", "infinite": "enabled", "autoplay_settings": { "stop_on_interaction": true, "pause_on_hover": true } },
    paginationSettings: { "bullets": { "color": "var(--bde-body-text-color)" }, "type": "none", "progress_bar": { "background": "var(--bde-palette-color-1-31ae546e-9412-493c-9919-c0cded1b987f)", "progress": "var(--bde-palette-color-1-74ed8de0-09b9-4b59-859c-a46aa639663b)" } },
  });
})

// ---
document.addEventListener('DOMContentLoaded', function () {
  new BreakdanceBackToTop('.breakdance .bde-back-to-top-1755-303', { type: "icon", show: null, advanced: null });
})

document.addEventListener('DOMContentLoaded', function () {
            new BreakdanceEntrance(
                '.breakdance .bde-column-1758-107',
                { "animation_type": "slideUp" }
            )
        })
    document.addEventListener('DOMContentLoaded', function () {
            new BreakdanceEntrance(
                '.breakdance .bde-grid-1758-112',
                { "animation_type": "slideUp" }
            )
        })
  // ---
  /**
   * Developer Signature
   * Site: zul.sg
   */
  (function () {
    const leftStyle = "background: #1a1a1a; color: #999; padding: 5px 10px; border-radius: 5px 0 0 5px; font-family: sans-serif; font-weight: 500;";
    const rightStyle = "background: #ffffff; color: #000; padding: 5px 12px; border-radius: 0 5px 5px 0; font-family: sans-serif; font-weight: bold; border: 1px solid #1a1a1a; border-left: none;";

    console.log("%cDesigned and developed by %czul.sg", leftStyle, rightStyle);
  })();

// ---
(function () { function c() { var b = a.contentDocument || a.contentWindow.document; if (b) { var d = b.createElement('script'); d.innerHTML = "window.__CF$cv$params={r:'a09a11d62b575fc2',t:'MTc4MTExMjI2Nw=='};var a=document.createElement('script');a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);"; b.getElementsByTagName('head')[0].appendChild(d) } } if (document.body) { var a = document.createElement('iframe'); a.height = 1; a.width = 1; a.style.position = 'absolute'; a.style.top = 0; a.style.left = 0; a.style.border = 'none'; a.style.visibility = 'hidden'; document.body.appendChild(a); if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else { var e = document.onreadystatechange || function () { }; document.onreadystatechange = function (b) { e(b); 'loading' !== document.readyState && (document.onreadystatechange = e, c()) } } } })();

// --- google_gtagjs-js-after ---
window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); }
gtag("set", "linker", { "domains": ["esports.org.sg"] });
gtag("js", new Date());
gtag("set", "developer_id.dZTNiMT", true);
gtag("config", "GT-NBB5SGM2");
window._googlesitekit = window._googlesitekit || {}; window._googlesitekit.throttledEvents = []; window._googlesitekit.gtagEvent = (name, data) => { var key = JSON.stringify({ name, data }); if (!!window._googlesitekit.throttledEvents[key]) { return; } window._googlesitekit.throttledEvents[key] = true; setTimeout(() => { delete window._googlesitekit.throttledEvents[key]; }, 5); gtag("event", name, { ...data, event_source: "site-kit" }); };
//# sourceURL=google_gtagjs-js-after