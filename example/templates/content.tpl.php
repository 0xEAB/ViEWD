<p>
  <strong>ViEWD</strong> is a minimalist template engine for PHP.
  <br/>Since it relies on PHP's built-in standard-functionality and doesn't use
  any other special language, it's considered a <em>native</em> template engine.
</p>




<h2>Usage example</h2>


<h3 class="filename">example.tpl.php</h3>
<pre><code><?php
  // of course, you can call any PHP functions inside a template
  echo htmlentities(file_get_contents(
      __DIR__ . '/example.tpl.php'));
?></code></pre>


<h3 class="filename">embedded-example.php</h3>
<pre><code><?=
  htmlentities(file_get_contents(
         __DIR__ . '/../embedded-example.php'));
?></code></pre>


<h3 class="result">Result <a href="embedded-example.php" target="_blank">Open in new tab</a></h3>
<iframe src="embedded-example.php">
</iframe>

