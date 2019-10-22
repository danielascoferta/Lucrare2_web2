<?
class Masiv{
//    Adaugare numere in masiv
	public function addNumber ($element) {
		$_SESSION['myArray'][] = $element;
	}

	//Afisarea nr cu id 3
	public function getNumber ($index) {
		if(!array_key_exists($index, $_SESSION['myArray'])){
			echo 'Elementul cu id ' . $index . ' nu exista in lista';
		}else {
			return $_SESSION['myArray'][$index];
		}
	}

	//Afisarea tuturor nr adaugate
	public function getAllNumbers () {
		return $_SESSION['myArray'];
	}

	//Sterge nr cu id 2
	public function deleteNumber ($index) {
		if(array_key_exists($index, $_SESSION['myArray'])){
			unset($_SESSION['myArray'][$index]);
		}else {
			echo 'Elementul cu id ' . $index . ' nu exista in lista';
		}
	}		

}
?>