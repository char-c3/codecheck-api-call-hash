# Command line application template for C/C++

Implement CLI application by editing [main.cpp](src/main.cpp).  
You may add new files to keep your code clean, if it is allowed in your challenge.

## How to get input parameters
You can get arguments with ordinary C++ way, using `int argc` and `char * argv[]`.

```cpp
int main(int argc, char * argv[])
{
  // code to run
  return 0;
}
```

## How to output result
You can use `cout`, `printf`, etc.

``` c++
  cout << argv[0] << endl
```

## How to compile
To compile, we are using [clang](http://clang.llvm.org/) c++ command.

If you want to change compile option or etc, please edit [codecheck.yml](codecheck.yml) `build` section.  
(If you change output filename, you have to change env/APP_COMMAND section too.)

You can build pure C application by switching compiler command from `c++` to `clang`.
