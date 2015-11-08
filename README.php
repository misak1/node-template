# NPM_PACKAGE_NAME
[![npm total download](https://img.shields.io/npm/dt/NPM_PACKAGE_NAME.svg?style=flat)](https://www.npmjs.com/package/NPM_PACKAGE_NAME)
[![npm version](https://badge.fury.io/js/NPM_PACKAGE_NAME.svg?style=flat)](https://badge.fury.io/js/NPM_PACKAGE_NAME)
[![License](http://img.shields.io/badge/license-MIT-blue.svg?style=flat)](http://ruedap.mit-license.org/2015)

## インストール - Install
```
$ npm i -S NPM_PACKAGE_NAME
```

## 使い方 - Usage

### Functions
```
<?php
`fgrep -B 1 "= function" index.js | sed -e "s/{/{…}/g" > README-func.txt`;
echo file_get_contents('README-func.txt');
?>
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
require('NPM_PACKAGE_NAME');
<?php
echo implode("\n", array_slice(explode( "\n", file_get_contents('example.js')), 2));
?>
    </pre>
  </div>
  </td>
  <td>
  <pre class="rich-diff-level-zero">
# node example.js
<?php
`node example.js > README-result.txt`;
echo file_get_contents('README-result.txt');
?>
  </pre>
  </td>
</tr>
</table>

## ライセンス - License
MIT License


## 作者 - Author
- (C)Misaki Shibata <misaki.pink@gmail.com>

<?php
unlink('README-func.txt');
unlink('README-result.txt');
?>
