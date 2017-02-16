# My Resume

## 说明 (Introduction)

这是一个使用 HTML / CSS / PHP 语言写的一个程序员与工程师的 Web 简历模板。也可保存成 PDF 格式或打印成黑白纸张。

在 DIYgod 的 [🌏最🐂的个人简历](https://github.com/DIYgod/Resume) 上改进成为 [🌏最最🐂的个人简历](https://github.com/ZMOM1031/resume)

风格参考 @Ovilia @joyeecheung @lishengzxc

## 页面 (Pages)

* `index.html` 为静态 Web 展示页面。
* `index.php` 为动态 Web 展示页面，可设置访问授权码，无需数据库。
* `digital.html` 为 PDF 转存页面。
* `print.html` 为黑白打印页面。

## 使用 (Usage)

1. Star 本项目
2. Clone 到本地
3. 在 `index.html` `digital.html` `print.html` 文件中填写你的信息
4. 打开 `digital.html` 页面生成彩色数字版本 PDF（以 Chrome 浏览器为例）：打开 `文件 -> 打印`，设置布局为纵向，纸张尺寸为 `A3`，边距无，背景图片选项打钩，保存。
5. 打开 `print.html` 页面生成黑白打印版本 PDF（同上）（二维码生成推荐使用 [草料二维码生成器](http://cli.im/)）
5. 部署上线（可压缩 PDF 后将其放在根目录里供在线下载，推荐在线压缩工具 [smallpdf](http://smallpdf.com/cn/compress-pdf)）
6. Enjoy it!

## 开发 (Development)

```
$ npm install
$ npm install -g gulp
$ gulp
```

## LICENSE

MIT © [DIYgod](https://github.com/DIYgod) [ZMOM1031](https://github.com/ZMOM1031)
