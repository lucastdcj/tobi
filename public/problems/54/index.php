<h1> Solução </h1>

<h2> Explicação </h2>
<b> Autor: </b> Gabriel Duarte
<iframe width="560" height="315" src="https://www.youtube.com/embed/0ucGfbvAkRc" frameborder="0" allowfullscreen></iframe>

<h2> Código </h2>
 <pre class="prettyprint">

    <?php echo htmlspecialchars('
     #include <cstdio>

     int main() {
       int b, a;
       int custo_por_km, valor_pedagio;
       scanf(" %d %d %d %d", &a, &b, &custo_por_km, &valor_pedagio);
       printf("%d\n",(a/b)*valor_pedagio + a*custo_por_km);
       return 0;
    }
    ');?>   
  </pre>
 <script src="http://olimpiada.ic.unicamp.br/tobi/public/highlighter/prettify.js"></script>
  <script>prettyPrint();</script>

