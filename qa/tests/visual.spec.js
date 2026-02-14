const { test, expect } = require('@playwright/test');

const routes = [
	{ path: '/', name: 'home' },
	{ path: '/services/', name: 'services' },
	{ path: '/about/', name: 'about' },
	{ path: '/contact/', name: 'contact' },
];

for (const route of routes) {
	test(`desktop visual: ${route.name}`, async ({ page }) => {
		await page.setViewportSize({ width: 1440, height: 900 });
		await page.goto(route.path, { waitUntil: 'networkidle' });
		await expect(page).toHaveScreenshot(`desktop-${route.name}.png`, { fullPage: true });
	});

	test(`mobile visual: ${route.name}`, async ({ page }) => {
		await page.setViewportSize({ width: 390, height: 844 });
		await page.goto(route.path, { waitUntil: 'networkidle' });
		await expect(page).toHaveScreenshot(`mobile-${route.name}.png`, { fullPage: true });
	});
}
