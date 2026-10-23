# atcoder-library

ABCなどで普段使っている個人用コードテンプレートと、`atcoder-notebook` 内のコードスニペットです。`acm` の設定で参照している `~/atcoder/templates/` のファイルに加え、ノート中のHaskell・PHPのコード例を公開しています。

[ノートのコードスニペット索引](snippets/README.md)から、探索・データ構造・数式・入出力・命名例・ABC469の復習コードを参照できます。元コードの省略や既知の不備、必要な依存関係は各スニペットに記載しています。

| ファイル | 内容 |
| --- | --- |
| [templates/main.hs](templates/main.hs) | Haskellの最小エントリーポイント |
| [templates/main.php](templates/main.php) | PHPの入力・出力ヘルパー、GCD・LCM・繰り返し二乗法、定数、`solve()` |
| [templates/main.rs](templates/main.rs) | Rustの `proconio::input!` を使うエントリーポイント |

既存テンプレートの処理は変えず、提出時の出典となるリポジトリURLのコメントを追加しています。Rust版には `proconio` が必要です。ローカルではCargoプロジェクトで使用してください（依存関係の例：`proconio = "=0.5.0"`）。Pythonは手元にテンプレートの実体がないため含めていません。

## 使い方

必要なテンプレートをコピーし、問題の処理を実装します。ソース先頭の `Template source:` コメントを提出コードにも残してください。

`acm` で使う場合は、このリポジトリのルートから次のように配置できます。既存の同名ファイルを上書きします。

```sh
mkdir -p ~/atcoder/templates
cp templates/main.hs templates/main.php templates/main.rs ~/atcoder/templates/
```

## 事前公開と参照URL

[2026年10月の改定告知](https://atcoder.jp/posts/algorithm_rules_20261014_ja)および[公式ルール本文](https://info.atcoder.jp/entry/llm-rules-ja)に基づき、次の運用をします。

- コンテストで使用する版は、開始前にこの公開リポジトリへpushします。第三者がコードと公開時刻を確認できる状態にします。
- コピーしたコードを使用する際は、提出ソースに参照URLを含めます。公式ルールではリポジトリへのリンク1つでよく、コピーした箇所ごとのリンクは不要とされています。
- 使用した版を明確にしたい場合は、GitHubのファイル画面で `y` キーを押して得られるコミット固定URLも記載できます。固定URL自体は公式ルールの必須条件ではありません。

テンプレートの公開は、コンテスト開催中のAI利用を許可するものではありません。コンテストごとに最新の公式ルールを確認してください。
