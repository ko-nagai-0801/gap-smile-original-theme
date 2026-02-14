(function () {
	'use strict';

	var config = window.gsoConsentConfig || {};
	if (!config || !config.ga4Id) {
		return;
	}

	var storageKey = config.storageKey || 'gso_cookie_consent_v1';
	var cookieName = config.cookieName || 'gso_cookie_consent';
	var cookieDays = Number(config.cookieDays || 180);
	var bannerEnabled = !!config.bannerEnabled;
	var acceptedState = 'granted';
	var deniedState = 'denied';
	var bannerEl = null;
	var currentState = null;

	function setCookie(value) {
		var days = isNaN(cookieDays) || cookieDays < 1 ? 180 : cookieDays;
		var expires = new Date();
		expires.setDate(expires.getDate() + days);
		document.cookie = cookieName + '=' + encodeURIComponent(value) + '; expires=' + expires.toUTCString() + '; path=/; SameSite=Lax';
	}

	function getCookie(name) {
		var escaped = name.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
		var match = document.cookie.match(new RegExp('(?:^|; )' + escaped + '=([^;]*)'));
		return match ? decodeURIComponent(match[1]) : '';
	}

	function readSavedState() {
		try {
			var fromStorage = window.localStorage.getItem(storageKey);
			if (fromStorage === acceptedState || fromStorage === deniedState) {
				return fromStorage;
			}
		} catch (e) {}

		var fromCookie = getCookie(cookieName);
		if (fromCookie === acceptedState || fromCookie === deniedState) {
			return fromCookie;
		}

		return '';
	}

	function consentObjectFor(state) {
		if (state === acceptedState) {
			return config.grantedConsent || {
				ad_storage: 'granted',
				analytics_storage: 'granted',
				ad_user_data: 'granted',
				ad_personalization: 'granted'
			};
		}

		return config.deniedConsent || {
			ad_storage: 'denied',
			analytics_storage: 'denied',
			ad_user_data: 'denied',
			ad_personalization: 'denied'
		};
	}

	function applyConsent(state) {
		if (state !== acceptedState && state !== deniedState) {
			state = deniedState;
		}

		currentState = state;
		window.gsoConsentState = state;

		if (typeof window.gtag === 'function') {
			window.gtag('consent', 'update', consentObjectFor(state));
		}
	}

	function saveState(state) {
		try {
			window.localStorage.setItem(storageKey, state);
		} catch (e) {}
		setCookie(state);
		applyConsent(state);
	}

	function ensureBanner() {
		if (!bannerEnabled || bannerEl) {
			return;
		}

		bannerEl = document.createElement('aside');
		bannerEl.className = 'gso-consent-banner';
		bannerEl.setAttribute('role', 'dialog');
		bannerEl.setAttribute('aria-live', 'polite');
		bannerEl.innerHTML = '' +
			'<div class="gso-consent-inner">' +
				'<p class="gso-consent-title"></p>' +
				'<p class="gso-consent-text"></p>' +
				'<div class="gso-consent-actions">' +
					'<button type="button" class="gso-consent-btn gso-consent-accept"></button>' +
					'<button type="button" class="gso-consent-btn gso-consent-reject"></button>' +
				'</div>' +
				'<p class="gso-consent-meta"></p>' +
			'</div>';

		var title = bannerEl.querySelector('.gso-consent-title');
		var text = bannerEl.querySelector('.gso-consent-text');
		var accept = bannerEl.querySelector('.gso-consent-accept');
		var reject = bannerEl.querySelector('.gso-consent-reject');
		var meta = bannerEl.querySelector('.gso-consent-meta');

		title.textContent = config.bannerTitle || '計測とCookieの利用について';
		text.textContent = config.bannerText || 'サイト改善のためアクセス解析を行います。';
		accept.textContent = config.acceptLabel || '同意する';
		reject.textContent = config.rejectLabel || '拒否する';

		if (config.policyUrl) {
			var link = document.createElement('a');
			link.href = config.policyUrl;
			link.textContent = config.policyLabel || 'プライバシー情報';
			link.rel = 'noopener noreferrer';
			meta.appendChild(link);
		}

		accept.addEventListener('click', function () {
			saveState(acceptedState);
			hideBanner();
		});

		reject.addEventListener('click', function () {
			saveState(deniedState);
			hideBanner();
		});

		document.body.appendChild(bannerEl);
	}

	function showBanner() {
		ensureBanner();
		if (!bannerEl) {
			return;
		}
		bannerEl.classList.add('is-visible');
	}

	function hideBanner() {
		if (!bannerEl) {
			return;
		}
		bannerEl.classList.remove('is-visible');
	}

	window.gsoHasAnalyticsConsent = function () {
		return currentState === acceptedState;
	};

	window.gsoOpenConsentPreferences = function () {
		showBanner();
	};

	var savedState = readSavedState();
	if (savedState === acceptedState || savedState === deniedState) {
		applyConsent(savedState);
	} else {
		applyConsent(deniedState);
		if (bannerEnabled) {
			showBanner();
		}
	}

	document.addEventListener('click', function (event) {
		var trigger = event.target.closest('[data-gso-consent-open]');
		if (!trigger) {
			return;
		}
		event.preventDefault();
		showBanner();
	});
})();
