# template
[![npm total download](https://img.shields.io/npm/dt/template.svg?style=flat)](https://www.npmjs.com/package/template)
[![npm version](https://badge.fury.io/js/template.svg?style=flat)](https://badge.fury.io/js/template)
[![License](http://img.shields.io/badge/license-MIT-blue.svg?style=flat)](http://ruedap.mit-license.org/2015)

## インストール - Install
```
$ npm i -S template
```

## 使い方 - Usage

### Functions
```
  // ヒアドキュメント用
  String.prototype.uHereDoc = function() {…}
--
  // スラッシュ挿入
  String.prototype.uAddslashes = function(s) {…}
--
    // 文字列の繰り返し
  String.prototype.uRepeat = function(i) {…}
--
  // パスからファイル情報返す @return ['ファイル名','拡張子','拡張子抜きファイル名']
  String.prototype.uGetFileInfo = function() {…}
--
    // パスからファイル名を返す
  String.prototype.uGetFileNameExt = function() {…}
--
    // パスから拡張子を返す
  String.prototype.uGetFileExt = function() {…}
--
    // パスから拡張子抜きファイル名を返す
  String.prototype.uGetFileName = function() {…}
--
    // Math.floor(x)小数点以下指定
  Math.uFloor = function(x, scale) {…}
--
    // Math.ceil(x)小数点以下指定
  Math.uCeil = function(x, scale) {…}
--
    // Math.round(x)小数点以下指定
  Math.uRound = function(x, scale) {…}
```

### NodeJS
<table>
<tr>
  <th><h3>Code</h3></th>
  <th><h3>Result</h3></th>
</tr>
<tr>
  <td>
  <div class="highlight highlight-source-js">
    <pre class="rich-diff-level-zero">
require('./template.js');
// Here Documents
var t = (function(){/*
&lt;script&gt;
$(&quot;*&quot;).css(&quot;border&quot;, &quot;3px solid red&quot;);
&lt;/script&gt;
*/}).toString().uHereDoc();
console.log(t);
console.log("-".uRepeat(20));

var path = 'test.png';
console.log(path.uGetFileInfo());
console.log(path.uGetFileNameExt());
console.log(path.uGetFileExt());
console.log(path.uGetFileName());
console.log(path);
console.log("-".uRepeat(20));


var path2 = '/Users/mac/Documents/vhosts/m-util/index.js';
console.log(path2.uGetFileInfo());
console.log(path2.uGetFileNameExt());
console.log(path2.uGetFileExt());
console.log(path2.uGetFileName());
console.log(path2);
console.log("-".uRepeat(20));

console.log(Math.uFloor(124.456, 1));
console.log(Math.uCeil(124.456, 1));
console.log(Math.uRound(124.454, 1));
console.log(Math.uRound(124.455, 1));
console.log("-".uRepeat(20));

console.log(Math.uFloor(232.456, 2));
console.log(Math.uCeil(232.456, 2));
console.log(Math.uRound(232.454, 2));
console.log(Math.uRound(232.455, 2));
console.log("-".uRepeat(20));
    </pre>
  </div>
  </td>
  <td>
  <pre class="rich-diff-level-zero">
# node example.js

&lt;script&gt;
$(&quot;*&quot;).css(&quot;border&quot;, &quot;3px solid red&quot;);
&lt;/script&gt;

--------------------
[ 'test.png', 'png', 'test' ]
test.png
png
test
test.png
--------------------
[ 'index.js', 'js', 'index' ]
index.js
js
index
/Users/mac/Documents/vhosts/m-util/index.js
--------------------
124.4
124.5
124.5
124.5
--------------------
232.45
232.46
232.45
232.46
--------------------
  </pre>
  </td>
</tr>
</table>

## ライセンス - License
MIT License


## 作者 - Author
- (C)Misaki Shibata <misaki.pink@gmail.com>

