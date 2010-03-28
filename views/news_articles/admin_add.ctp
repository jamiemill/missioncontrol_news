<?php 
$html->addCrumb('News',array('controller'=>'news_articles','action'=>'index'));
$html->addCrumb('add');
?>
<?php echo $this->element('crumb_heading', array('plugin'=>'core'))?>

<div class="main_no_sidebar">
	<div class="box">
		<div class="box_head">
			<h2>Add article</h2>
		</div>
		<div class="box_content">
			<?php echo $form->create('NewsArticle') ?>
				<?php echo $form->input('date') ?>
				<?php echo $form->input('headline') ?>
				<?php echo $form->input('content', array('class'=>'tinymce')) ?>
				<?php echo $form->submit('save') ?>
			<?php echo $form->end() ?> 
		</div>
	</div>
</div>
