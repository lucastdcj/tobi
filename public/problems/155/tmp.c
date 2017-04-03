#include <stdio.h>

#define MAX 11000

int corr[MAX];
int ncorr;

int inst[MAX];
int mel[MAX];

int srch (int tag);

int main()
{
  int i;
  int tag;
  int nprog;
  int ninst;
  int pospr;
  int ver;
  /* a definicao dos numeros!!!!! */
  scanf("%d %d",&ninst,&nprog);
  for(i=0;i<nprog;i++)
    {
      mel[i]=0;
      inst[i]=0;
      corr[i]=0;
    }
  ncorr=0;
  for(i=0;i<ninst;i++)
    {
      scanf("%d %d",&tag,&ver);
      inst[ncorr]=ver;
      corr[ncorr++]=tag;
    }
  for(i=0;i<nprog;i++)
    {
      scanf("%d %d",&tag,&ver);
      pospr=srch(tag);
      if(ver>mel[pospr])
        mel[pospr]=ver;
    }
  for(i=0;i<ncorr;i++)
    {
      if(mel[i]>inst[i])
        {
          printf("%d %d\n",corr[i],mel[i]);
        }
    }
  return 0;
}

int srch(int tag)
{
  int i;
  for(i=0;i<ncorr;i++)
    {
      if(corr[i]==tag)
        break;
    }
  if(i==ncorr)
    {
      corr[i]=tag;
      ncorr++;
    }
  return i;
}
