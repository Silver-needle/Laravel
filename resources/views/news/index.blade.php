<h2>News List</h2> <br/>
<?php foreach($newsList as $news): ?>
<div>
  <h4><a href="<?=route('news.show', [$news['id']])?>"><?=$news['title']?></a></h4>
  <br>
  <img src="<?=$news['image']?>">
  <p><em><?=$news['author']?></em> &nbsp; (<?=$news['created_at']?>)</p>
  <p><?=$news['description']?></p>
</div><hr /><br>
<?php endforeach; ?>