import sys, os
import random

N = int(sys.argv[1])
M = int(sys.argv[2])
K = int(sys.argv[3])
S = int(sys.argv[4])

T = int(sys.argv[5])

grid = []
for i in range(N):
    grid.append(['.']*M)

dx8 = [1, 1, 1, 0, -1, -1, -1, 0]
dy8 = [-1, 0, 1, 1, 1, 0, -1, -1]

dx4 = [1, 0, -1, 0]
dy4 = [0, 1, 0, -1]

ships = []

if T == 1:
    for i in range(S):
        while True:
            x = random.randint(1, M) - 1
            y = random.randint(1, N) - 1
            if grid[y][x] == '#':
                continue
            fail = False

            for d in range(8):
                x2 = x + dx8[d]
                y2 = y + dy8[d]
                if x2 < 0 or y2 < 0 or x2 >= M or y2 >= N:
                    continue
                if grid[y2][x2] == '#':
                    fail = True

            if not fail:
                ships.append([(y, x)])
                grid[y][x] = '#'
                break
elif T == 2:
    for i in range(S):
        while True:
            x = random.randint(1, M) - 1
            y = random.randint(1, N) - 1
            s = random.randint(2, 7)
            fail = False

            ship = []

            for p in range(s):
                x2 = x + p
                y2 = y
                if x2 >= M:
                    fail = True
                    continue

                ship.append((y2, x2))
                if grid[y2][x2] == '#':
                    fail = True
                    break

                for d in range(8):
                    x3 = x2 + dx8[d]
                    y3 = y2 + dy8[d]
                    if x3 < 0 or y3 < 0 or x3 >= M or y3 >= N:
                        continue
                    if grid[y3][x3] == '#':
                        fail = True
                        break

            if not fail:
                ships.append(ship)
                for l, c in ship:
                    grid[l][c] = '#'
                break
else:
    for i in range(S):
        while True:
            x = random.randint(1, M) - 1
            y = random.randint(1, N) - 1
            s = random.randint(2, 50)

            fila = [(x, y)]
            nafila = [(x, y)]
            ship = []

            while len(fila) > 0 and len(ship) < s:
                x, y = fila.pop(random.randint(0, len(fila)-1))

                if grid[y][x] == '#':
                    continue
                if (y, x) in ship:
                    continue

                fail = False

                for d in range(8):
                    x2 = x + dx8[d]
                    y2 = y + dy8[d]
                    if x2 < 0 or y2 < 0 or x2 >= M or y2 >= N:
                        continue
                    if grid[y2][x2] == '#':
                        fail = True
                        break

                if not fail:
                    ship.append((y, x))

                    for d in range(4):
                        x2 = x + dx4[d]
                        y2 = y + dy4[d]
                        if x2 < 0 or y2 < 0 or x2 >= M or y2 >= N:
                            continue
                        if not (x2, y2) in nafila:
                            nafila.append((x2, y2))
                            fila.append((x2, y2))

            if len(ship) >= 2:
                ships.append(ship)
                for l, c in ship:
                    grid[l][c] = '#'
                break


print '%d %d'% (N, M)
for linha in grid:
    print ''.join(linha)

tiros = []

acertos = random.randint(K/3, int(K*0.6))

for s in ships:
    if len(tiros) > acertos:
        break
    tiros.extend(s)

while len(tiros) < K:
    x = random.randint(1, M) - 1
    y = random.randint(1, N) - 1
    if not (y, x) in tiros:
        tiros.append((y, x))

random.shuffle(tiros)

print len(tiros)
for y, x in tiros:
    print y+1, x+1
