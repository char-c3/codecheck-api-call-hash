#include <iostream>
using namespace std;

int main(int argc, char *argv[])
{
  // start from 1 to ignore script name; argv[0] will be a name of processing file.
  for (int i = 1; i < argc; i++) {
    printf ("argv[%i]: %s\n", i, argv[i]);
  }
  return 0;
}
