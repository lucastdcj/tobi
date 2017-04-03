# Configuration file {{{
#
# $name            = Problem name.
# $time_limit      = Time limit per case.
# $memory_limit    = Memory limit per case.
# $points_per_test = Points per case.
# $number_of_tests = Number of tests case.
# $special_judge   = Special judge's file.
# $source          = Info about origin of the problem.
# }}}

$name            = "cadeiras"
$time_limit      = 1
$memory_limit    = 128
$source          = "Olimpiada Brasileira de Informatica 2009 - Fase 2 - Nível 2"

# tests {{{
$number_of_tests = 0
$tests           = []
1.upto 100 do |i|
   1.upto 100 do |t|
      fin = "tests/test#{i}/in#{t}"
      fou = "tests/test#{i}/out#{t}"
      if FileTest.exist?(fin)
         $tests << [{:in => fin, :out => fou}]
         $number_of_tests = $number_of_tests + 1
      end
   end
end
$points_per_test = 100.0 / $number_of_tests
# }}}
