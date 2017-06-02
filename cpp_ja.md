# コマンドラインアプリケーション(CLI アプリ)作成用テンプレート(C/C++)

[main.cpp](src/main.cpp)を編集して、CLIアプリを実装してください。  
チャレンジ内でファイルの作成が許可されていれば、可読性等のためにファイルを分割する事も可能です。

## コマンドライン引数の取得方法
通常のC++アプリケーションと同じように、`int argc` と `char * argv[]` を使用してください。

```cpp
int main(int argc, char * argv[])
{
  // code to run
  return 0;
}
```

## コマンド実行結果の標準出力への出力
cout、printf等標準出力に出力する任意のメソッドが使用可能です。

``` c++
  cout << argv[0] << endl
```

## コンパイルについて
コンパイルには[clang](http://clang.llvm.org/)のc++コマンドを使用しています。

コンパイルオプション等を変更する場合は[codecheck.yml](codecheck.yml)のbuildセクションを変更してください。

(出力ファイル名を変更した場合はenv/APP_COMMANDセクションも変更が必要です。)

buildをc++からclangに変更することで、(C++ではない)純粋Cアプリケーションも作成可能です。
