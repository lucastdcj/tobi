#include <iostream>
#include <string>

using namespace std;

string dicionario[1000], busca[1000];

int compara(int s1, int s2, int p1, int p2, int dist){
				    int arm=dist;

						    if(dicionario[s1][p1]=='\0'&&busca[s2][p2]=='\0') return dist;
								    if(dicionario[s1][p1]==busca[s2][p2]){
														    dist=compara(s1,s2, p1+1, p2+1, dist);
																        if(dist==-1)
																								            return -1;
																				        else
																												            return dist;
																								    }else{
																														        if(dist>=3) return -1;
																																		        dist=arm;
																																						        if(busca[s2][p2]!='\0'){
																																														            dist=compara(s1,s2, p1, p2+1, dist+1);
																																																				            if(dist!=-1&&dist<=2)
																																																														                return dist;
																																																										        }
																																										        dist=arm;
																																														        if(dicionario[s1][p1]!='\0'){
																																																						            dist=compara(s1, s2, p1+1, p2, dist+1);
																																																												            if(dist!=-1&&dist<=2)
																																																																						                return dist;
																																																																		        }
																																																		        dist=arm;
																																																						        dist=compara(s1, s2, p1+1, p2+1, dist+1);
																																																										        if(dist!=-1||dist<=2)
																																																																		            return dist;
																																																														        else
																																																																						            return -1;
																																																																		    }

}

int main(){
				    int N, M, distancia;
						    cin >> N >> M;

								    for(int i=0; i<N; i++)
														        cin >> dicionario[i];

										    for(int i=0; i<M; i++)
																        cin >> busca[i];

												    for(int i=0; i<M; i++){
																		        for(int j=0; j<N; j++){
																										            if(dicionario[j].size()+2<busca[i].size()||
																																								                dicionario[j].size()>busca[i].size()+2)
																																				                continue;
																																                distancia=compara(j, i, 0, 0, 0);
																																								                if(distancia!=-1&&distancia<=2)
																																																				                    cout << dicionario[j] << " ";
																																																        }
																						        cout << endl;
																										    }
														    return 0;
}
