/* 
   OBI-2005 - Programacao Nivel 1
   Problema: Trilhas
   Arquivo : trilhas.c
   Autor   : Fernando Aires
*/

#include<stdio.h>

#define MAXPONTOS 1000

#define INFINITO MAXPONTOS+1

int main()
{
   int ntrilhas; /* Numero de trilhas */
   int npontos; /* Numero de pontos de medicao */
   int maiorsubida; /* Comprimento da maior subida de uma trilha */
   int maiordescida; /* Comprimento da maior descida de uma trilha */
   int melhorpeso; /* Comprimento da maior subida do melhor caminho ate
                      entao */
   int resultado; /* Melhor caminho a ser percorrido */
   int trilha=0; /* Trilha atual */
   int subindo; /* Indica se a trilha esta subindo */
   int descendo; /* Indica se a trilha esta descendo */
   int panterior; /* Ponto anterior observado da trilha */
   int patual; /* Ponto atual observado da trilha */
   int variacao; /* Variacao de altura no atual ponto da subida */
   int i,j; /* Iteradores */

   scanf("%d", &ntrilhas);

   melhorpeso=INFINITO;
   for(i=0;i<ntrilhas;i++)
   {
      trilha++;
      scanf("%d", &npontos);

      /* Iniciando valores */
      subindo=0;
      descendo=0;
      maiorsubida=0;
      maiordescida=0;
      variacao=0;

      scanf("%d", &panterior); /* Pega o primeiro ponto */

      /* Calcula a maior subida e a maior descida da trilha */
      for(j=1;j<npontos;j++)
      {
         scanf("%d", &patual);

         if(patual>panterior) /* Subiu */
         {
            descendo=0;
            if(subindo) variacao++;
            else 
            {
               if(variacao > maiordescida) maiordescida=variacao;
               subindo=1;
               variacao=1;
            }
         }
         else if(patual<panterior) /* Desceu */
         {
            subindo=0;
            if(descendo) variacao++;
            else
            {
               if(variacao > maiorsubida) maiorsubida=variacao;
               descendo=1;
               variacao=1;
            }
         }
         panterior=patual;
      }

      if((subindo) && (variacao > maiorsubida)) maiorsubida=variacao;
      if((descendo) && (variacao > maiordescida)) maiordescida=variacao;

      if(maiorsubida > maiordescida) maiorsubida=maiordescida; /* A maior subida
                                                     deve ser a menos custosa */

      if(maiorsubida < melhorpeso)
      {
         resultado=trilha;
         melhorpeso=maiorsubida;
      }
   }

   printf("%d\n", resultado);

   return 0;
}
