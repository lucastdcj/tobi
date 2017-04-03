#include <iostream>
#include <fstream>
#include <string>
#include <cstdlib>
#include <cmath>

using namespace std;

//======================================================================
//
// Class Vertice
//
//   Implementa verifica��o de conex�o, comparando os pais atribuidos aos
// v�rtices.
//
class Vertice
{
public:
  int num;

  Vertice();
  ~Vertice();

  Vertice *pai();
  bool conectado(Vertice *v);
  void conecta(Vertice *v);

  // Usado p/ corre��o:
  int custo_conexao(Vertice *v); // -1 se n�o existe aresta
  void conexao_possivel(Vertice *v, int custo);
  
  

protected:
  Vertice *pai_direto;

  // Os campos abaixo s�o usados p/ corre��o
  class ConexaoDireta 
  {
  public:
    Vertice *para;
    ConexaoDireta *proxima;
    int custo;
  };
  ConexaoDireta *conexoes;
};




//======================================================================
//
// Aresta: liga dois v�rtices com um custo
//
class Aresta
{
public:
  Aresta(Vertice *_a, Vertice *_b, int _custo) : a(_a), b(_b), custo(_custo) {}
  Aresta() : a(0), b(0), custo(0) {}

  Vertice *a, *b;
  int custo;

  bool operator<(const Aresta &o) { return custo < o.custo; }
  Aresta &operator=(const Aresta &o) { a = o.a; b = o.b; custo = o.custo; return *this;}
};





//======================================================================
//
// Implementa��o dos M�todos
//
Vertice:: Vertice() : num(0), pai_direto(0), conexoes(0) {}  
Vertice:: ~Vertice()
{
  ConexaoDireta *tmp;
  while (conexoes)
    {
      tmp = conexoes;
      conexoes = conexoes->proxima;
      delete tmp;
    }
}
inline Vertice *Vertice:: pai()
{ 
  if (pai_direto == 0 || pai_direto == this) return this; 
  pai_direto = pai_direto->pai();
  return pai_direto;
}
bool Vertice:: conectado(Vertice *v)
{
  return (pai() == v->pai());
}
void Vertice:: conecta(Vertice *v)
{
  if (pai_direto && pai_direto != this) pai_direto->conecta(v->pai());
  pai_direto = v->pai();
}
// Os m�todos abaixo s�o usados para corre��o
void Vertice:: conexao_possivel(Vertice *v, int custo)
{
  ConexaoDireta *tmp = new ConexaoDireta;
  tmp->proxima = conexoes;
  tmp->para = v;
  tmp->custo = custo;
  conexoes = tmp;
}
int Vertice:: custo_conexao(Vertice *v)
{
  ConexaoDireta *tmp = conexoes;
  while (tmp)
    {
      if (tmp->para == v) return tmp->custo;
      tmp = tmp->proxima;
    }
  return -1;
}





//======================================================================
//
// Ordena arestas: quicksort
//
inline void swap(Aresta &x, Aresta &y) { Aresta z = x; x = y; y = z; }
void ordena(Aresta *arestas, int quantas)
{
  if (quantas == 1) return;
  if (quantas == 2) 
    {
      if (arestas[1] < arestas[0]) swap(arestas[0], arestas[1]);
      return;
    }
  
  // divide 
  int ini1 = 0, ini2 = quantas/2;
  ordena(arestas, quantas/2); 
  ordena(&arestas[ini2], quantas - quantas/2);

  // conquista
  Aresta sol[quantas];
  int idx = 0;
  while (idx < quantas)
    {
      if (ini2 == quantas || (ini1 != quantas/2 && arestas[ini1] < arestas[ini2]))
        sol[idx++] = arestas[ini1++];
      else 
        sol[idx++] = arestas[ini2++];
    }
  for (idx = 0; idx < quantas; idx ++)
    arestas[idx] = sol[idx]; 
}








//======================================================================
//
// Main
//

int main(int argc, char *argv[])
{
  // n�mero do teste
  int teste = 1;

  // vari�veis da corre��o do aluno
  bool corrige = false;
  ifstream arq_aluno;
  string str_aluno;
  double nota = 0; int num_notas = 0;

  if (argc > 1) 
    {
      freopen(argv[2], "rt", stdin);
      arq_aluno.open(argv[1]);
      if (!arq_aluno) 
        {
          cerr << "N�o consegui abrir arquivo \"" << argv[1] << "\"" << endl;
          cout << "0" << endl;
          exit(1);
        }
      corrige = true;
      arq_aluno >> str_aluno;
    }

  //======================================================================
  while (true)
    {

      // L� quantidade de tabas e rotas a serem analisadas
      int num_tabas = 0, num_rotas = 0;
      cin >> num_tabas;
      if (num_tabas == 0) break;
      cin >> num_rotas;
      
      // Monta tabas
      Vertice tabas[num_tabas];
      for (int i = 0 ; i < num_tabas; i ++) tabas[i].num = i;
      
      // L� rotas
      Aresta rotas[num_rotas];
      for (int i = 0; i < num_rotas; i ++)
        {
          int x, y, z;
          cin >> x >> y >> z;
          if (x > num_tabas || y > num_tabas || x < 1 || y < 1) 
            {
              cerr << "rota " << i << " da entrada � inv�lida" << endl;
              cout << "0" << endl;
              exit(1);
            }
          if (y < x) { int tmp = x; x = y; y = tmp; }
          tabas[x-1].conexao_possivel(&tabas[y-1],z);
          rotas[i].a = &tabas[x-1];
          rotas[i].b = &tabas[y-1];
          rotas[i].custo = z;
        }

      // Ordena rotas por custo
      ordena(&rotas[0], num_rotas);

      // Imprime rotas ordenadas
      //for (int i = 0; i < num_rotas; i ++)
      //  {
      //    cout << "Rota " << i+1 << ": "
      //         << "custo=" << rotas[i].custo
      //         << endl;
      //  }
      
      // Prepara sa�da do teste
      if (!corrige) cout << "Teste " << teste << endl;

      // Gera a �rvore: 
      //    selecionando as (num_tabas - 1) rotas mais baratas
      int custo_total = 0;
      int selecionadas = 0;
      int idx_rotas = 0;
      while (selecionadas < num_tabas-1 && idx_rotas < num_rotas) 
        {
          const Aresta &rota = rotas[idx_rotas];
          if ( !rota.a->conectado(rota.b) )
            {
              // cout << "Rota " << idx_rotas+1 << ": ";
              rota.a->conecta(rota.b);
              if (!corrige)
                cout << rota.a->num+1 << " " << rota.b->num+1 << endl;
              selecionadas ++;
              custo_total += rota.custo;
            }
          idx_rotas ++;
        }
      if (selecionadas != num_tabas-1)
        {
          cerr << "*** grafo original n�o era conexo!?!?" << endl;
        }



      //for (int i = 0 ; i < num_tabas ; i ++ )
      //  for (int j = i+1 ; j < num_tabas; j ++)
      //    if (tabas[i].conectado_diretamente(&tabas[j]))
      //      cout << "Taba " << i+1 << " conecatada a taba " << j+1 << endl;



      // Corrige sa�da do aluno, a string "Teste" j� deve ter sido
      // lida do arquivo (e estar em str_aluno)
      if (corrige)
        {
          int num;

          // confere n�mero do teste do aluno
          if (str_aluno != "Teste") 
            {
              cerr << "   *** palavra \"Teste\" esperada e n�o encontrada" << endl;
              if (corrige) cout << "0" << endl;
              exit(1);
            }
          arq_aluno >> num;
          if (num != teste)
            {
              cerr << "   *** n�mero do teste (" << num 
                   << ") diferente do esperado (" << teste
                   << ")" << endl;
              if (corrige) cout << "0" << endl;
              exit(1);
            }
          
          // monta tabas do aluno
          Vertice tabas2[num_tabas];
          for (int i = 0 ; i < num_tabas; i ++) tabas2[i].num = i;

          // l� rotas do aluno
          Aresta rotas2[num_rotas];
          int rotas_aluno = 0;
          int custo_aluno = 0;
          while (true)
            {
              // l� rota
              int x, y;
              arq_aluno >> str_aluno;
              if (!arq_aluno) break;
              if (str_aluno == "Teste") break;

              if (rotas_aluno == num_rotas)
                {
                  cerr << "   *** solu��o tem mais rotas que o n�mero de rotas original"
                       << endl;
                  if (corrige) cout << "0" << endl;
                  exit(1);
                }

              x = strtol(str_aluno.c_str(),0,10);
              if (x < 1 || x > num_tabas)
                {
                  cerr << "   *** taba conectada (" << str_aluno
                       << ") inv�lida" << endl;
                  if (corrige) cout << "0" << endl;
                  exit(1);
                }
              arq_aluno >> y;
              if (y < 1 || y > num_tabas)
                {
                  cerr << "   *** taba conectada (" << y
                       << ") inv�lida" << endl;
                  if (corrige) cout << "0" << endl;
                  exit(1);
                }

              // monta rota
              if (y < x) { int tmp = x; x = y; y = tmp; }
              Aresta &rota = rotas2[rotas_aluno];
              rota.a = &tabas2[x-1];
              rota.b = &tabas2[y-1];
              rota.a->conecta(rota.b);

              //cout << "Rota " << rotas_aluno+1 << ": " 
              //     << x << " para " << y 
              //     << (tabas[x-1].conectado_diretamente(&tabas[y-1]) ? " (*)" : " ()" )
              //     << endl;

              // verifica se est�o conectados na �rvore solu��o, e acumula custo
              int custo = tabas[x-1].custo_conexao(&tabas[y-1]);
              if (custo == -1) 
                {
                  // usando aresta que n�o existe
                  cerr << "   *** usando rota n�o definida" << endl;
                  if (corrige) cout << "0" << endl;
                  exit(1);                   
                }
              custo_aluno += custo;

              // pr�xima rota
              rotas_aluno ++;
            }
          
          // verifica se foi montada a �rvore de espalhamento solu��o
          if (rotas_aluno == num_tabas - 1) 
            {
              // verifica se t� tudo conectado
              int i;
              for (i = 1; i < num_tabas; i ++)
                {
                  if (!tabas2[i].conectado(&tabas2[0]))
                    break;
                }
              if (i == num_tabas)
                {
                  if (custo_total > custo_aluno)
                    {
                      cerr << "   *** ERRO, solu��o do aluno melhor que a oficial !?!?" << endl;
                      nota += 10.0;
                    }
                  else if (custo_total == custo_aluno)
                    nota += 10.0;
                  else
                    {
                      // � uma �rvore, n�o m�nima
                      nota += 2.0; 
                      cerr << "   - solu��o n�o � m�nima" << endl;
                    }
                }
              else 
                {
                  cerr << "   - nem todas tabas foram conectadas" << endl;
                }
            }
          else if (rotas_aluno < num_tabas-1)
            cerr << "   - n�mero de rotas insuficientes para conectar todas tabas" << endl;
          else
            cerr << "   - est�o sendo usadas rotas desnecess�rias" << endl;

          // mais uma nota
          //cout << "Nota " << num_notas << ": " << nota << endl;
          num_notas ++;
        } // corre��o do aluno 
      



      // Pr�ximo teste
      if (!corrige) cout << endl;
      teste ++;
    }
  //======================================================================




  // retorna nota do aluno
  if (corrige)
    {
      nota = floor(nota/num_notas+0.5);
      if (nota > 10) nota = 10;
      else if (nota < 0) nota = 0;
      cout << nota << endl;
    }

  return 0;
}
