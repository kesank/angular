<?php $db= new App\Database('post');
$datas=$db->query('SELECT  * FROM post');

/* var_dump($datas);
 */?>

<ul>
<?php foreach($datas as $post): ?>

  <li><?= $post->id; ?>:: <?= $post->nom; ?></li>


<?php endforeach; ?>


</ul>