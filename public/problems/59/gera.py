import sys

a = [6442, 8798, 8380, 2758, 2398, 5142, 2286, 3084, 3949, 8594, 6098, 6821, 6567, 5522, 6788, 7595, 9824, 9337, 6110, 6464, 7398, 9388, 4466, 7206, 4702, 4822, 5371, 3163, 5875, 6902, 3022, 6817, 8488, 4029, 8338, 7203, 6755, 8549, 9902, 4818]

dir = int(sys.argv[1])
file = int(sys.argv[2])

print a[4*(dir-1) + (file-1)]

