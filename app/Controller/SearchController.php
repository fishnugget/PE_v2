<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */

####TESTING
/**
* Handles multidimentional array sorting by a key (not recursive)
*
*
*/
class array_sorter
{
    var $skey = false;
    var $sarray = false;
    var $sasc = true;

    /**
    * Constructor
    *
    * @access public
    * @param mixed $array array to sort
    * @param string $key array key to sort by
    * @param boolean $asc sort order (ascending or descending)
    */
    function array_sorter(&$array, $key, $asc=true)
    {
        $this->sarray = $array;
        $this->skey = $key;
        $this->sasc = $asc;
    }

    /**
    * Sort method
    *
    * @access public
    * @param boolean $remap if true reindex the array to rewrite indexes
    */
    function sortit($remap=true)
    {
        $array = &$this->sarray;
        uksort($array, array($this, "_as_cmp"));
        if ($remap)
        {
            $tmp = array();
            while (list($id, $data) = each($array))
                $tmp[] = $data;
            return $tmp;
        }
        return $array;
    }

    /**
    * Custom sort function
    *
    * @access private
    * @param mixed $a an array entry
    * @param mixed $b an array entry
    */
    function _as_cmp($a, $b)
    {
        //since uksort will pass here only indexes get real values from our array
        if (!is_array($a) && !is_array($b))
        {
            $a = $this->sarray[$a][$this->skey];
            $b = $this->sarray[$b][$this->skey];
        }

        //if string - use string comparision
        if (!ctype_digit($a) && !ctype_digit($b))
        {
            if ($this->sasc)
                return strcasecmp($a, $b);
            else
                return strcasecmp($b, $a);
        }
        else
        {
            if (intval($a) == intval($b))
                return 0;

            if ($this->sasc)
                return (intval($a) > intval($b)) ? -1 : 1;
            else
                return (intval($a) > intval($b)) ? 1 : -1;
        }
    }

}//end of class
####TESTING
class SearchController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Search';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();
	public $components = array('Search');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
		public function beforeFilter(){
		parent::beforeFilter();
//$this->request->data = $Sanitize->stripAll($this->request->data);
		if($this->action == 'index') {
         $this->disableCache();
     }
		}
		/**
 * convert method
 *
 * @return void
 */
	public function aaiaconvert($linecode) {
		$this->loadModel("Linecard");
		$options['conditions'] = array(
			'line' => $linecode
		);
		$new_code = $this->Linecard->find('first', $options);
		if($new_code){
			return $new_code['Linecard']['dci_line'];
		}else{
			return "NO_DCI";
		}
		exit();
	}
	public function removeSearchItem(){
		unset($search['feature_content']['|']);
	}
	public function quickOrder(){
		//$this->layout = 'blank';
		if((empty($this->request->data['linecode'])) || ($this->request->data['linecode']=="Line") || ($this->request->data['partnumber']=="Part#") || (empty($this->request->data['partnumber']))){ $this->Session->setFlash(__("Please enter line &amp; part# to search"), 'default', array('class' => 'failure'));
		return $this->redirect('/search');
		}
		if(!empty($this->request->data['linecode']) && $this->request->data['linecode']!=="Line"){
					$data['partnumber'] = $this->request->data['linecode'].$this->request->data['partnumber'];
		}else{$data['partnumber'] = $this->request->data['partnumber'];}
		$data['login'] = $this->user['BS'][0];
		$search_results = $this->Search->search($data);
		//$this->set('results', $results->DR[0]);
		$full_part = $data['partnumber'];

			$data['login']		= $this->user['BS'][0];//$this->request->data['hdnb2b'];

			//$full_part = $key;

			$search_results = $this->Search->search($data);

			if(!empty($search_results->DR[0][12])){

					$Jobber = $search_results->DR[0][12];

					}else if(!empty($part[11])){ $Jobber = $search_results->DR[0][11];

					}else{ $Jobber = 'N/A'; };

			if($full_part){

			    		$search_results->DR[0][1] = substr($full_part,0,3);

			    	}
		$last=$this->Session->read('search');
		$previous=count($last);
		//if($last[0]){
		//debug(get_defined_vars());
		$next=($previous - 1 + 1);
	if($previous){
		if(!isset($search_results->DR[0][9])){
			$this->Session->setFlash(__("Your search for part# ".$data['partnumber']." returned no results.<br> Please check part# and retry."), 'default', array('class' => 'failure'));
			$this->redirect('/search');
			exit;}
		$last[$next] = array(

					'FullPart' => $full_part,

					'Line' => $search_results->DR[0][1],

					'AAIA' =>$this->requestAction('/search/aaiaconvert', array(

						'pass' => array($search_results->DR[0][1]))),

					'PartNumber' => $search_results->DR[0][2],

					'Description' => $search_results->DR[0][5],

					'QtyAvailable' => $search_results->DR[0][6],

					'Retail' => $search_results->DR[0][7],

					'YourPrice' => $search_results->DR[0][9],

					'Jobber' => $Jobber);
					$this->Session->write('search', $last);

				    $this->set('results', $last);
					$this->redirect('/users/members');
					//exit;
		}else{
		$results[0] = array(

					'FullPart' => $full_part,

					'Line' => $search_results->DR[0][1],

					'AAIA' =>$this->requestAction('/search/aaiaconvert', array(

						'pass' => array($search_results->DR[0][1]))),

					'PartNumber' => $search_results->DR[0][2],

					'Description' => $search_results->DR[0][5],

					'QtyAvailable' => $search_results->DR[0][6],

					'Retail' => $search_results->DR[0][7],

					'YourPrice' => $search_results->DR[0][9],

					'Jobber' => $Jobber);


			if($results && $results[0]['PartNumber'] !== ''){

			    	$this->Session->write('search', $results);

				    $this->set('results', $results);
					$this->redirect('/users/members');
			}}

	}
	public function index(){
		if(isset($_GET['clear'])){$this->Session->delete('results');$this->Session->delete('search');
		$this->redirect('/users/members');}

		$CartEmpty=$this->Session->read('CartEmpty');
		if($CartEmpty===1){$this->Session->setFlash(__("Your cart is empty."), 'default', array('class' => 'failure'));}
		$results = false;
		$full_part = false;
		//MJ added 11-7-13 for 12v Category lookup
		$category=0;
		if(empty($this->request->data) && !empty($_GET['cat'])){
			$this->request->data['partnumber']=$_GET['cat'];
			$category=1;
		}
		if(!empty($this->request->data)){
			if(!empty($this->request->data['partnumber'])&& $this->request->data['partnumber']!=="Part#"){
				$data = array();
				if(!empty($this->request->data['linecode']) && $this->request->data['linecode']!=="Line"){
					$data['partnumber'] = $this->request->data['linecode'].$this->request->data['partnumber'];
					$full_part = true;
				}else{
					$data['partnumber'] = $this->request->data['partnumber'];
				}
				//MJ added 11-5-13 show part# searched
				//$this->set('lastPartSearch', $data['partnumber']);
				$this->Session->write('lastSearch', $data['partnumber']);
				$data['login'] = $this->user['BS'][0];
				$results = $this->Search->search($data);
				//MJ added 11-7-13 to sort results
				$i=0;
				if(!empty($results->DR[0][2])):
				foreach ($results->DR as $key => $part){
					if($category==1 && $part[6] <=0){continue;}
					$SortedResults[$i]['FullPart'] = $part[0];
					$SortedResults[$i]['Line'] = $part[1];
					$SortedResults[$i]['AAIA'] = $this->aaiaconvert($part[1]);
					$SortedResults[$i]['PartNumber'] = $part[2];
					//$SortedResults[$i]['AnotherDescription???'] = $part[3];
					$SortedResults[$i]['Description'] = $part[5];
					$SortedResults[$i]['QtyAvailable'] = $part[6];
					$SortedResults[$i]['Retail'] = $part[7];
					$SortedResults[$i]['YourPrice'] = $part[9];
					if(!empty($part[12])){ $SortedResults[$i]['Jobber'] = $part[12];
					}else if(!empty($part[11])){ $SortedResults[$i]['Jobber'] = $part[11];
					}else{ $SortedResults[$i]['Jobber'] = 'N/A'; };
					$i++;
				}
				endif;

/***********
Attempt to display alternate parts
mainframe does not send Qty on hand
				if(!empty($results->A[0][2])):
				$i=0; //debug($results->A);
				foreach ($results->A as $key => $part){
					if($category==1 && $part[6] <=0){continue;}
					$AltResults[$i]['FullPart'] = $part[0];
					$AltResults[$i]['Line'] = $part[1];
					$AltResults[$i]['AAIA'] = $this->aaiaconvert($part[1]);
					$AltResults[$i]['PartNumber'] = $part[2];
					//$SortedResults[$i]['AnotherDescription???'] = $part[3];
					$AltResults[$i]['Description'] = $part[5];
					$AltResults[$i]['QtyAvailable'] = $part[6];
					$AltResults[$i]['Retail'] = $part[7];
					$AltResults[$i]['YourPrice'] = $part[9];
					if(!empty($part[12])){ $AltResults[$i]['Jobber'] = $part[12];
					}else if(!empty($part[11])){ $AltResults[$i]['Jobber'] = $part[11];
					}else{ $AltResults[$i]['Jobber'] = 'N/A'; };
					$i++;
				}
				$this->set('AltResults', $AltResults);
				endif;
####TESTING*/

 function multi_sort(&$array, $key, $asc=true)
    {
        $sorter = new array_sorter($array, $key, $asc);
        return $sorter->sortit();
    }
    //sort by Line A-Z
	if(!empty($SortedResults)):
    $SortedResults = multi_sort($SortedResults, "Line", true);
	//$SortedResults = array_slice($SortedResults, 0, 50);
	/*
	$this->paginate = array('conditions'=>array('visible'=>1),
'limit'=>'20');
    $SortedResults = $this->paginate($SortedResults));
	*/
	endif;

####END TESTING
				//$this->set('SortedResults', $SortedResults);
				//$this->Session->write('search', $SortedResults);

			    if(isset($SortedResults) && $SortedResults[0]['FullPart'] !== ''){
			    	if($full_part){
			    		$SortedResults[0]['Line'] = substr($SortedResults[0]['FullPart'],0,3);
			    	}
			    	$this->Session->write('search', $SortedResults);
				    $this->set('SortedResults', $SortedResults);
			    }else{
			    	$this->Session->write('search', false);
				    $this->Session->setFlash(__("Your search for part# ".$data['partnumber']." returned no results.<br> Please check part# and retry."), 'default', array('class' => 'failure'));
			    }

			}else{
				$this->Session->setFlash(__("Please enter a part# to search"), 'default', array('class' => 'failure'));
			}

		}
		$last_search = $this->Session->read('search');
		if($last_search){
			$this->set('results', $last_search);
		}

	}

	function auto_complete() {
		$this->loadModel("Linecard");
        $terms = $this->Linecard->find('all', array(
		'conditions' => array(
        'OR' => array(
            array(
                'Linecard.line LIKE' => $this->params['url']['autoCompleteText'].'%' ,
            ),
            array(
                'Linecard.name LIKE' => $this->params['url']['autoCompleteText'].'%'
            ),
        )
    ),
            'fields' => array('line'),
            'limit' => 5,
            'recursive'=>-1,
        ));
        $terms = Set::Extract($terms,'{n}.Linecard.line');
        $this->set('terms', $terms);
        $this->layout = 'ajax';
    }
	function autocomplete() {
		$this->loadModel("Linecard");
        $terms = $this->Linecard->find('all', array(
            'conditions' => array(
        'OR' => array(
            array(
                'Linecard.line LIKE' => $this->params['url']['q'].'%' ,
            ),
            array(
                'Linecard.name LIKE' => $this->params['url']['q'].'%'
            ),
        )
    ),
            'fields' => array('line','name'),
           // 'limit' => 5,
            'recursive'=>-1,
        ));

        $terms = Set::Extract($terms,'{n}.Linecard');
        $this->set('terms', $terms);
        $this->layout = 'ajax';
    }

	public function ymm($iframe = false){
	//$this->layout = 'ymm';
	if($iframe){
		exit();
	}
	}
}
