(function ($) {
	'use strict';

	var config = window.gsoAdmin || {};
	var templates = config.templates || {};
	var messages = config.messages || {};
	var thresholds = config.thresholds || {};
	var postType = config.postType || '';

	function countChars(value) {
		return Array.from(value || '').length;
	}

	function updateCounter($field, $counter) {
		var max = parseInt($field.attr('maxlength'), 10);
		if (!max || max < 1) {
			return;
		}

		var current = countChars($field.val());
		$counter.text(current + ' / ' + max + ' 文字');
		$counter.toggleClass('is-limit', current >= max);
		$counter.toggleClass('is-near-limit', current >= Math.floor(max * 0.9) && current < max);
	}

	function initCounters() {
		$('.gso-countable[maxlength]').each(function () {
			var $field = $(this);
			if ($field.data('gsoCounterReady')) {
				return;
			}

			var $counter = $('<p class="description gso-counter" aria-live="polite"></p>');
			$field.after($counter);
			$field.data('gsoCounterReady', true);
			updateCounter($field, $counter);

			$field.on('input keyup change', function () {
				updateCounter($field, $counter);
			});
		});
	}

	function insertTemplateToEditor(html) {
		if (!html) {
			return;
		}

		if (window.wp && wp.data && wp.data.dispatch && wp.blocks && wp.blocks.rawHandler) {
			try {
				var blocks = wp.blocks.rawHandler({ HTML: html });
				if (Array.isArray(blocks) && blocks.length > 0) {
					wp.data.dispatch('core/editor').insertBlocks(blocks);
					return;
				}
			} catch (e) {
				// Fall through to classic editor insertion.
			}
		}

		if (window.tinymce && tinymce.activeEditor && !tinymce.activeEditor.isHidden()) {
			tinymce.activeEditor.execCommand('mceInsertContent', false, html);
			return;
		}

		var $content = $('#content');
		if ($content.length) {
			var current = $content.val();
			var glue = current && current.length > 0 ? '\n\n' : '';
			$content.val(current + glue + html).trigger('input').trigger('change');
		}
	}

	function initTemplateButtons() {
		$(document).on('click', '.gso-template-insert-btn', function () {
			var key = $(this).data('gsoTemplate');
			if (!key || !templates[key]) {
				return;
			}
			insertTemplateToEditor(String(templates[key]));
		});
	}

	function renderImageMessage(kind) {
		var $container = $('#postimagediv .inside');
		if (!$container.length) {
			return;
		}

		var $msg = $('#gso-image-ratio-message');
		if (!$msg.length) {
			$msg = $('<p id="gso-image-ratio-message" class="description gso-image-ratio-message"></p>');
			$container.append($msg);
		}

		if (kind === 'warn') {
			$msg.text(messages.imageWarn || '画像比率が推奨値と異なります。').removeClass('is-ok').addClass('is-warn');
		} else if (kind === 'ok') {
			$msg.text(messages.imageOk || '画像比率は推奨です。').removeClass('is-warn').addClass('is-ok');
		} else {
			$msg.text(messages.imageMissing || 'アイキャッチ画像が未設定です。').removeClass('is-ok is-warn');
		}
	}

	function renderImageSizeMessage(kind) {
		var $container = $('#postimagediv .inside');
		if (!$container.length) {
			return;
		}

		var $msg = $('#gso-image-size-message');
		if (!$msg.length) {
			$msg = $('<p id="gso-image-size-message" class="description gso-image-size-message"></p>');
			$container.append($msg);
		}

		if (kind === 'warn') {
			$msg.text(messages.imageSizeWarn || '画像解像度が推奨値を下回っています。').removeClass('is-ok').addClass('is-warn');
		} else if (kind === 'ok') {
			$msg.text(messages.imageSizeOk || '画像解像度は推奨です。').removeClass('is-warn').addClass('is-ok');
		} else {
			$msg.text('').removeClass('is-ok is-warn');
		}
	}

	function checkImageRatio() {
		if (postType !== 'gso_work') {
			return;
		}

		var $img = $('#set-post-thumbnail img, #postimagediv img').first();
		if (!$img.length || !$img.attr('src')) {
			renderImageMessage('missing');
			renderImageSizeMessage('none');
			return;
		}

		var src = $img.attr('src');
		var image = new Image();
		image.onload = function () {
			if (!image.height) {
				renderImageMessage('missing');
				renderImageSizeMessage('none');
				return;
			}
			var ratio = image.width / image.height;
			var diff = Math.abs(ratio - 1.6);
			renderImageMessage(diff <= 0.08 ? 'ok' : 'warn');

			var minWidth = Number(thresholds.minWidth || 1600);
			var minHeight = Number(thresholds.minHeight || 1000);
			renderImageSizeMessage(image.width >= minWidth && image.height >= minHeight ? 'ok' : 'warn');
		};
		image.onerror = function () {
			renderImageMessage('missing');
			renderImageSizeMessage('none');
		};
		image.src = src;
	}

	function initImageRatioWatcher() {
		if (postType !== 'gso_work') {
			return;
		}

		checkImageRatio();
		$(document).on('click', '#set-post-thumbnail, #remove-post-thumbnail', function () {
			window.setTimeout(checkImageRatio, 600);
		});

		var target = document.querySelector('#postimagediv .inside');
		if (!target || !window.MutationObserver) {
			return;
		}

		var observer = new MutationObserver(function () {
			checkImageRatio();
		});

		observer.observe(target, { childList: true, subtree: true, attributes: true });
	}

	$(function () {
		initCounters();
		initTemplateButtons();
		initImageRatioWatcher();
	});
})(jQuery);
