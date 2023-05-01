<?php
    $source = [
	[
		"name" => "Terry Medhurst", 
		"age" => 50, 
		"university" => "Capitol University" 
	], 
	[
		"name" => "Sheldon Quigley", 
		"age" => 28, 
		"university" => "Stavropol State Technical University" 
	], 
	[
		"name" => "Terrill Hills", 
		"age" => 38, 
		"university" => "University of Cagayan Valley" 
	], 
	[
		"name" => "Miles Cummerata", 
		"age" => 49, 
		"university" => "Shenyang Pharmaceutical University" 
	], 
	[
		"name" => "Mavis Schultz", 
		"age" => 38, 
		"university" => "Estonian University of Life Sciences" 
	], 
	[
		"name" => "Alison Reichert", 
		"age" => 21, 
		"university" => "Universidade da Beira Interior" 
	], 
	[
		"name" => "Oleta Abbott", 
		"age" => 31, 
		"university" => "Institut Sains dan Teknologi Al Kamal" 
	], 
	[
		"name" => "Ewell Mueller", 
		"age" => 29, 
		"university" => "Wenzhou Medical College" 
	], 
	[
		"name" => "Demetrius Corkery", 
		"age" => 22, 
		"university" => "Nanjing University of Economics" 
	], 
	[
		"name" => "Eleanora Price", 
		"age" => 37, 
		"university" => "Melaka City Polytechnic" 
	], 
	[
		"name" => "Marcel Jones", 
		"age" => 39, 
		"university" => "Hodeidah University" 
	], 
	[
		"name" => "Assunta Rath", 
		"age" => 42, 
		"university" => "Kiev Slavonic University" 
	], 
	[
		"name" => "Trace Douglas", 
		"age" => 26, 
		"university" => "Dallas Christian College" 
	], 
	[
		"name" => "Enoch Lynch", 
		"age" => 21, 
		"university" => "University of Sri Jayawardenapura" 
	], 
	[
		"name" => "Jeanne Halvorson", 
		"age" => 26, 
		"university" => "Donghua University, Shanghai" 
	], 
	[
		"name" => "Trycia Fadel", 
		"age" => 41, 
		"university" => "Technical University of Mining and Metallurgy Ostrava" 
	], 
	[
		"name" => "Bradford Prohaska", 
		"age" => 43, 
		"university" => "Technical University of Mining and Metallurgy Ostrava" 
	], 
	[
		"name" => "Arely Skiles", 
		"age" => 42, 
		"university" => "Universidade Estadual do Ceará" 
	], 
	[
		"name" => "Gust Purdy", 
		"age" => 46, 
		"university" => "Xinjiang University" 
	], 
	[
		"name" => "Lenna Renner", 
		"age" => 41, 
		"university" => "Moraine Valley Community College" 
	], 
	[
		"name" => "Doyle Ernser", 
		"age" => 23, 
		"university" => "Nanjing University of Traditional Chinese Medicine" 
	], 
	[
		"name" => "Tressa Weber", 
		"age" => 41, 
		"university" => "Universitat Rámon Llull" 
	], 
	[
		"name" => "Felicity O'Reilly", 
		"age" => 46, 
		"university" => "University of lloilo" 
	], 
	[
		"name" => "Jocelyn Schuster", 
		"age" => 19, 
		"university" => "Bashkir State Medical University" 
	], 
	[
		"name" => "Edwina Ernser", 
		"age" => 21, 
		"university" => "Wuhan University of Technology" 
	], 
	[
		"name" => "Griffin Braun", 
		"age" => 35, 
		"university" => "Universitas Bojonegoro" 
	], 
	[
		"name" => "Piper Schowalter", 
		"age" => 47, 
		"university" => "Sultanah Bahiyah Polytechnic" 
	], 
	[
		"name" => "Kody Terry", 
		"age" => 28, 
		"university" => "Science University of Tokyo" 
	], 
	[
		"name" => "Macy Greenfelder", 
		"age" => 45, 
		"university" => "Fuji Women's College" 
	], 
	[
		"name" => "Maurine Stracke", 
		"age" => 31, 
		"university" => "Poznan School of Banking" 
	] 
];

echo "jumlah data adalah ", count($source);
echo "<br>";
echo "<br>";

foreach($source as $i => $sc){
	$i++;
	echo $i, ". Saya ", $sc["name"], " berumur ", $sc["age"], ". Saya berkuliah di ", $sc["university"];
	echo "<br>";
	$i++;
}

echo "<br>";
echo "<br>";
echo "Umur < 30";
echo "<br>";
echo "<br>";

foreach($source as $i => $sc){
	if($sc["age"] < 30){
		echo $i, ". Saya ", $sc["name"], " berumur ", $sc["age"], ". Saya berkuliah di ", $sc["university"];
		echo "<br>";
		$i++;
	}
}

$sum = 0;
foreach($source as $sc){
	$sum = $sum + $sc["age"];
}

$avg = $sum / count($source);

echo "<br>";
echo "<br>";
echo "Rata rata umur nya adalah ", $avg;
echo "<br>";
echo "<br>";

$total_less = 0;
$total_more = 0;
foreach($source as $sc){
	if($sc["age"] <= 30){
		$total_less = $total_less + $sc["age"] + 7;
	}else if($sc["age"] >= 30){
		$total_more = $total_more + $sc["age"] + 10;
	}
}

echo "Hasil pengolahan umur <= 30 adalah $total_less";
echo "<br>";
echo "Hasil pengolahan umur > 30 adalah $total_more";
echo "<br>";
echo "<br>";






?>