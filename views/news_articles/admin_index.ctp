<?php echo $this->element('record_navigation', array('plugin'=>'core'))?>
<?php 
$html->addCrumb('News');
?>
<?php echo $this->element('crumb_heading', array('plugin'=>'core'))?>

<div class="main_no_sidebar">
	<div class="box">
		<div class="box_head">
			<h2>All articles</h2>
		</div>
		<div class="box_content">
			<?php if(!empty($data)) : ?>
			<?php echo $this->element('paging_info',array('plugin'=>'core')) ?>
			<?php echo $this->element('paging',array('plugin'=>'core')) ?>
			<table class="admin_listing">
				<?php foreach($data as $article) : ?>
				<tr>
					<td><?php echo $html->link($article['NewsArticle']['headline'],array('admin'=>true,'controller'=>'news_articles','action'=>'view',$article['NewsArticle']['id'])) ?></td>
					<td><?php echo $time->format('jS M Y',$article['NewsArticle']['date']) ?></td>
					<td class="actions">
						<?php echo $nav->edit(array($article['NewsArticle']['id'])); ?> 
						<?php echo $nav->delete(array($article['NewsArticle']['id'])); ?> 
					</td>
				</tr>
				<?php endforeach ?> 
			</table>
			<?php endif ?> 
		</div>
	</div>
</div>