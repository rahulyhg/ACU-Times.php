<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Poll
 *
 * @author marcw
 */
class Poll extends EntityArticle implements iCRUD {

	protected $arrChoices = array(); // an array of poll choices

	const DB_TABLE_NAME = "poll";

	function __construct() {
		$this->__init();
	}

	public function __init() {
		parent::__init();
		$this->choices = array();
	}

	protected function fillFromAssoc($DBrow) {
		parent::fillFromAssoc($DBrow);
	}

	protected function bindParamClass($stmt) {
		parent::bindParamClass($stmt);
	}

//==================================================CRUD===================================================

	public function create() {
		$saved = $this->Do_comand_Update_Creat("INSERT INTO " . static::DB_TABLE_NAME . "
				(	titleEnglish, 
					titleArabic, 
					display, 
					writerID
				) VALUES ( 
					:titleEnglish, 
					:titleArabic, 
					:display, 
					:writerID
				)", FALSE, TRUE);
		if ($saved) {
			foreach ($this->arrChoices as $value) {
				if (FALSE == $value->create()) {
					return FALSE;
				}
			}
		}
		return $saved;
	}

	public function update() {
		$saved = $this->Do_comand_Update_Creat("UPDATE " . static::DB_TABLE_NAME . " SET 
					titleEnglish = :titleEnglish, 
					titleArabic = :titleArabic, 
					display = :display, 
					writerID = :writerID
				WHERE id=:id", TRUE, FALSE);
		if ($saved) {
			foreach ($this->arrChoices as $value) {
				if (FALSE == $value->create()) {
					return FALSE;
				}
			}
		}
		return $saved;
	}

//===================================================SET===================================================
	public function addOrUpdateChoice(PollChoice $Choice) {
		if ($Choice->isValidChoice()) {
			foreach ($this->arrChoices as &$value) {
				if ($value->id == $Choice->id) {
					$value = $Choice;
					return TRUE;
				}
			}
			$Choice->setPollID($this->id);
			array_push($this->arrChoices, $Choice);
			return TRUE;
		}
		return False;
	}

	public function clearAllOption() {
		$this->arrChoices = array();
		return TRUE;
	}

	public function setDisplayFromSession(Access $Accses) {
		return $this->doit_setDisplayFromSession($Accses->getGallery());
	}

//===================================================GET===================================================
	public function getArrChoices() {
		if (!isset($this->arrChoices[0])) {
			$this->arrChoices = PollChoice::readAllrelatedPoll($this->id);
		}
		return $this->arrChoices;
	}

	public function hasAccsesToModify(Access $Accses) {
		return $this->hasAccsesToModify_private($Accses->getPoll());
	}

	public function isValidPoll() {
		return count($this->arrChoices) >= 2;
	}

	public function getTotalClicks() {
		$total = 0;
		foreach ($this->arrChoices as $value) {
			$total+=$value->getVotes();
		}
		return $total;
	}

}
