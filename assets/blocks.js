(function (wp) {
	'use strict';

	if (!wp || !wp.blocks || !wp.element) {
		return;
	}

	var registerBlockType = wp.blocks.registerBlockType;
	var el = wp.element.createElement;
	var Fragment = wp.element.Fragment;
	var InspectorControls = wp.blockEditor.InspectorControls;
	var useBlockProps = wp.blockEditor.useBlockProps;
	var PanelBody = wp.components.PanelBody;
	var TextControl = wp.components.TextControl;
	var TextareaControl = wp.components.TextareaControl;
	var ToggleControl = wp.components.ToggleControl;
	var __ = wp.i18n.__;
	var defaults = window.gsoBlocksData || {};

	function panelControls(title, controls) {
		return el(
			InspectorControls,
			null,
			el(
				PanelBody,
				{ title: title, initialOpen: true },
				controls
			)
		);
	}

	registerBlockType('gso/hero', {
		apiVersion: 2,
		title: __('GSO Hero', 'gap-smile-original'),
		icon: 'cover-image',
		category: 'design',
		description: __('フルブリード対応のヒーローセクション。', 'gap-smile-original'),
		attributes: {
			eyebrow: { type: 'string', default: 'Corporate / LP Theme' },
			title: { type: 'string', default: '信頼感のあるUIと実装品質で企業価値を伝える' },
			lead: { type: 'string', default: '目的に沿った情報設計と、運用しやすい実装で成果に直結するサイトを構築します。' },
			primaryLabel: { type: 'string', default: 'Servicesを見る' },
			primaryUrl: { type: 'string', default: defaults.servicesUrl || '/services/' },
			secondaryLabel: { type: 'string', default: 'Contactへ' },
			secondaryUrl: { type: 'string', default: defaults.contactUrl || '/contact/' },
			fullBleed: { type: 'boolean', default: true }
		},
		edit: function (props) {
			var attrs = props.attributes;
			var setAttrs = props.setAttributes;
			var blockProps = useBlockProps({ className: 'gso-editor-preview gso-editor-preview-hero' });

			return el(
				Fragment,
				null,
				panelControls(__('Hero設定', 'gap-smile-original'), [
					el(TextControl, {
						label: __('Eyebrow', 'gap-smile-original'),
						value: attrs.eyebrow,
						onChange: function (value) { setAttrs({ eyebrow: value }); }
					}),
					el(TextareaControl, {
						label: __('タイトル', 'gap-smile-original'),
						value: attrs.title,
						onChange: function (value) { setAttrs({ title: value }); },
						rows: 3
					}),
					el(TextareaControl, {
						label: __('リード文', 'gap-smile-original'),
						value: attrs.lead,
						onChange: function (value) { setAttrs({ lead: value }); },
						rows: 3
					}),
					el(TextControl, {
						label: __('主ボタン文言', 'gap-smile-original'),
						value: attrs.primaryLabel,
						onChange: function (value) { setAttrs({ primaryLabel: value }); }
					}),
					el(TextControl, {
						label: __('主ボタンURL', 'gap-smile-original'),
						value: attrs.primaryUrl,
						onChange: function (value) { setAttrs({ primaryUrl: value }); }
					}),
					el(TextControl, {
						label: __('副ボタン文言', 'gap-smile-original'),
						value: attrs.secondaryLabel,
						onChange: function (value) { setAttrs({ secondaryLabel: value }); }
					}),
					el(TextControl, {
						label: __('副ボタンURL', 'gap-smile-original'),
						value: attrs.secondaryUrl,
						onChange: function (value) { setAttrs({ secondaryUrl: value }); }
					}),
					el(ToggleControl, {
						label: __('フルブリード表示', 'gap-smile-original'),
						checked: !!attrs.fullBleed,
						onChange: function (checked) { setAttrs({ fullBleed: checked }); }
					})
				]),
				el(
					'div',
					blockProps,
					el('p', { className: 'gso-eyebrow' }, attrs.eyebrow),
					el('h2', { className: 'gso-hero-title' }, attrs.title),
					el('p', { className: 'gso-hero-lead' }, attrs.lead),
					el(
						'div',
						{ className: 'gso-hero-actions' },
						el('span', { className: 'gso-btn gso-btn-primary' }, attrs.primaryLabel),
						el('span', { className: 'gso-btn gso-btn-secondary' }, attrs.secondaryLabel)
					)
				)
			);
		},
		save: function () {
			return null;
		}
	});

	registerBlockType('gso/services', {
		apiVersion: 2,
		title: __('GSO Services', 'gap-smile-original'),
		icon: 'screenoptions',
		category: 'design',
		description: __('3カードのServicesセクション。', 'gap-smile-original'),
		attributes: {
			label: { type: 'string', default: 'Services' },
			heading: { type: 'string', default: '提供サービス' },
			description: { type: 'string', default: '相談内容に応じて、必要な範囲だけを柔軟に組み合わせて提案します。' },
			ctaLabel: { type: 'string', default: 'Contactへ' },
			ctaUrl: { type: 'string', default: defaults.contactUrl || '/contact/' },
			card1Title: { type: 'string', default: '企業サイト制作' },
			card1Text: { type: 'string', default: '信頼感と読みやすさを重視し、情報設計から実装まで一貫対応します。' },
			card2Title: { type: 'string', default: '採用LP制作' },
			card2Text: { type: 'string', default: '応募導線を明確化し、訴求ポイントを最適化します。' },
			card3Title: { type: 'string', default: 'UI改善支援' },
			card3Text: { type: 'string', default: '既存サイトの課題を分析し、成果指標に直結する改善施策を実装します。' }
		},
		edit: function (props) {
			var attrs = props.attributes;
			var setAttrs = props.setAttributes;
			var blockProps = useBlockProps({ className: 'gso-editor-preview gso-editor-preview-services gso-surface' });

			return el(
				Fragment,
				null,
				panelControls(__('Services設定', 'gap-smile-original'), [
					el(TextControl, { label: __('ラベル', 'gap-smile-original'), value: attrs.label, onChange: function (value) { setAttrs({ label: value }); } }),
					el(TextControl, { label: __('見出し', 'gap-smile-original'), value: attrs.heading, onChange: function (value) { setAttrs({ heading: value }); } }),
					el(TextareaControl, { label: __('説明文', 'gap-smile-original'), value: attrs.description, onChange: function (value) { setAttrs({ description: value }); }, rows: 3 }),
					el(TextControl, { label: __('CTA文言', 'gap-smile-original'), value: attrs.ctaLabel, onChange: function (value) { setAttrs({ ctaLabel: value }); } }),
					el(TextControl, { label: __('CTA URL', 'gap-smile-original'), value: attrs.ctaUrl, onChange: function (value) { setAttrs({ ctaUrl: value }); } }),
					el(TextControl, { label: __('カード1 見出し', 'gap-smile-original'), value: attrs.card1Title, onChange: function (value) { setAttrs({ card1Title: value }); } }),
					el(TextareaControl, { label: __('カード1 本文', 'gap-smile-original'), value: attrs.card1Text, onChange: function (value) { setAttrs({ card1Text: value }); }, rows: 2 }),
					el(TextControl, { label: __('カード2 見出し', 'gap-smile-original'), value: attrs.card2Title, onChange: function (value) { setAttrs({ card2Title: value }); } }),
					el(TextareaControl, { label: __('カード2 本文', 'gap-smile-original'), value: attrs.card2Text, onChange: function (value) { setAttrs({ card2Text: value }); }, rows: 2 }),
					el(TextControl, { label: __('カード3 見出し', 'gap-smile-original'), value: attrs.card3Title, onChange: function (value) { setAttrs({ card3Title: value }); } }),
					el(TextareaControl, { label: __('カード3 本文', 'gap-smile-original'), value: attrs.card3Text, onChange: function (value) { setAttrs({ card3Text: value }); }, rows: 2 })
				]),
				el(
					'div',
					blockProps,
					el('p', { className: 'gso-label' }, attrs.label),
					el('h2', { className: 'gso-title' }, attrs.heading),
					el('p', { className: 'gso-note' }, attrs.description),
					el(
						'div',
						{ className: 'gso-grid-3' },
						el('article', { className: 'gso-card' }, el('h3', null, attrs.card1Title), el('p', null, attrs.card1Text)),
						el('article', { className: 'gso-card' }, el('h3', null, attrs.card2Title), el('p', null, attrs.card2Text)),
						el('article', { className: 'gso-card' }, el('h3', null, attrs.card3Title), el('p', null, attrs.card3Text))
					)
				)
			);
		},
		save: function () {
			return null;
		}
	});

	registerBlockType('gso/cta', {
		apiVersion: 2,
		title: __('GSO CTA', 'gap-smile-original'),
		icon: 'megaphone',
		category: 'design',
		description: __('問い合わせ導線向けCTA。', 'gap-smile-original'),
		attributes: {
			heading: { type: 'string', default: 'ご相談は Contact ページから' },
			text: { type: 'string', default: '問い合わせ機能は導線重視で実装。メールまたは電話へスムーズに接続できます。' },
			buttonLabel: { type: 'string', default: 'Contactへ進む' },
			buttonUrl: { type: 'string', default: defaults.contactUrl || '/contact/' }
		},
		edit: function (props) {
			var attrs = props.attributes;
			var setAttrs = props.setAttributes;
			var blockProps = useBlockProps({ className: 'gso-editor-preview gso-editor-preview-cta gso-cta' });

			return el(
				Fragment,
				null,
				panelControls(__('CTA設定', 'gap-smile-original'), [
					el(TextControl, { label: __('見出し', 'gap-smile-original'), value: attrs.heading, onChange: function (value) { setAttrs({ heading: value }); } }),
					el(TextareaControl, { label: __('本文', 'gap-smile-original'), value: attrs.text, onChange: function (value) { setAttrs({ text: value }); }, rows: 3 }),
					el(TextControl, { label: __('ボタン文言', 'gap-smile-original'), value: attrs.buttonLabel, onChange: function (value) { setAttrs({ buttonLabel: value }); } }),
					el(TextControl, { label: __('ボタンURL', 'gap-smile-original'), value: attrs.buttonUrl, onChange: function (value) { setAttrs({ buttonUrl: value }); } })
				]),
				el(
					'div',
					blockProps,
					el('h2', null, attrs.heading),
					el('p', null, attrs.text),
					el('span', { className: 'gso-btn gso-btn-primary' }, attrs.buttonLabel)
				)
			);
		},
		save: function () {
			return null;
		}
	});
})(window.wp);
