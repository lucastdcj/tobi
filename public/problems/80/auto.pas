program auto;

var
   i,n,paineis : longint;
   c	       : char;
begin	       
   readln(n);
   paineis:=0;
   for i:=1 to n do begin
      read(c);
      if (c='P') or (c='C') then paineis:=paineis+2
      else if c='A' then paineis:=paineis+1;
   end;
   writeln(paineis);
end.