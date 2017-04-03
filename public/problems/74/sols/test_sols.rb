require "../config.rb"

sols = [
   { :autor => '100pts', :arquivo => '100pts.cpp' },
]

oficial = 0

puts "Compilando soluções do problema #{$name}."
sols.each do |s|
   puts " #{s[:autor]}"
   system "g++ #{s[:arquivo]} -o #{s[:autor]}"
end


puts "Gerando saída oficial."
Dir.glob(File.join('../tests/test**', 'in*')).each do |arq|
   system "./#{sols[oficial][:autor]} < #{arq} > #{arq.gsub('in', 'out')} 2> /dev/null"
end

Dir.glob(File.join('../tests/test**', 'in*')).each do |arq|
   printf "Testando arquivo %-25s :: ", arq

   tle = []
   sols.each do |s|
      time_start = Time.new      
      system "ulimit -t #{$time_limit}; ./#{s[:autor]} < #{arq} > #{s[:autor]}.out 2> /dev/null"
      printf " #{s[:autor]}"
      if $?.exitstatus == 152
         printf "(TLE   ) "
         tle << s
      elsif $?.exitstatus != 0
         printf "(RE    ) "
         tle << s
      else
         printf "(%.3fs) ", (Time.new - time_start)
      end
   end
   puts

   0.upto sols.size-1 do |i|
      next if tle.index(sols[i]) != nil
      # system "diff -b -B #{sols[0][:autor]}.out #{sols[i][:autor]}.out > tmp"
      system "ruby judge.rb 3< #{arq} 4< #{sols[0][:autor]}.out 5< #{sols[i][:autor]}.out"
      if $?.exitstatus != 0
         puts " ERRO! Saídas diferentes (#{sols[0][:autor]} - #{sols[i][:autor]})"
      end
   end
end
