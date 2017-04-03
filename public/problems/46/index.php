<h1> Solução </h1>
<h2> Explicação </h2>
<b> Autor: </b> Gabriel Duarte
<iframe width="560" height="315" src="https://www.youtube.com/embed/YT7hVrWCgug" frameborder="0" allowfullscreen></iframe>

<br />
<h2> Código </h2>
  <pre class="prettyprint">

    <?php echo htmlspecialchars('
    #include <cstdio>

    int main() {
      int a, b;
      scanf(" %d %d", &a, &b);
      printf("%d\n",a - b);
      return 0;
    }
    ');?>   
  </pre>
 <script src="http://olimpiada.ic.unicamp.br/tobi/public/highlighter/prettify.js"></script>
  <script>prettyPrint();</script>

