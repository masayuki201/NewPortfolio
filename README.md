##Children's Videos（通称:「ちるび」）Ver.2.0

##Children's Videos（通称:「ちるび」）にLaravel Mix（Vue.js）を使用しコンポーネント化を実装+追加機能を実装

##ちるびのGitHub
https://github.com/masayuki201/PortFolio

## 追加機能
- 共通画面のコンポーネント化
- パスワード再設定メール機能
- Googleアカウントログイン機能
- いいね機能
- フォロー/フォロワー機能

##追加ページ
- 動画投稿者のページ
- 登録動画一覧ページ
- いいね一覧ページ
- フォロー/フォロワー一覧ページ
- パスワード再設定ページ

##追加DBテーブル
- いいねテーブル（likesテーブル）
- フォロー/フォロワーテーブル（followsテーブル）
- Googleアカウントテーブル（personal_access_tokenテーブル）
- パスワードリセットテーブル（password_resetsテーブル）

## 使用技術（Ver.）
- Laravel Mix 6
- Laravel 8
- PHP 7.3
- Vue.js 2.6
- HTML / CSS /Bootstrap 5.0
- MySQL 8.0.30
- Docker/Docker-compose
- YouTube Data API
- GOOGLE_CLIENT API


##コマンド一覧
### docker ビルド
docker-compose build

### docker 起動
docker-compose up -d

### dockerの中へ
docker-compose exec app bash

### コンパイルその1
npm run dev

### コンパイルその2
npm run watch-poll


### 画面
http://localhost/

### phpmyadmin
http://localhost:8080

##その他
laravel/uiインストール（8系）
composer require laravel/ui
