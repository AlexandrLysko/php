<?php
/*1. Функции для работы с массивами 
*1) array_combine, array_unique 
2) array_count_values, count 
3) array_diff_key, in_array 
4) array_intersect_key, range 
5) array_key_exists, compact 
6) array_intersect, array_merge 
7) array_multisort 
8) array_pop, array_push 
9) array_rand, shuffle 
10) array_replace, array_chunk 
11) array_reverse, array_search 
12) array_shift, array_unshift 
13) array_slice, array_splice 

2. Дан массив [3, 1, 6, 0, 4, 5]. 
С помощью цикла foreach найдите сумму квадратов элементов этого массива. 
Результат вывести на экран; 
*/

$arr = [3, 1, 6, 0, 4, 5];
foreach($arr as $elem) {
	$sum = ($elem*2);
	$result = $result + $sum;
	
} echo $result."<br>";

/*
3. Вывести таблицу умножения чисел до 10 с помощью двух циклов for (вложенный цикл); 
*/

for ($i = 1; $i <=10; $i++) {
		echo "<br>";
	for ($j = 1; $j <=10; $j++) {
		echo "<div style='float:left; width: 30px;'>". $j * $i."</div>";
	
	}

}


/*
4. Нарисуйте треугольник из символов *. Высота треугольника равна 15. 
*/

/*
5. Создать массив из дней недели. С помощью цикла foreach выведите все дни недели, <br> 
а текущий день выведите жирным. Текущий день можно получить с помощью функции date. Название дней выводить по-русски 
*/

/*
6. Вывести все числа, меньше 30, у которых есть хотя бы одна цифра 3 и которые не делятся на 5. 
Посмотрите функцию strpos! 
*/

?>