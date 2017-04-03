#include <cstdio>
#include <cstring>

char in[16];
char tab[256];
const char *toks = "ADGJMPTW";

int main(void){

  
  int ini = 1;
  int idx = 0;
  for(int i = 0; i < 256; i++) tab[i] = i;
  for(char c = 'A'; c <= 'Z'; c++){
    if(c == toks[idx]){
      idx++;
      ini++;
    }
    tab[c] = ini + '0';
  }
  tab['-'] = '-';
  
  
  scanf("%s",in);
  for(int i = 0; i < strlen(in); i++) in[i] = tab[in[i]];
  printf("%s\n",in);
  return 0;
}
