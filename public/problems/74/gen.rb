class Array
   # Shuffle the array
   def shuffle!
      n = length
      for i in 0...n
         r = Kernel.rand(n-i)+i
         self[r], self[i] = self[i], self[r]
      end
      self
   end

   # Return a shuffled copy of the array
   def shuffle
      dup.shuffle!
   end
end


def salva nome, conteudo
   File.open(nome, "w") do |f|
      f.puts conteudo
   end
end

# Casos da folha
def test_1
   system("mkdir test1")
   salva "test1/in1" , "2 2\n4 3\n2 1"
   salva "test1/out1", "2\nL 1 2\nC 1 2"

   salva "test1/in2" , "3 4\n1 2 3 4\n5 6 7 8\n9 10 11 12"
   salva "test1/out2", "0"

   salva "test1/in3", """3 4
1 4 2 3
9 12 10 11
5 8 6 7"""

   salva "test1/out3", "3\nL 3 2\nC 2 3\nC 3 4"
end

# Tabuleiro {{{
def tabuleiro n,m
   tab = []
   1.upto n do
      tab << Array.new(m)
   end

   1.upto n*m do |k|
      i, j = (k-1)/m, (k-1)%m
      tab[i][j] = k
   end
   tab
end

def tabuleiro_aleatorio n, m
   lin = []
   1.upto n do |k|
      lin << k-1
   end

   col = []
   1.upto m do |k|
      col << k-1
   end

   lin = lin.sort_by { rand }
   col = col.sort_by { rand }

   t   = tabuleiro n, m
   ret = []
   0.upto n-1 do |i|
      r = []
      0.upto m-1 do |j|
         r << t[lin[i]][col[j]]
      end
      ret << r
   end
   ret
end

# }}}

def test_aleatorio n,m
   caso = "#{n} #{m}\n"
   tab  = tabuleiro_aleatorio n, m
   tab.each do |l|
      caso2 = "#{l[0]}"
      for k in 1...m
         caso2 += " #{l[k]}"
      end
      caso += caso2 + "\n"
   end
   caso
end

def test_2a3
   2.upto 3 do |i|
      system "mkdir test#{i}"
      1.upto 4 do |j|
         n, m = rand(10) + 1, rand(10) + 1
         salva "test#{i}/in#{j}", test_aleatorio(n,m)
      end
   end
end

def test_4a7
   4.upto 7 do |i|
      system "mkdir test#{i}"
      1.upto 4 do |j|
         n, m = rand(30) + 71, rand(30) + 71
         salva "test#{i}/in#{j}", test_aleatorio(n,m)
      end
   end
end

def test_8a10
   8.upto 10 do |i|
      system "mkdir test#{i}"
      1.upto 4 do |j|
         n, m = rand(30) + 171, rand(30) + 171
         salva "test#{i}/in#{j}", test_aleatorio(n,m)
      end
   end
end


# Limpando o diretório
srand(130031)
system("rm -rf test*/")

test_1
test_2a3
test_4a7
test_8a10
