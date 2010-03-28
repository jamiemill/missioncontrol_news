<?php echo $this->element('record_navigation', array('plugin'=>'core'))?>
<?php 
$html->addCrumb('News',array('controller'=>'news_articles','action'=>'index'));
$html->addCrumb($data['NewsArticle']['headline']);
?>
<?php echo $this->element('crumb_heading', array('plugin'=>'core'))?>

<div class="main_no_sidebar">
	<div class="box">
		<div class="box_head">
			<h2><?php echo $time->format('jS M Y',$data['NewsArticle']['date']) ?> : <?php echo $data['NewsArticle']['headline'] ?></h2>
		</div>
		<div class="box_content">
			<?php echo $data['NewsArticle']['content'] ?>
		</div>
	</div>
</div>