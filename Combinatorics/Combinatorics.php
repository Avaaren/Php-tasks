<?php 

class Combinatorics {

    public $string;
    public $keys = "";
    public $stringLength;
    public $combinationLength;
    public $counter;

    function __construct($string, $combinationLength) {
        $this->string = $string;
        $this->stringLength = strlen($string);
        # Выбрасываем исключение если строка пуста
        if ( $this->stringLength == 0 ) {
            throw new Exception('Пустая строка');
        }
        for ($i = 0; $i < $this->stringLength; $i++) {
            $this->keys .= $i;
        }
        if ( $combinationLength > $this->stringLength || $combinationLength <= 0) {
            throw new Exception('Неверно задана длина размещений');
        }
        $this->combinationLength = $combinationLength;
        $this->counter = 0;
    }

    public function factorial($number) {
        if ($number == 0) {
            return 1;
        }
        return $this->factorial($number - 1) * $number;
    }
    public function checkNumberOfCombinations() {
        $numberOfCombinations = $this->factorial($this->stringLength) / $this->factorial(($this->stringLength - $this->combinationLength));
        echo "Всего размещений по формуле = $numberOfCombinations <br>";
    }
    # Функция меняющая элементы местами
    function swap(&$string, $i, $j) {
        $tmp = $string[$i];
        $string[$i] = $string[$j];
        $string[$j] = $tmp;
    }
    # Функция распечатывающая текущую последовательность
    public function printComb() {
        for ($i = 0; $i < $this->combinationLength; $i++){
            echo $this->string[$this->keys[$i]];
        }
        echo "<br>";
    }
    # Функция преобразующая текущую последовательность в следующую
    public function makeNextCombination() {
        # Счетчик для подсчета перестановок
        $this->counter++;
        do {
            # Берем предпоследний элемент
            $j = $this->stringLength - 2;
            # Идем от конца до начала беря в рассчет то, что конечная последовательность чисел 
            # равна отсортированной в порядке убывания (для 1 2 3 -> 3 2 1)
            while ( ($j != -1) && ($this->keys[$j] >= $this->keys[$j + 1]) ) {
                $j--;
            }
            # Если дошли до конца и условие не нарушилось то перестановок нету
            if ( $j == -1 ) {
                return false;
            }
            # Когда вышли из цикла, то у нас j имеет индекс нарушенной последовательности
            $lastElement = $this->stringLength - 1;
            # Ищем первое число с конца которое больше текущего
            while( $this->keys[$j] >= $this->keys[$lastElement] ) {
                $lastElement--;
            }
            # И меняем местами
            $this->swap($this->keys, $j, $lastElement);
            # После чего сортируем все что справа по возрастанию
            $leftElement = $j + 1;
            $lastElement = $this->stringLength - 1;
            while ($leftElement < $lastElement) {
                $this->swap($this->keys, $leftElement++, $lastElement--);
            }
        }
        while ($j > $this->combinationLength - 1);
        return true;
    }
    # Функция выводящая все комбинации
    public function comb() {
        $this->printComb();
        while ( $this->makeNextCombination() ) {
            $this->printComb();
        }
        echo "Всего размещений = ". $this->counter . "<br>";
        $this->checkNumberOfCombinations();
    }
}
try {
    $ex = new Combinatorics("123", 2);
    $ex->comb();
}
catch(Exception $e) {
    echo $e->getMessage();
}



