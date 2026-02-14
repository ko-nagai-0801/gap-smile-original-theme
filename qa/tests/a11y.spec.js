const fs = require('node:fs');
const { test, expect } = require('@playwright/test');

const axeSource = fs.readFileSync(require.resolve('axe-core/axe.min.js'), 'utf8');
const routes = ['/', '/services/', '/about/', '/contact/'];

test.describe('axe accessibility', () => {
	for (const route of routes) {
		test(`no serious/critical violations: ${route}`, async ({ page }) => {
			await page.goto(route, { waitUntil: 'networkidle' });
			await page.addScriptTag({ content: axeSource });

			const results = await page.evaluate(async () => {
				return window.axe.run(document, {
					runOnly: { type: 'tag', values: ['wcag2a', 'wcag2aa'] },
				});
			});

			const majorViolations = results.violations.filter((item) => ['serious', 'critical'].includes(item.impact));
			expect(majorViolations, `${route} has serious/critical accessibility violations`).toEqual([]);
		});
	}
});
