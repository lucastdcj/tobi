# 3 - entrada do problema
# 4 - saída do juiz
# 5 - saída do competidor

# Lendo a entrada do problema {{{
tab = []

f = File.open(3, 'r')
l = f.gets.split(' ')
n, m = l[0].to_i, l[1].to_i
for i in 0...n
   l = f.gets.split(' ')
   tab << Array.new(m)
   for j in 0...m
      tab[i][j] = l[j].to_i
   end
end
# }}}

comandosj = []
f  = File.open(4, 'r')
nj = f.gets.to_i
for i in 0...nj
   s = f.gets.split
   comandosj << [ s[0], s[1].to_i-1, s[2].to_i-1 ]
end

comandosc = []
f  = File.open(5, 'r')
nc = f.gets.to_i
for i in 0...nc
   s = f.gets.split
   comandosc << [ s[0], s[1].to_i-1, s[2].to_i-1 ]
end

if nc != nj
   puts "ERRO: Saída do competidor não usa o número mínimo de movimentos!"
   exit 1
end

l = []
for i in 0...n
   l << i
end

c = []
for i in 0...m
   c << i
end

comandosc.each do |co|
   if co[0] != 'L' and co[0] != 'C'
      puts "ERRO: Comando inválido!"
      exit 1
   end
   
   if co[0] == 'L'
      if co[1] >= n or co[1] >= n
         puts "ERRO: Índice (linha) do tabuleiro inválido!"
         exit 1
      end
      l[co[1]], l[co[2]] = l[co[2]], l[co[1]]
   end

   if co[0] == 'C'
      if co[1] >= m or co[1] >= m
         puts "ERRO: Índice (coluna) do tabuleiro inválido!"
         exit 1
      end
      c[co[1]], c[co[2]] = c[co[2]], c[co[1]]
   end
end

for i in 0...n
   for j in 0...m
      #puts "#{i}:#{j} :: #{tab[l[i]][c[j]]}"
      if tab[l[i]][c[j]].to_i != (i*m)+(j+1)
         puts "ERRO: Elemento na posição errada!"
         puts "#{n}:#{m}"
         puts "#{i}:#{j} :: #{tab[l[i]][c[j]]}"
         #for ii in 0...n
         #   for jj in 0...m
         #      printf "%2d ", tab[l[ii]][c[jj]]
         #   end
         #   printf "\n"
         #end
         exit 1
      end
   end
end

#puts "Ok!"
exit 0


