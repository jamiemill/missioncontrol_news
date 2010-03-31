<?php
class NewsArticle extends NewsAppModel {
	
	var $name = 'NewsArticle';
	
	var $actsAs = array('Core.Sluggable' => array('label' => 'headline','overwrite'=>true));
	
	var $order = array('NewsArticle.date'=>'desc');

	var $validate = array(
		'headline' => array(
			'rule' => array('notEmpty')
	 	)
	);
	
	function archive() {
		return $this->find('all',array('fields'=>array('substring(NewsArticle.date,1,7) as yearmonth','count(id) as archive_count'),'group'=>'yearmonth'));
	}
	
	// function months() {
	// 	return array(01=>'Jan',02=>'Feb',01=>'Mar',01=>'Apr',01=>'May',01=>'Jun',01=>'Jul',01=>'Aug',01=>'Sep','Oct','Nov','Dec');
	// }
}


?>
