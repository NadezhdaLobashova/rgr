<html>
<head>
</head>
<body>
<?php
	$flats = [
		'Однокомнатные' => [
			[
				'address' => 'Вилюйская, 5',
				'cost' => 2190000,
				'areaTotal' => 47,
				'areaLive' => 15,
				'areaKitchen' => 11,
				'photos' => [
					'http://cdn.n1.ru/cache/realty/photo/52dc0385b421b5f67cb8f7a970bd0d7a_1200_800.jpg',
					'http://cdn.n1.ru/cache/realty/photo/8b54efe6c16e78d8aca5b21bc4250e6f_1200_800.jpg'
				]
			],
			[
				'address' => 'Дуси Ковальчук, 238',
				'cost' => 2750000,
				'areaTotal' => 40,
				'areaLive' => 15,
				'areaKitchen' => 12,
				'photos' => [
					'http://cdn.n1.ru/cache/realty/photo/48efa8f6e915699aa161fc02742b9f1f_1200_800.jpg',
					'http://cdn.n1.ru/cache/realty/photo/7c50133db0add15b8d7ff50aa8138b42_1200_800.jpg'
				]
			],
			[
				'address' => 'Зорге, 229\3',
				'cost' => 960000,
				'areaTotal' => 31,
				'areaLive' => 18,
				'areaKitchen' => 0,
				'photos' => [
				]
			]
		],
		'Двухкомнатные' => [
			[
				'address' => 'Забалуева, 84',
				'cost' => 1385000,
				'areaTotal' => 41,
				'areaLive' => 23,
				'areaKitchen' => 4,
				'photos' => [
				]
			],
			[
				'address' => 'Петухова, 156',
				'cost' => 2670000,
				'areaTotal' => 56,
				'areaLive' => 25,
				'areaKitchen' => 10,
				'photos' => [
					'http://cdn.n1.ru/cache/realty/photo/a6b5fa7dc66fe26ba7fc34bb5a409ba5_1200_800.jpg'
				]
			]
		]
	];
?> 
<?php
	foreach( $flats as $oneRooms => $flat) {
	echo '<div class="oneRooms">'.$oneRooms."</div>";
		foreach ($flat as $date ){ ?>
			<div class="flat">
				<div class="dateItem"> <?php
					if (isset($date['address'])) {
						echo " <div class='date'> Адрес: </div> <div class='value'>" .$date['address']."</div>" ;
					}
					if (isset($date['cost'])) {
						echo " <div class='date'> Цена: </div> <div class='value'>" .number_format($date['cost'], 0, ',', ' ')." руб.</div>" ;
					}
					if (isset($date['areaTotal'])) {
						echo " <div class='date'> Общая площадь: </div> <div class='value'>" .htmlspecialchars($date['areaTotal'])." м^2.</div>" ;
					}
					if (isset($date['areaLive'])) {
						echo " <div class='date'> Жилая площадь : </div> <div class='value'>" .htmlspecialchars($date['areaLive'])." м^2.</div>" ;
					}
					if (isset($date['areaKitchen'])) {
						echo " <div class='date'> Площадь кухни: </div> <div class='value'>" .htmlspecialchars($date['areaKitchen'])." м^2.</div>"; 
					} ?>
				</div>	
				<div class="photos"> <?php
					if(isset($date['photos']['0'] )){
							echo "<img class='photo' src='".$date['photos']['0']. "'>" ;
						} 
						if (isset($date['photos']['1'] )){
							echo "<img class='photo' src='".$date['photos']['1']."' >"; 
						} ?>
				</div> 
			</div> <?php
		 echo "<hr>" ;
		 } 
	}	
	 ?>	
	
	
<style type="text/css">
.oneRooms{
	font-size: 36px;
	text-align: center;
	font-weight: bold;
	padding-top: 10px;
	color: #663366;
	background-color: #CCFFCC;
}

 div.dateItem{
	float: left;
	width: 600px;
 }
 .flat{
	padding-left: 20px;
	width: 100%;
	overflow: auto;
	margin:10px;
	float: left;
 }
 .date {
	float: left;
	padding-top: 7px;
	padding-left: 3px;
	width: 200px;
	font-weight: bold;
	color: MidnightBlue; 
 }
 .value{
	padding-top: 7px;
	font-size: 20px;
	color: #663366;
 }
 img.photo {
	height: 170px;
	margin: 5px 5px 5px 0px;	
 }
 div.photos{ 
	float: left;
	width: 500px;
 } 
	
</style>
</body>
</html>