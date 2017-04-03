def salva nome, conteudo
   File.open(nome, "w") do |f|
      f.puts conteudo
   end
end

# Casos da folha
def test_1
   system("mkdir test1")
   salva "test1/in1" , "10 2\nI 1 5\nS 3 7\n"
   salva "test1/out1", "19\n"

   salva "test1/in2" , "15 4\nS 2 11\nI 10 15\nI 1 10\nS 5 10\n"
   salva "test1/out2", "65\n21\n"

end

def test_aleatorio n, m
   caso = "#{n} #{m}\nS 1 #{n}\n"
   1.upto m-1 do |k|
      lim = [rand(n-1)+1, rand(n-1)+1]
      while lim[0] == lim[1]
         lim = [rand(n-1)+1, rand(n-1)+1]
      end
      nn = lim.min
      mm = lim.max

      if rand(2) == 1
         caso += "I #{nn} #{mm}\n"
      else
         caso += "S #{nn} #{mm}\n"
      end
   end
   caso
end


def test_2a3
   2.upto 3 do |i|
      system "mkdir test#{i}"
      1.upto 4 do |j|
         n, m = rand(100-4) + 4, rand(100-2) + 2
         salva "test#{i}/in#{j}", test_aleatorio(n,m)
      end
   end
end

def piorCaso
   caso = "1000000000 3000\n"
   1.upto 500 do |i|
      if (i % 2) == 0
         caso += "S #{rand(1000)+1} 1000000000\n"
      else
         caso += "I #{rand(100)+1} #{1000000000 - i + 1}\n"
      end
   end
   caso
end

def test_4a7
   4.upto 7 do |i|
      system "mkdir test#{i}"
      1.upto 4 do |j|
         n, m = rand(10000-5555)+5555, rand(1000-555)+555
         salva "test#{i}/in#{j}", test_aleatorio(n,m)
      end
   end
end

def test_8a10
   8.upto 10 do |i|
      system "mkdir test#{i}"
      1.upto 4 do |j|
         n, m = 1000000, 1000
         salva "test#{i}/in#{j}", test_aleatorio(n,m)
      end
      salva "test#{i}/in5", piorCaso
   end
end

# Limpando o diretório
srand(130031)
system("rm -rf test*/")

test_1
test_2a3
test_4a7
test_8a10

