#include <iostream>
using namespace std;

int main(){
	int A,B,C,X,Y,Z,ret = 0;
	cin >> A >> B >> C >> X >> Y >> Z;
	for(int i = 0; i < X/A; i++)
		for(int j = 0; j < Y/B; j++)
			for(int k = 0; k < Z/C; k++)
				ret++;
	cout << ret << endl;
	return 0;
}
