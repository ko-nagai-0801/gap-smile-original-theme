const { defineConfig } = require('@playwright/test');

const baseURL = process.env.GSO_BASE_URL || 'http://gap-smile-geek.local';

module.exports = defineConfig({
	testDir: './tests',
	reporter: [
		['list'],
		['html', { outputFolder: './reports/playwright-html', open: 'never' }],
	],
	use: {
		baseURL,
		trace: 'on-first-retry',
		ignoreHTTPSErrors: true,
	},
	expect: {
		toHaveScreenshot: {
			animations: 'disabled',
			maxDiffPixelRatio: 0.015,
		},
	},
});
