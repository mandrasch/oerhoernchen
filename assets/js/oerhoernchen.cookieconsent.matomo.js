// Tutorial:
// https://www.vektorkneter.de/matomo-tracking-cookie-opt-in/

// global var
var OER_HOERNCHEN_ANALYSIS_ENABLED;

// MATOMO vars and functions
// Source: https://matomo.org/blog/2017/04/different-ways-embedding-piwik-tracking-code-faster-website-performance/
var _paq = _paq || [];
_paq.push(['setVisitorCookieTimeout', 2880]); // 2 days
_paq.push(['setReferralCookieTimeout', 2880]); // 2 days
_paq.push(['setSessionCookieTimeout', 0]); // session only
_paq.push(["trackPageView"]);
_paq.push(["enableLinkTracking"]);


function embedTrackingCode() {
  var u = "//matomo.oerhoernchen.de/";
  _paq.push(["setTrackerUrl", u + "piwik.php"]);
  _paq.push(["setSiteId", "1"]);
  // removed by MA
  // _paq.push(['enableHeartBeatTimer', 30]);

  var d = document,
    g = d.createElement("script"),
    s = d.getElementsByTagName("script")[0];
  g.type = "text/javascript";
  g.defer = true;
  g.async = true;
  g.src = u + "piwik.js";
  s.parentNode.insertBefore(g, s);

  // 2DO: Remove later
  console.log('MATOMO Tracking enabled')
}

function deleteMatomoCookies() {
  _paq.push(["disableCookies"]);
  _paq.push(["deleteCookies"]);
  location.reload();

  console.log('MATOMO Tracking disabled')
}


// Insites Cookie Consent with Opt-IN for MATOMO tracking Cookie
// Source: https://cookieconsent.osano.com/documentation/disabling-cookies/
$(document).ready(function() {

  window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "#1d8a8a"
      },
      "button": {
        "background": "#62ffaa"
      }
    },
    // disable revoke floating layer, because it was annoying on small mobile devices
    // does not work, hide it via css
    //"revokable":false,
    "position": "bottom-left",
    "type": "opt-in",
    "content": {
      "message": "Darf das OERhörnchen Dein Nutzungsverhalten auf dieser Webseite sowie Deine eingegebenen Suchbegriffe auf dieser Webseite anonymisiert (ohne personenbezogene Daten) speichern und der Öffentlichkeit als Open Data zur Verfügung stellen, um zeitgemäße Bildung voranzubringen? Hierfür sind Cookies nötig, Einstellung ist jederzeit wieder änderbar.",
      "deny": "Nein, bitte nicht.",
      "allow": "Ja, gerne",
      "link": "Datenschutzerklärung",
      "href": "/impressum",
      "policy":"Datenschutz-Einstellungen"
    },
    "cookie": {
      "expiryDays": 1
    },
    "type": "opt-in",
    onPopupOpen: function() {
      document.body.classList.add("cookieconsent-banner-opened");
    },
    onPopupClose: function() {
      document.body.classList.remove("cookieconsent-banner-opened");
    },
    // not fired? https://github.com/osano/cookieconsent/issues/474
    onInitialise: function(status) {
      console.log('init');
      var type = this.options.type;
      var didConsent = this.hasConsented();
      if (type == 'opt-in' && didConsent) {
        console.log('User has sent consent before, embed tracking');
        // enable cookies
        OER_HOERNCHEN_ANALYSIS_ENABLED = true;
        $(".trackingInfo").html("Aktiviert");
        embedTrackingCode();
      }
      if (type == 'opt-in' && !didConsent) {
        console.log('User has not consented before');
        // disable cookies
        OER_HOERNCHEN_ANALYSIS_ENABLED = false;
        $(".trackingInfo").html("Deaktiviert");
      }
    },
    onStatusChange: function(status, chosenBefore) {
      var type = this.options.type;
      var didConsent = this.hasConsented();
      if (type == 'opt-in' && didConsent) {
        // enable cookies
        OER_HOERNCHEN_ANALYSIS_ENABLED = true;
        $(".trackingInfo").html("Aktiviert");
        embedTrackingCode();
      }
      if (type == 'opt-in' && !didConsent) {
        // disable cookies
        OER_HOERNCHEN_ANALYSIS_ENABLED = false;
        $(".trackingInfo").html("Deaktiviert");
        deleteMatomoCookies();
      }
    },
    onRevokeChoice: function() {
      var type = this.options.type;
      if (type == 'opt-in') {
        // disable cookies
      }
      if (type == 'opt-out') {
        // enable cookies
        embedTrackingCode();
      }
    },

  })
}); // eo jQuery


// function for triggering a click on the cc-revoke button
// wich will show the consent banner again.
// You may use it in a link, such as this example:
// <a href="#" onclick="openCCbanner(); return false;">Cookie Consent</a>
function openCCbanner() {
  var el = document.querySelector('.cc-revoke');
  el.click();
}
