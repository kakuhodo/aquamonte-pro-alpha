# aquamonte-pro-alpha
Continuous developing environment of AquaMonte

## Edition - _Quartz_
since 2024-01-31
ver. 0.9.x

### Concepts
* **Trinity** 3 layouts by 1 code

### Patterns
* **Solo** Single column, for web apps
* **Duo** 2 columns, right-sided, for corporate websites
* **Dash** 2 columns, left-sided, liquid layout, for admin dashboards

## Versions
| version | updated | memo |
|:---:|:---:|---|
| 0.9.0 | 2024-01-31 | Introducing concept _Trinity_ |

## Notes
フロントサイドに関することであれば、本書に記載するが、機能的なものは、ほとんどの場合、 _CoCore (AWP)_ 側で実装する。

- info は、子テーマでは自身の WP_Theme (内部に parent のオブジェクトを保有) となるため、取得する世代について要調整。
- `<head>` にリッチスニペット要素等を出力
    - `description` : `excerpt` (または、本文の一部) があれば出力、なければタグ自体出力しない
    - `keywords` : タクソノミーターム (最大5つまで)、1つもなければタグ自体出力しない
    - _Schema.org_
    - _OGP_
    - _HTML5 Boilerplate_ で実装されている要素も検討

> [!IMPORTANT]
> _Custom Walker Class_ (`Walker_Nav_Menu` の拡張) が有効なのは、メニューの**2階層目以降のみ**。

## Substream studies
### Info
* そのまま子テーマの情報を取得
* 親テーマの情報にアクセスしたい場合は、 `$info->parent`

### Supports
* デフォルトは親テーマの設定を**原則上書き(?)**

### AWP Settings
* デフォルトは親テーマの設定を**原則上書き(?)**

## Reference
### CSS Pseudo-elements / Font awesome
https://docs.fontawesome.com/web/add-icons/pseudo-elements

