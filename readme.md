# Laravel Task

### 現在S3の運用をストップしているので,画像が正常に保存できません。ご了承ください。

teamLab株式会社のSummer Internshipに参加するにあたって事前課題として作成した,Laravelを用いたCRUDを行うアプリケーションのリポジトリです.
仕様は以下の通りです.
URLは
http://laraveltaskproject.herokuapp.com
フレームワークとしてLaravel5.8を使用.
全体としてテスト駆動開発で進めました.

## 機能とAPIエンドポイント

機能とエンドポイントの対応は以下の通り。

### Product

|内容|エンドポイント|HTTPメソッド|
|---|---|---|
|一覧|api/products|GET|
|追加|api/products|POST|
|個別参照|api/products/{product_id}|GET|
|編集|api/products/{product_id}|PUT|
|削除|api/products/{product_id}|DELETE|

### Shop

|内容|エンドポイント|HTTPメソッド|
|---|---|---|
|一覧|api/shops|GET|
|追加|api/shops|POST|
|個別参照|api/shops/{shop_id}|GET|
|編集|api/shops/{shop_id}|PUT|
|削除|api/shops/{shop_id}|DELETE|


## データベース

productおよびshopに関するデータベース定義は以下の通り。

### products

|カラム名|型|備考|
|-|-|-|
|id|AUTO_INCREMENT|-|
|title|varchar(100)|商品タイトル|
|description|varchar(500)|商品説明|
|price|integer|商品価格|
|created_at|timestamp|作成日時|
|updated_at|timestamp|更新日時|

なお商品画像は商品のidに紐づいた名前で保存される。

### shops
|カラム名|型|備考|
|-|-|-|
|id|AUTO_INCREMENT|-|
|name|varchar(100)|店舗名|
|created_at|timestamp|作成日時|
|updated_at|timestamp|更新日時|

products.shop_idとshops.idで外部キー制約を設定する。

### shop_product

|カラム名|型|備考|
|-|-|-|
|id|AUTO_INCREMENT|-|
|shop_id|bigInteger|-|
|product_id|bigInteger|-|

複数の店舗で複数の商品が取り扱われる可能性があるので、本Webアプリケーションのshopsとproductsの関係は多対多リレーションである。よって両テーブルの中継ぎを行う結合テーブルを作成する。
