<?php 
$ciudad = $_POST["ciudad"];
$tipo = $_POST["Tipo"];
$precio = $_POST["Precio"];

$data = file_get_contents("data-1.json");
$propiedades = json_decode($data, true);
$valor = explode(";",$precio);
if($ciudad == "x" and $tipo == "x"){
	foreach ( $propiedades as $prop ) {
		$venta = explode("$",$prop["Precio"]);
		$venta = str_replace(",","",$venta);
		if( $venta[1] > $valor[0] and $venta[1]<$valor[1]){
			$estructura = "<div class='itemMostrado card'>";
			$estructura .="<img src='img/home.jpg' alt='Demo'>";
			$estructura .="<div class='card-stacked'>";
			$estructura .="<strong>Dirección: </strong>".$prop["Direccion"]."</br>";
			$estructura .="<strong>Ciudad: </strong>".$prop["Ciudad"]."</br>";
			$estructura .="<strong>Teléfono: </strong>".$prop["Telefono"]."</br>";
			$estructura .="<strong>Código Postal: </strong>".$prop["Codigo_Postal"]."</br>";
			$estructura .="<strong>Tipo: </strong>".$prop["Tipo"]."</br>";
			$estructura .="<strong>Precio: </strong><span class='precioTexto'>".$prop["Precio"]."</span></br>";
			$estructura .="<div class='card-action'>VENTAS</div>";
			$estructura .="</div>";
			$estructura .= "</div>";
			echo $estructura;		
		}
	}
}if($ciudad != "x" and $tipo != "x"){
	foreach ( $propiedades as $prop ) {
    	$venta = explode("$",$prop["Precio"]);
		$venta = str_replace(",","",$venta);		
		if($ciudad == $prop["Ciudad"]){
			if($tipo == $prop["Tipo"]){
				if( $venta[1] > $valor[0] and $venta[1]<$valor[1]){
					$estructura = "<div class='itemMostrado card'>";
					$estructura .="<img src='img/home.jpg' alt='Demo'>";
					$estructura .="<div class='card-stacked'>";
					$estructura .="<strong>Dirección: </strong>".$prop["Direccion"]."</br>";
					$estructura .="<strong>Ciudad: </strong>".$prop["Ciudad"]."</br>";
					$estructura .="<strong>Teléfono: </strong>".$prop["Telefono"]."</br>";
					$estructura .="<strong>Código Postal: </strong>".$prop["Codigo_Postal"]."</br>";
					$estructura .="<strong>Tipo: </strong>".$prop["Tipo"]."</br>";
					$estructura .="<strong>Precio: </strong><span class='precioTexto'>".$prop["Precio"]."</span></br>";
					$estructura .="<div class='card-action'>VENTAS</div>";
					$estructura .="</div>";
					$estructura .= "</div>";
					echo $estructura;									
				}
			}
		}
	}
}else{
	if($ciudad != "x" and $tipo == "x"){
			foreach ( $propiedades as $prop ) {
				$venta = explode("$",$prop["Precio"]);
				$venta = str_replace(",","",$venta);
				if($ciudad == $prop["Ciudad"]){
					if( $venta[1] > $valor[0] and $venta[1]<$valor[1]){
						$estructura = "<div class='itemMostrado card'>";
						$estructura .="<img src='img/home.jpg' alt='Demo'>";
						$estructura .="<div class='card-stacked'>";
						$estructura .="<strong>Dirección: </strong>".$prop["Direccion"]."</br>";
						$estructura .="<strong>Ciudad: </strong>".$prop["Ciudad"]."</br>";
						$estructura .="<strong>Teléfono: </strong>".$prop["Telefono"]."</br>";
						$estructura .="<strong>Código Postal: </strong>".$prop["Codigo_Postal"]."</br>";
						$estructura .="<strong>Tipo: </strong>".$prop["Tipo"]."</br>";
						$estructura .="<strong>Precio: </strong><span class='precioTexto'>".$prop["Precio"]."</span></br>";
						$estructura .="<div class='card-action'>VENTAS</div>";
						$estructura .="</div>";
						$estructura .= "</div>";
						echo $estructura;							
					}
				}
			}
	}elseif($ciudad == "x" and $tipo != "x"){
		foreach ( $propiedades as $prop ) {
			$venta = explode("$",$prop["Precio"]);
			$venta = str_replace(",","",$venta);
			if($tipo == $prop["Tipo"]){
				if( $venta[1] > $valor[0] and $venta[1]<$valor[1]){
					$estructura = "<div class='itemMostrado card'>";
					$estructura .="<img src='img/home.jpg' alt='Demo'>";
					$estructura .="<div class='card-stacked'>";
					$estructura .="<strong>Dirección: </strong>".$prop["Direccion"]."</br>";
					$estructura .="<strong>Ciudad: </strong>".$prop["Ciudad"]."</br>";
					$estructura .="<strong>Teléfono: </strong>".$prop["Telefono"]."</br>";
					$estructura .="<strong>Código Postal: </strong>".$prop["Codigo_Postal"]."</br>";
					$estructura .="<strong>Tipo: </strong>".$prop["Tipo"]."</br>";
					$estructura .="<strong>Precio: </strong><span class='precioTexto'>".$prop["Precio"]."</span></br>";
					$estructura .="<div class='card-action'>VENTAS</div>";
					$estructura .="</div>";
					$estructura .= "</div>";
					echo $estructura;							
				}				
			}
		}
	}
}

/*if($ciudad == "x" and $tipo == "x"){
	foreach ( $propiedades as $prop ) {
		if($ciudad == $prop["Ciudad"]){
			$estructura = "<div class='itemMostrado card'>";
			$estructura .="<img src='img/home.jpg' alt='Demo'>";
			$estructura .="<div class='card-stacked'>";
			$estructura .="<strong>Dirección: </strong>".$prop["Direccion"]."</br>";
			$estructura .="<strong>Ciudad: </strong>".$prop["Ciudad"]."</br>";
			$estructura .="<strong>Teléfono: </strong>".$prop["Telefono"]."</br>";
			$estructura .="<strong>Código Postal: </strong>".$prop["Codigo_Postal"]."</br>";
			$estructura .="<strong>Tipo: </strong>".$prop["Tipo"]."</br>";
			$estructura .="<strong>Precio: </strong><span class='precioTexto'>".$prop["Precio"]."</span></br>";
			$estructura .="<div class='card-action'>VENTAS</div>";
			$estructura .="</div>";
			$estructura .= "</div>";
			echo $estructura;		
		}
	}		
}*/
?>