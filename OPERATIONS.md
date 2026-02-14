# Gap Smile Theme Operations

## 1. 最初の30分セットアップ
1. WordPress管理画面でテーマを有効化。
2. `Gap Smile運用 > 初期セットアップ` を開いて「初期セットアップを実行」。
3. `Gap Smile運用 > テーマ設定` で会社情報・CTA文言を入力。
4. `GA4 Measurement ID` を入力（例: `G-XXXXXXXXXX`）。
5. Consent ModeをONのままにし、同意バナー文言を確認。
6. Home/Services/About/Contact をプレビューし公開。

## 2. 日常の更新手順（初心者向け）
1. 固定ページまたは投稿を「下書き保存」。
2. プレビューでPC/スマホを確認。
3. CTAリンク先と画像品質（推奨1600x1000以上）を確認。
4. 問題なければ公開。

## 3. 設定バックアップと復元
- バックアップ: `Gap Smile運用 > テーマ設定 > 設定をExport`
- 復元: 同画面でJSONファイルを選択し `設定をImport`
- 復元後はキャッシュを削除し、主要ページを再確認。

## 4. QA運用
- クイック確認: `bash ./smoke-check.sh`
- 総合確認: `bash ./qa/run-quality-checks.sh`
- 事前準備（初回のみ）:
  1. `npm install`
  2. `npx playwright install`
  3. 必要なら `GSO_BASE_URL` を環境変数で設定

## 5. 障害時の復旧手順
1. 直近の設定JSONをImport。
2. 該当ページを復元ポイントから戻す。
3. `bash ./smoke-check.sh` を実行して最低限の整合性を確認。
4. まだ解消しない場合は、問題ページを一時的に下書きへ戻す。

## 6. 変更時のチェックリスト
- Works ON/OFFのナビ表示が想定どおりか
- Heroがfull-bleedのままか
- Contact導線とGA4イベントが動作するか
- noindex設定が意図どおりか
