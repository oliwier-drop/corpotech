<div
  id="cookie-consent-modal"
  role="dialog"
  aria-modal="true"
  class="cookie-consent fixed bottom-0 left-0 w-full z-50 p-4 md:p-6 bg-black/30 backdrop-blur-sm text-white"
  data-gtag-measurement-id="{{ env('GA_MEASUREMENT_ID') }}"
>
  <div class="container mx-auto flex flex-wrap items-center justify-between">
    <div class="flex items-center flex-1 mr-4 mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mr-4 text-brand hidden md:block" viewBox="0 0 24 24"
        fill="currentColor">
        <path
          d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12q0-2.025.838-3.937T5.163 4.7T8.7 2.5t4.5-.45q.375.05.575.313t.225.712q.05 1.6 1.188 2.738T17.9 7q.525.025.8.3t.3.85q.05 1.05.638 1.725t1.637 1.025q.35.125.538.363t.187.587q.05 2.075-.725 3.925t-2.125 3.238t-3.2 2.187T12 22m0-2q3.05 0 5.413-2.1T20 12.55q-1.25-.55-1.963-1.5t-.962-2.125q-1.925-.275-3.3-1.65t-1.7-3.3q-2-.05-3.512.725T6.037 6.688T4.512 9.325T4 12q0 3.325 2.338 5.663T12 20m-1.5-10q.625 0 1.063-.437T12 8.5t-.437-1.062T10.5 7t-1.062.438T9 8.5t.438 1.063T10.5 10m-2 5q.625 0 1.063-.437T10 13.5t-.437-1.062T8.5 12t-1.062.438T7 13.5t.438 1.063T8.5 15m6.5 1q.425 0 .713-.288T16 15t-.288-.712T15 14t-.712.288T14 15t.288.713T15 16">
        </path>
      </svg>
      <div>
        <h2 class="text-2xl font-bold mb-2">Pliki Cookies</h2>
            <p class="text-sm md:text-base">Uzywamy plikow cookies, aby optymalizowac nasza komunikacje i usprawnic Twoje doznanie. Potwierdzając, zgadzasz sie na zbieranie plikow cookies. Wiecej informacji znajdziesz w naszej <a
            href="/polityka-prywatnosci" class="text-brand hover:underline">Polityce prywatnosci</a>.</p>
      </div>
    </div>
    <div>
      <button id="rcc-confirm-button" class="bg-brand hover:bg-orange-800 text-white font-bold py-2 px-4 rounded transition duration-300" aria-label="Accept">
        Akceptuj
      </button>
      <button id="rcc-reject-button" class="bg-gray-800 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded transition duration-300" aria-label="Reject">
        Odrzuć
      </button>
    </div>
  </div>
</div>

<button
  id="cookie-preferences-trigger"
  type="button"
  class="fixed bottom-6 left-6 z-40 h-12 w-12 rounded-full bg-brand hover:bg-orange-800 text-white shadow-lg flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-brand hidden"
  aria-label="Ustawienia plików cookie"
>
<svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 block" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
        <path
          d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12q0-2.025.838-3.937T5.163 4.7T8.7 2.5t4.5-.45q.375.05.575.313t.225.712q.05 1.6 1.188 2.738T17.9 7q.525.025.8.3t.3.85q.05 1.05.638 1.725t1.637 1.025q.35.125.538.363t.187.587q.05 2.075-.725 3.925t-2.125 3.238t-3.2 2.187T12 22m0-2q3.05 0 5.413-2.1T20 12.55q-1.25-.55-1.963-1.5t-.962-2.125q-1.925-.275-3.3-1.65t-1.7-3.3q-2-.05-3.512.725T6.037 6.688T4.512 9.325T4 12q0 3.325 2.338 5.663T12 20m-1.5-10q.625 0 1.063-.437T12 8.5t-.437-1.062T10.5 7t-1.062.438T9 8.5t.438 1.063T10.5 10m-2 5q.625 0 1.063-.437T10 13.5t-.437-1.062T8.5 12t-1.062.438T7 13.5t.438 1.063T8.5 15m6.5 1q.425 0 .713-.288T16 15t-.288-.712T15 14t-.712.288T14 15t.288.713T15 16">
        </path>
      </svg>
  <span class="sr-only">Ustawienia plików cookie</span>
</button>

<div id="cookie-settings-modal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4">
  <div class="bg-brand-dark rounded-lg shadow-xl max-w-lg w-full">
    <div class="flex items-start justify-between p-6 pb-0">
      <div>
        <h2 class="text-lg font-semibold text-white">Ustawienia plików cookie</h2>
        <p class="text-sm text-gray-300 mt-1">
          Możesz w dowolnym momencie zmienić zgodę na udostępnianie danych.
        </p>
      </div>
      <button
        id="cookie-settings-close"
        type="button"
        class="flex h-8 w-8 items-center justify-center rounded-full text-white hover:text-brand hover:bg-black/60 transition-colors"
        aria-label="Zamknij"
      >
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M6 6l12 12"></path>
          <path d="M18 6l-12 12"></path>
        </svg>
      </button>
    </div>

    <div class="p-6 pt-4 space-y-4">
      <div class="border border-white/10 rounded-lg p-4">
        <div class="flex items-start justify-between gap-4">
          <div>
            <h3 class="text-sm font-semibold text-white">Niezbędne pliki cookie</h3>
            <p class="text-xs text-gray-300 mt-1">Są wymagane do działania strony i nie można ich wyłączyć.</p>
          </div>
          <span class="text-xs font-semibold text-white uppercase whitespace-nowrap">Zawsze aktywne</span>
        </div>
      </div>

      <div class="border border-white/10 rounded-lg p-4">
        <div class="flex items-start justify-between gap-4">
          <div>
            <h3 class="text-sm font-semibold text-white">Analityczne pliki cookie</h3>
            <p class="text-xs text-gray-300 mt-1">Pozwalają nam analizować ruch na stronie i ulepszać serwis.</p>
          </div>
          <label class="inline-flex items-center cursor-pointer select-none">
            <span class="relative w-11 h-6 rounded-full">
              <input id="cookie-analytics-toggle" type="checkbox" class="peer sr-only" />
              <span class="absolute inset-0 bg-white/10 rounded-full transition-colors peer-checked:bg-brand"></span>
              <span class="absolute top-0.5 left-0.5 h-5 w-5 bg-white rounded-full transition-transform duration-200 ease-in-out peer-checked:translate-x-5"></span>
            </span>
          </label>
        </div>
      </div>

      <div class="border border-white/10 rounded-lg p-4">
        <div class="flex items-start justify-between gap-4">
          <div>
            <h3 class="text-sm font-semibold text-white">Marketingowe pliki cookie</h3>
            <p class="text-xs text-gray-300 mt-1">Umożliwiają wyświetlanie spersonalizowanych treści i reklam.</p>
          </div>
          <label class="inline-flex items-center cursor-pointer select-none">
            <span class="relative w-11 h-6 rounded-full">
              <input id="cookie-marketing-toggle" type="checkbox" class="peer sr-only" />
              <span class="absolute inset-0 bg-white/10 rounded-full transition-colors peer-checked:bg-brand"></span>
              <span class="absolute top-0.5 left-0.5 h-5 w-5 bg-white rounded-full transition-transform duration-200 ease-in-out peer-checked:translate-x-5"></span>
            </span>
          </label>
        </div>
      </div>
    </div>

    <div class="px-6 pb-6 pt-2 flex items-center justify-end gap-3">
      <button
        id="cookie-settings-cancel"
        type="button"
        class="text-sm text-white hover:text-gray-300 underline"
      >
        Anuluj
      </button>
      <button
        id="cookie-settings-save"
        type="button"
        class="inline-flex items-center justify-center rounded-base bg-brand px-6 py-2 text-sm font-medium text-white hover:bg-orange-800 focus:outline-none focus:ring-2 focus:ring-black/50"
      >
        Zapisz ustawienia
      </button>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('cookie-consent-modal');
    const acceptBtn = document.getElementById('rcc-confirm-button');
    const rejectBtn = document.getElementById('rcc-reject-button');

    const preferencesTrigger = document.getElementById('cookie-preferences-trigger');
    const settingsModal = document.getElementById('cookie-settings-modal');
    const analyticsToggle = document.getElementById('cookie-analytics-toggle');
    const marketingToggle = document.getElementById('cookie-marketing-toggle');
    const settingsCloseBtn = document.getElementById('cookie-settings-close');
    const settingsCancelBtn = document.getElementById('cookie-settings-cancel');
    const settingsSaveBtn = document.getElementById('cookie-settings-save');

    if (!modal || !acceptBtn || !rejectBtn) return;

    const consentStorageKey = 'corpotech_cookie_consent';
    const preferencesStorageKey = 'corpotech_cookie_preferences';

    function hideModal() {
      modal.style.display = 'none';
    }

    function setTriggerVisible(visible) {
      if (!preferencesTrigger) return;
      preferencesTrigger.classList.toggle('hidden', !visible);
    }

    function setCookie(name, value, days) {
      const expires = new Date(Date.now() + days * 24 * 60 * 60 * 1000).toUTCString();
      document.cookie = name + '=' + encodeURIComponent(value) + '; expires=' + expires + '; path=/; samesite=lax';
    }

    function prefsToAcceptance(prefs) {
      return !!(prefs.analytics || prefs.marketing);
    }

    function parsePrefsFromStorage() {
      const raw = localStorage.getItem(preferencesStorageKey);
      if (raw) {
        try {
          const obj = JSON.parse(raw);
          return { analytics: !!obj.analytics, marketing: !!obj.marketing };
        } catch (e) {}
      }

      const consentValue = (localStorage.getItem(consentStorageKey) || '').toLowerCase();
      if (consentValue === 'accepted') return { analytics: true, marketing: true };
      if (consentValue === 'rejected') return { analytics: false, marketing: false };
      return { analytics: false, marketing: false };
    }

    function savePrefs(prefs) {
      localStorage.setItem(preferencesStorageKey, JSON.stringify(prefs));
      const status = prefsToAcceptance(prefs) ? 'accepted' : 'rejected';
      localStorage.setItem(consentStorageKey, status);
      setCookie('cookie_consent', status, 365);
    }

    function ensureDataLayer() {
      window.dataLayer = window.dataLayer || [];
      return window.dataLayer;
    }

    function pushDataLayerEventAccepted(prefs) {
      if (!prefsToAcceptance(prefs)) return;
      ensureDataLayer().push({
        event: 'cookie_consent',
        consent_status: 'accepted',
        analytics_enabled: prefs.analytics,
        marketing_enabled: prefs.marketing
      });
    }

    function sendGtagEventAccepted(prefs) {
      if (!prefsToAcceptance(prefs)) return; // wymaganie: wysyłamy dane do GA/gtag tylko po akceptacji
      if (typeof window.gtag !== 'function') return;
      window.gtag('event', 'cookie_consent_accepted', {
        analytics_enabled: prefs.analytics,
        marketing_enabled: prefs.marketing
      });
    }

    function setGtagConsent(prefs) {
      if (typeof window.gtag !== 'function') return;
      window.gtag('consent', 'update', {
        analytics_storage: prefs.analytics ? 'granted' : 'denied',
        ad_storage: prefs.marketing ? 'granted' : 'denied'
      });
    }

    function loadGtagIfNeeded(prefs) {
      if (!prefsToAcceptance(prefs)) return;

      const measurementId = ((modal && modal.dataset && modal.dataset.gtagMeasurementId) || '').trim();
      if (!measurementId) return;

      if (typeof window.gtag === 'function') return;

      window.dataLayer = window.dataLayer || [];
      window.gtag = function () {
        window.dataLayer.push(arguments);
      };

      // Ustaw consent zanim wykonamy config.
      setGtagConsent(prefs);

      const script = document.createElement('script');
      script.async = true;
      script.src = 'https://www.googletagmanager.com/gtag/js?id=' + encodeURIComponent(measurementId);
      document.head.appendChild(script);

      window.gtag('js', new Date());
      window.gtag('config', measurementId, { anonymize_ip: true });
    }

    let currentPrefs = parsePrefsFromStorage();
    const hasDecision = !!localStorage.getItem(consentStorageKey) || !!localStorage.getItem(preferencesStorageKey);

    // Jeśli gtag już jest na stronie i użytkownik nie podjął decyzji -> deny.
    if (!hasDecision && typeof window.gtag === 'function') {
      window.gtag('consent', 'update', {
        analytics_storage: 'denied',
        ad_storage: 'denied'
      });
    }

    function applyPrefs(prefs, { sendEvents } = { sendEvents: false }) {
      currentPrefs = prefs;
      savePrefs(prefs);
      hideModal();
      setTriggerVisible(true);

      loadGtagIfNeeded(prefs);
      setGtagConsent(prefs);

      if (sendEvents) {
        pushDataLayerEventAccepted(prefs);
        sendGtagEventAccepted(prefs);
      }
    }

    function syncSettingsUiFromPrefs(prefs) {
      if (!analyticsToggle || !marketingToggle) return;
      analyticsToggle.checked = !!prefs.analytics;
      marketingToggle.checked = !!prefs.marketing;
    }

    function openSettings() {
      if (!settingsModal) return;
      syncSettingsUiFromPrefs(currentPrefs);
      settingsModal.classList.remove('hidden');
    }

    function closeSettings() {
      if (!settingsModal) return;
      settingsModal.classList.add('hidden');
    }

    // Banner: Akceptuj / Odrzuć
    acceptBtn.addEventListener('click', function () {
      applyPrefs({ analytics: true, marketing: true }, { sendEvents: true });
    });

    rejectBtn.addEventListener('click', function () {
      applyPrefs({ analytics: false, marketing: false }, { sendEvents: false });
    });

    // Ustawienia: ikona + modal
    if (preferencesTrigger && settingsModal && analyticsToggle && marketingToggle && settingsCloseBtn && settingsCancelBtn && settingsSaveBtn) {
      preferencesTrigger.addEventListener('click', openSettings);

      settingsCloseBtn.addEventListener('click', closeSettings);
      settingsCancelBtn.addEventListener('click', closeSettings);
      settingsSaveBtn.addEventListener('click', function () {
        const prefs = {
          analytics: !!analyticsToggle.checked,
          marketing: !!marketingToggle.checked
        };
        applyPrefs(prefs, { sendEvents: true });
        closeSettings();
      });

      settingsModal.addEventListener('click', function (e) {
        if (e.target === settingsModal) closeSettings();
      });
    }

    // Jeśli decyzja istnieje -> nie pokazuj banneru i zastosuj ustawienia.
    if (hasDecision) {
      hideModal();
      setTriggerVisible(true);
      syncSettingsUiFromPrefs(currentPrefs);
      loadGtagIfNeeded(currentPrefs);
      setGtagConsent(currentPrefs);
      // Nie wysyłamy eventów na starcie (to już była decyzja użytkownika wcześniej).
    } else {
      setTriggerVisible(false);
    }
  });
</script>