#include <cstdio>
#include <algorithm>

using namespace std;

#define MAX 110

pair<int, int> v[MAX];

int main() {
				  int n, m;

					  scanf(" %d %d", &n, &m);

						  for (int i = 0; i < n; i++){
											    v[i] = make_pair(0, i + 1);
													    for(int j = 0; j < m; j++){
																			      int x;
																						      scanf(" %d", &x);
																									      v[i].first += x;
																												    }
															  }
							  sort(v, v+n);
								  for (int i = 0; i < 3; i++) {
														printf("%d\n", v[i].second);
														  }
									  return 0;
}

