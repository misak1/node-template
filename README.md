## インストール
`.bashrc`に下記の関数を追加
```sh
mknpm() {git clone https://github.com/misak1/node-template.git; cd
 node-template; rm -rf .git}
```

### テンプレート作成
```sh
$ mknpm
```

### README.md作成
```sh
$ npm run doc
```
