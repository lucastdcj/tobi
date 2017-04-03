program minicalc;
var mdc,max_calc,dividendo,divisor : integer;

function max_div_comum(dividendo,divisor :integer ): integer;
begin
   if divisor=0 then
      max_div_comum:=dividendo
   else if (dividendo<divisor) then
      max_div_comum:=max_div_comum(divisor,dividendo)
   else
      max_div_comum:=max_div_comum(divisor,dividendo mod divisor);
end;

begin
   readln(max_calc,dividendo,divisor);
   mdc:=max_div_comum(dividendo,divisor);
   dividendo:=dividendo div mdc;
   divisor:=divisor div mdc;
   if (divisor>max_calc) or (dividendo>max_calc) then
      writeln('IMPOSSIVEL')
   else
      writeln(dividendo, ' ', divisor);
end.