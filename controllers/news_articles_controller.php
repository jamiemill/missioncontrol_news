<?php

class NewsArticlesController extends NewsAppController {

	var $layout = 'admin';
	
	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow(array('view','index','archive'));
	}
	
	function view($slug) {
		$result = $this->NewsArticle->findBySlug($slug);
		if(empty($result)) {
			$this->cakeError('error404');
			return;
		}
		$this->set('data', $result);
		
		$this->pageTitle = $result['NewsArticle']['headline'];
		
		if(Configure::read('News.layout')) {
			$this->layout = Configure::read('News.layout');
		} else {
			$this->layout = 'default';
		}
	}
	
	function index($year=null,$month=null) {

			if ($year && $month) {
				$this->paginate['conditions'] = array('NewsArticle.date >='=>$year.'-'.$month .'-1', 'NewsArticle.date <='=>$year.'-' .$month.'-31');
			}
			elseif ($year) {
				$this->paginate['conditions'] = array('NewsArticle.date >='=>$year.'-1-1', 'NewsArticle.date <='=>$year.'-12-31');
			}

		if(Configure::read('News.layout')) {
			$this->layout = Configure::read('News.layout');
		} else {
			$this->layout = 'default';
		}
		return parent::index();
	}
	
	function archive() {
		return $this->NewsArticle->archive();
	}
	
}

?>
