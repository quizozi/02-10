<?php include('header.php')?>

<div class="container">
<div class="row"> 
<div class="col-sm-12 py-5">

<?php
$json = file_get_contents('http://api.open-notify.org/iss-now.json');
$position = json_decode($json,true);
?>

<h3>PHP</h3>

<p>Este lenguaje de programación se ejecuta <a href="https://es.wikipedia.org/wiki/Script_del_lado_del_servidor">del lado del servidor</a>, afectando al documento completo antes de que éste sea enviado al <a href="https://es.wikipedia.org/wiki/Cliente_(inform%C3%A1tica)">cliente</a>. Esta es su principal diferencia con <a href="https://developer.mozilla.org/es/docs/Web/JavaScript/Una_re-introducci%C3%B3n_a_JavaScript#Información_general">JavaScript</a>, que se ejecuta generalmente del <a href="https://es.wikipedia.org/wiki/Lado_del_cliente">lado del cliente</a>, afectando al <a href="https://developer.mozilla.org/es/docs/Referencia_DOM_de_Gecko/Introducci%C3%B3n#DOM_y_JavaScript">DOM</a>.</p>

<p>Como PHP se ejecuta <a href="https://es.wikipedia.org/wiki/Script_del_lado_del_servidor">del lado del servidor</a>: Nunca aparece al “ver código fuente”, ni existe una Consola de PHP en los navegadores. Por esta razón, no puedes hacer &quot;ingeniería inversa&quot; fácilmente, pero bien puedes apoyarte con consultas a <a href="http://stackoverflow.com/questions/tagged/php">Stackoverflow</a>, además del sitio con <a href="http://php.net/manual/es/langref.php">referencias oficiales de PHP</a>. Y si necesitas compartir tus trabajos con PHP, puedes usar servicios como <a href="http://codepad.org/">codepad</a>.</p>

<p>Para que se ejecute PHP en sus computadores, en esta clase <strong>deben tener instalado <a href="https://www.mamp.info/en/">MAMP</a></strong>. Este programa nos permite montar un servidor local, para trabajar con <strong>Apache</strong> (servidor HTTP), <strong>MySQL</strong> (sistema de gestión de bases de datos) y <strong>PHP</strong> (lenguaje de programación).</p>

<p>Para trabajar con PHP debemos usar documentos con extensión <code>*.php</code>, los que se pueden crear de la misma manera que se crean los documentos <code>*.html</code>: trabajando con cualquier editor de código.</p>

<p>Dentro de los documentos con extensión <code>*.php</code> tenemos que usar etiquetas de apertura y cierre particulares, que son <code>&lt;?php</code> y <code>?&gt;</code> (las instrucciones que estén entre estas etiquetas serán filtradas e interpretadas en el servidor.</p>

<p>Entre <code>&lt;?php</code> y <code>?&gt;</code> se pueden escribir una o varias instrucciones. Si se escriben varias, éstas deben separarse mediante punto y coma <code>;</code>. Y si necesitan escribir comentarios de una línea, deben anteponer un doble slash <code>//</code>. <a href="http://codepad.org/ZZXEWJXK">Por ejemplo</a>: </p>

<pre><code>&lt;?php 
//primero defino una variable
$inception = &quot;película escrita, producida y dirigida por Christopher Nolan&quot;;
//luego imprimo el contenido de la variable
echo $inception;
?&gt;
</code></pre>

<p>Entre las instrucciones podemos aprovechar las funciones internas (incluídas) de PHP; es muy dificil que exista alguien capaz de aprender de memoria todas las <code>funciones()</code> que ofrece este lenguaje de programación, pero en el <a href="http://php.net/manual/es/langref.php">sitio oficial de PHP</a>, y en <a href="http://stackoverflow.com/questions/tagged/php">varios lugares más</a>, se puede encontrar mucha ayuda.</p>

<hr/>

<h3>JSON</h3>

<p><a href="http://www.json.org/json-es.html" target="_blank">JSON (JavaScript Object Notation - Notación de Objetos de JavaScript)</a> es un formato ligero de intercambio de datos que es completamente independiente del lenguaje pero utiliza convenciones que son ampliamente conocidos por los programadores de la <a href="https://es.wikipedia.org/wiki/C_(lenguaje_de_programaci%C3%B3n)#Filosof.C3.ADa" target="_blank">familia de lenguajes C</a>, incluyendo C, C++, C#, Java, JavaScript, Perl, Python, y muchos otros.</p>

<p>¿Cómo se hace esta notación de objetos? Un objeto es un conjunto desordenado de pares nombre/valor. Un objeto comienza con <code>{</code> y termina con <code>}</code>. Cada nombre es seguido por <code>:</code> y los pares nombre/valor están separados por <code>,</code>. Un valor puede tomar la forma de un arreglo, comenzando con <code>[</code> y termina con <code>]</code>.</p>

<pre><code>{
  "estudiantes":[
    {"nombre":"John", "apellido":"Doe"},
    {"nombre":"Anna", "apellido":"Smith"},
    {"nombre":"Peter", "apellido":"Jones"}
  ]
}
</code>
</pre>

<p>Ahora, ¿cómo lee un JSON un PHP? Veámoslo a continuación. Primero pego un JSON:</p>

<pre><code><?php print_r($json)?></code></pre>

<p>Ahora veamos cómo lo intepreta PHP:</p>

<pre><code><?php print_r($position)?></code></pre>

</div>
</div>
</div>
<?php include('footer.php')?>
