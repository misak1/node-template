## インストール
`.bashrc`に下記の関数を追加
```sh
mknpm() {git clone https://github.com/misak1/node-template.git; cd
 node-template; rm -rf .git}
mkreadme() {php README.php | sed -e "s/NPM_PACKAGE_NAME/${1}/g" > README.md}
```

### テンプレート作成
```sh
$ mknpm
```

### README.md作成
```sh
$ mkreadme <パッケージ名>
```
