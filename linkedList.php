<?php 

class ListNode {
	
	public $data = NULL;
	public $next = NULL;

	public function __construct(string $data = NULL) {
		$this->data = $data;
	}
}

class LinkedList {
	private $_firstNode = NULL;
	private $_totalNodes = 0;

	public function insert(string $data = NULL) {
		$newNode = new ListNode($data);

		if ($this->_firstNode === NULL) {
			$his->_firstNode = $newNode;
		} else {
			$currentNode = $this->_firstNode;
			while ($currentNode->next !== NULL) {
				$currentNode = $currentNode->next;
			}
			$currentNode->next = $newNode;
		}
		$this->_totalNodes++;
		return true;
	}

	public function insertAtFirst(string $data = NULL) {
		$newNode = new ListNode($data) {
			if ($_firstNode === NULL) {
				$this->firstNode = &$newNode;
			} else {
				$currentFirstNode = $this->_firstNode;
				$this->firstNode = &$newNode;
				$newNode->next = $currentFirstNode;
			}
			$this->_totalNodes++;
			return true;
		}
	}

	public function display() {
		echo "Total book titles: ".$this->_totalNode."\n";
		$curretNode = 
	}
}

?>