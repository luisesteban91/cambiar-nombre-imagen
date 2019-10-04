<?php
try{
	
	// var_dump ($_FILES['QR']);
	// exit();
	
     if($_FILES){



		$clientes = array(
			array('ADRIAN HUMBERTO ARREDONDO GARCIA' , '7226267891'),
			array('ADRIANA HERNANDEZ PATIÑO' , '7225031559'),
			array('AGUSTIN ZARAUT RUBIÑOS' , '5531667633'),
			array('ALEJANDRA CAAMAÑO SIMON' , '5538860123'),
			array('ALEJANDRO MONTALVO HERNANDEZ' , '5530595480'),
			array('ALEJANDRO SAINOS TORRES' , '5549905752'),
			array('ALEJANDRO ARTURO RAMIREZ ALVAREZ' , '5531105256'),
			array('ALEJANDRO EFREN CORTE GUERRERO' , '5554757265'),
			array('ANA CECILIA CASTILLO VILLALOBOS' , '5513215968'),
			array('ANDY AARON CORDOVA GUTIERREZ' , '5576029382'),
			array('ANGEL CALDERON MEDINA' , '5523063931'),
			array('ANGEL ANTONIO RODRIGUEZ BENITEZ' , '5522412225'),
			array('ANTONIO MONTIEL GARCIA' , '5522202787'),
			array('ANTONIO HECTOR GARCIA AGUILAR' , '5530351287'),
			array('ARACELI CORTE FLORES' , '5553611743'),
			array('ARMINDA JOSEFINA CABRERA RAMIREZ' , '5523446123'),
			array('ARNULFO GALLEGOS RESENDIZ' , '5523251542'),
			array('ARTURO RIOS MARTINEZ' , '5527681621'),
			array('BEATRIZ RAMIREZ BECERRA' , '5555613153'),
			array('BEATRIZ ANGELICA HIDALGO OJEDA' , '5545408013'),
			array('BLANCA ESTELA LUCERO MEJIA' , '5554319224'),
			array('BLANCA MARISOL DIAZ RODRIGUEZ' , '5571178666'),
			array('CARLOS ALBERTO ENCISO HERNANDEZ' , '5583668361'),
			array('CARLOS EFRAIN SANCHEZ RAMIREZ' , '5534860437'),
			array('CARLOS MIGUEL GARCIA SOLIS' , '7222899241'),
			array('CESAR TEOYOTL MENA' , '5522197677'),
			array('CORNELIO DE LA CRUZ PEÑA' , '5554572199'),
			array('DACIA ISABEL GARCIA REYES' , '5528491115'),
			array('DANIEL MORALES COLOAPA' , '5514999919'),
			array('DANIEL PALACIOS CORTES' , '5536339632'),
			array('Daniel Ramirez Peralta' , '4521496926'),
			array('DAVID ALFREDO HERNANDEZ FONSECA' , '5532721203'),
			array('DIEGO ARTURO BARRIGUETE RODRIGUEZ' , '5545448409'),
			array('DULCE MARIANA BARRALES RODRIGUEZ' , '5534241093'),
			array('EDNA NATHALY CHIRINO VAZQUEZ' , '5548119092'),
			array('EDUARDO VAZQUEZ VILLEGAS' , '5529205923'),
			array('EISMYRNA ROCIO MARTINEZ LOZANO' , '5585726580'),
			array('ELIHU DAVID JIMENEZ GARCIA' , '5518048284'),
			array('ENRIQUE GERARDO CONDEY HERRERA' , '5591876272'),
			array('ENRIQUETA YAZMIN SOSA CASTILLO' , '5528915054'),
			array('ERICK RENE OLIVERA TENORIO' , '5551726006'),
			array('ERNESTO RUBEN TREJO MEDINA' , '5513197307'),
			array('ETBAAL KALID SALAS PEREZ' , '5545228706'),
			array('FELIPE VALENCIA GONZALEZ' , '5537273677'),
			array('FERNANDO CASTAÑEDA GARCIA' , '5516947515'),
			array('FERNANDO FLORES VARGAS' , '5560418771'),
			array('FLAVIO DANIEL BARRIOS GARNIER' , '5555094574'),
			array('FRANCISCO ARRIAGA ALBARRAN' , '7222473706'),
			array('FRANCISCO JAVIER IGNOROSA MARTINEZ' , '5566044566'),
			array('FRANCISCO JAVIER REYES BARRIOS' , '5519029648'),
			array('GERARDO ALBERTO LOPEZ MARTINEZ' , '5564210212'),
			array('GILBERTO IGNACIO PEREZ FERNANDEZ' , '5529882667'),
			array('GIOVANNI AVILA GUTIERREZ' , '5585620113'),
			array('GLAFIRA VELASCO LOPEZ' , '5554544694'),
			array('GLORIA SALINAS PALACIOS' , '5521682614'),
			array('GUADALUPE DEL CARMEN ABARCA PEREZ' , '5532620036'),
			array('GUILLERMO MORENO FERNANDEZ' , '5510483466'),
			array('GUILLERMO JESUS MARTINEZ MARTINEZ' , '5519523923'),
			array('HAYDEE ALEXANDRA BAEZ TRUJILLO' , '5523006855'),
			array('HECTOR AURELIO CAMACHO HERNANDEZ' , '5540716373'),
			array('HECTOR MIGUEL SANCHEZ ZAMORA' , '5614844784'),
			array('HERIBERTO BALTAZAR RODRIGUEZ' , '5554936947'),
			array('HUGO DANIEL RODRIGUEZ GALVEZ' , '5518111904'),
			array('ISIDRO MARCO ANTONIO RUIZ CABRERA' , '5529722489'),
			array('ISRAEL CARRASCO MELENDEZ' , '5552484383'),
			array('ISRAEL MONTESINOS MUÑOZ' , '5517464805'),
			array('ISRAEL JOSELIN NAVARRO LOPEZ' , '5586886182'),
			array('JACIEL HERNANDEZ HERNANDEZ' , '5560684688'),
			array('JAIME AGUIRRE PICHARDO' , '5543278267'),
			array('JAIME MALDONADO BAEZ' , '5527556696'),
			array('JAIR ALEJANDRO MARTINEZ FLORES' , '5540510793'),
			array('JESUS BARAJAS CRUZ' , '5527641544'),
			array('JESUS DUVAL SALINAS' , '5545417614'),
			array('JORGE RIOS BETANZOS' , '5539869387'),
			array('JORGE ARNULFO HERNANDEZ MARCOS' , '5510062880'),
			array('JORGE EDUARDO PICHARDO CELIO' , '5587972708'),
			array('JORGE LUCIANO ESCALERA ALVAREZ' , '5518292904'),
			array('JOSE QUINTERO TELLEZ' , '5512411302'),
			array('JOSE ADAN FLORES VERALTI' , '5512986021'),
			array('JOSE ALBERTO DE LA FUENTE GARCIA' , '5525584891'),
			array('JOSE ANTONIO MALAGON REYES' , '5527282206'),
			array('JOSE CRUZ QUITERIO GONZALEZ' , '5535076751'),
			array('JOSE EDUARDO CONTRERAS GARCIA' , '5530748296'),
			array('JOSE ENRIQUE VAZQUEZ AGUILAR' , '5518005584'),
			array('JOSE LUIS RUIZ FLORES' , '5524290436'),
			array('JOSE MIGUEL SALAZAR ROJAS' , '5564815080'),
			array('JOSE PEDRO LOPEZ MUÑOZ' , '5527961444'),
			array('JOSE TRINIDAD OLALDE RIVAS' , '5541796751'),
			array('JOSE VENANCIO GUERRERO RUIZ' , '5528255226'),
			array('JOSEPH ANTONIO BOJORGE PEREZ' , '5541420609'),
			array('JUAN RODRIGUEZ CONTRERAS' , '5544558547'),
			array('JUAN CARLOS HERNANDEZ FLORES' , '5522436866'),
			array('JUAN CARLOS LAZCANO CAMPOS' , '5554152366'),
			array('JUAN MANUEL PORTILLA GARCIA' , '5534381070'),
			array('JULIO CESAR RUIZ SANCHEZ' , '5555193170'),
			array('KARINA MENDIOLA LOPEZ' , '5537161680'),
			array('KARLA BEATRIZ DAVILA GARCIA' , '5522443266'),
			array('LAZARO GARCIA TRUJANO' , '5517980177'),
			array('LILIANA GARCIA BAUTISTA' , '5517287323'),
			array('LILIANA EVELYN SIERRA SANCHEZ' , '5580223651'),
			array('LINA LAURA CABRERA ALTAMIRANO' , '5531209269'),
			array('MA CONSUELO LOPEZ ZAMBRANO' , '5534457583'),
			array('MANUEL FUENTES MARTINEZ' , '5572948289'),
			array('MANUEL RIGOBERTO ARROYO GUTIERREZ' , '5532548632'),
			array('MARCO ANTONIO PASARAN PEREZ' , '5540112176'),
			array('MARIA DEL CARMEN MARTINEZ CARRILLO' , '7221551360'),
			array('MARIA GABRIELA HUERTA CORTES' , '5611653222'),
			array('MARITZA NICOLAS HERRERA' , '5532490640'),
			array('MARTHA TEPOS GUTIERREZ' , '5614542840'),
			array('MIGUEL MORA HERENDIA' , '5514777203'),
			array('MIGUEL ANGEL DIAZ OLVERA' , '5511426265'),
			array('MIGUEL ANGEL MEDINA CAMPOS' , '5535030869'),
			array('MIGUEL ANGEL RIVERA DE LA ROSA' , '5524947669'),
			array('NATALYN RAMIREZ SALAS' , '5546478649'),
			array('NELSON COROMOTO LIENDO LOPEZ' , '5568613258'),
			array('NESTOR JAVIER RUIZ HINOJOSA' , '5531113625'),
			array('NORMA CRISTINA ALVARADO MIJANGOS' , '7222441175'),
			array('OSCAR ARENAS LOPEZ' , '5534883344'),
			array('OSCAR ANDRES MARQUEZ JIMENEZ' , '5539331148'),
			array('Paola Reyes Carreño' , '5527499687'),
			array('PEDRO RIVERA AMBROSIO' , '5517636172'),
			array('PERLA MARIA DEL CARMEN ACEVEDO RAMIREZ' , '5531996553'),
			array('RAFAEL ARTEAGA OLIVO' , '5529946856'),
			array('RAFAEL ORTIZ JUAREZ' , '5521290692'),
			array('RAFAEL ANTONIO JIMENEZ ORTIZ' , '5514899968'),
			array('RAUL MARTINEZ Y MARTINEZ' , '5529646666'),
			array('RICARDO MORENO GONZALEZ' , '5531130504'),
			array('ROBERTO BERISTAIN CORTES' , '5546818679'),
			array('ROBERTO LOPEZ SANCHEZ' , '5534909192'),
			array('ROCIO ENRIQUEZ BRAVO' , '5548389188'),
			array('RODRIGO LOPEZ CAMACHO' , '5514887468'),
			array('ROGELIO LOPEZ LEMUS' , '5538899908'),
			array('ROSALBA PAZ GONZALEZ' , '5534811695'),
			array('RUBEN HERNANDEZ CONTRERAS' , '7221727674'),
			array('RUBEN MARTINEZ RODRIGUEZ' , '7441752720'),
			array('RUBEN ORDUÑO GOMEZ' , '5544442667'),
			array('RUBEN SANTIAGO SALAZAR JOSE' , '5537845962'),
			array('SALVADOR OMAR GUZMAN DAVILA' , '5534893129'),
			array('SAMANTHA ELVIRA ALFARO ORTIZ' , '5610779962'),
			array('SANDRA IVONNE ESTEVEZ BALTAZAR' , '5517630628'),
			array('SATURNINO LOBATO LEAL' , '5545831948'),
			array('UZIEL ZAMUDIO CASTILLO' , '5538483477'),
			array('VERONICA VALDEZ ROMERO' , '5584554013'),
			array('VICTOR GARCIA LOZANO' , '5563470367'),
			array('VICTOR ALEJANDRO VALENCIA IBAÑEZ' , '5548484533'),
			array('VICTOR GUILLERMO ROSAS PINEDA' , '5614351964'),
			array('VICTOR MANUEL CARDENAS LOPEZ' , '5555059378'),
			array('VICTOR MANUEL MORALES ORTEGA' , '5563470862'),
			array('WENDY SIANO SILL' , '5585496244')
		);
		

		

		// foreach($clientes as $cliente){
		// 	list($nombre, $folio) = $cliente;
    	// 	echo $nombre; echo $folio; echo "<br>";
		// }
    
		//Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
			$count = 0;
        foreach($_FILES["archivo"]['tmp_name'] as $key => $tmp_name){
			//Validamos que el archivo exista
			if($_FILES["archivo"]["name"][$key]) {
				
				$filename = $_FILES["archivo"]["name"][$key]; //Obtenemos el nombre original del archivo

				foreach($clientes as $cliente){
					list($nombre, $folio) = $cliente;

					if($nombre.".png" == $filename){
						$filename = $folio.".png";	
						$source  = $folio.".png"; //Le asignamos el nombre con folio a la imagen
						$count ++;
					}		
				}
				


				$source = $_FILES["archivo"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
				
				$directorio = 'nuevoPNG/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
				
				//Validamos si la ruta de destino existe, en caso de no existir la creamos
				if(!file_exists($directorio)){
					mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
				}
				
				$dir=opendir($directorio); //Abrimos el directorio de destino
				$target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
				
				//Movemos y validamos que el archivo se haya cargado correctamente
				//El primer campo es el origen y el segundo el destino
				if(move_uploaded_file($source, $target_path)) {
					echo "El archivo $filename se ha almacenado en forma exitosa.<br>";
					} else {
					echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
				}
				closedir($dir); //Cerramos el directorio de destino
			}
			
		}
			echo "Total: ". $count;
    }
}catch(Exception $e){
    echo "algo slaio mal: ".$e;
}

