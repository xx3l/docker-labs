<style>
  pre { background: #ddd; margin: 10vmin; min-height: 50vmin; border: 1px dotted #888; padding: 2em; }
</style>
<pre>
<?php
$c1 = new mysqli('db-mysql','root','secret');
print " ... mysql version ".$c1->server_info."\n";
$c2 = pg_connect('host=db-pgsql user=postgres password=secret');
print " ... pgsql version ".pg_version($c2)['server']."\n";
$c3 = new Redis(['host' => 'db-redis']);
print " ... redis version ".$c3->info('server')['redis_version']."\n";
?>
</pre>
