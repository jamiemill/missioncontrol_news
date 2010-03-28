
<?php echo $this->element('paging_info',array('plugin'=>'core')) ?>
<?php echo $this->element('paging',array('plugin'=>'core')) ?>

<div class="main">
	<?php foreach($data as $article) : ?>
		<h3><?php echo $article['NewsArticle']['headline'] ?></h3>
		<p><strong class="black"><?php echo $layout->formatOrEmpty('jS F y',$article['NewsArticle']['date']) ?></strong></p>
		<?php echo $article['NewsArticle']['content'] ?>
	<?php endforeach ?>

	<?php echo $this->element('paging',array('plugin'=>'core')) ?>
</div>