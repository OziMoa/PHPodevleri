<?php 

if (isset($_POST["number"])) { 
	$number = $_POST["number"]; // input alanına girilen değer bu kısma iletilir
	if($number == ""){  // gönderilen değeri $number değiskene atadıkdan sonra bosmu dolumu kontrol edilir
		echo "Lütfen Bir Sayı Girin <br>";
		echo "<strong> Sayı Girmeniz İçin Geri Yönlendiriyorum. </strong>";
		header('Refresh:2 ; URL=index.php'); // gönderilen değer bos ise bir önceki sayfa yönlendirir.
	}else{

		if ($number % 3 == 0) { // $number değiskene gelen değer 3'e tam bölünüyormu kontrol edilir.
			echo "$number sayısı 3 ile tam bölünüyor";
			header('Refresh:5 ; URL=index.php');

		}else {	
			$siradaki = $number;
			$siradaki++;
			while ($siradaki % 3 !== 0) { 
			/* iletilen değer eger 3'e tam bölünmüyorsa 1 artırarak  3'e tam bölünebilcek en yakın sayı bulunur */
				$siradaki++;
			}

            $onceki = $number;
			$onceki--;
			while ($onceki % 3 !== 0) { 
			/* iletilen değer eger 3'e tam bölünmüyorsa 1 artırarak  3'e tam bölünebilcek en yakın sayı bulunur */
				$onceki--;
			}

			echo "$number Sayısı 3 İle Tam Bölünemiyor ve Girdiğin Değere En Yakın 3 İle Tam Bölünen Sayılar:
			$siradaki ve $onceki";

			header('Refresh:10 ; URL=index.php');

		}
	}
}

?>