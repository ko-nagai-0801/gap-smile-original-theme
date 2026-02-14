import fs from 'node:fs/promises';
import path from 'node:path';
import { fileURLToPath } from 'node:url';
import lighthouse from 'lighthouse';
import { launch } from 'chrome-launcher';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);
const themeDir = path.resolve(__dirname, '..');
const reportDir = path.join(themeDir, 'qa', 'reports');
const baseUrl = process.env.GSO_BASE_URL || 'http://gap-smile-geek.local';

const routes = ['/', '/services/', '/about/', '/contact/'];
const thresholds = {
	performance: 0.7,
	accessibility: 0.9,
	seo: 0.9,
	'best-practices': 0.85,
};

const scores = [];
const chrome = await launch({ chromeFlags: ['--headless=new', '--no-sandbox', '--disable-gpu'] });

try {
	for (const route of routes) {
		const url = new URL(route, baseUrl).toString();
		const result = await lighthouse(
			url,
			{
				port: chrome.port,
				output: 'json',
				logLevel: 'error',
				onlyCategories: Object.keys(thresholds),
			},
			undefined
		);

		const item = {
			url,
			scores: {},
		};

		for (const [category, minimum] of Object.entries(thresholds)) {
			const score = Number(result.lhr.categories[category]?.score || 0);
			item.scores[category] = score;
			if (score < minimum) {
				throw new Error(`${url}: ${category} score ${score.toFixed(2)} is below threshold ${minimum.toFixed(2)}`);
			}
		}

		scores.push(item);
	}
} finally {
	await chrome.kill();
}

await fs.mkdir(reportDir, { recursive: true });
await fs.writeFile(
	path.join(reportDir, 'lighthouse-summary.json'),
	JSON.stringify(
		{
			baseUrl,
			thresholds,
			routes: scores,
			checkedAt: new Date().toISOString(),
		},
		null,
		2
	),
	'utf8'
);

console.log('Lighthouse checks passed.');
