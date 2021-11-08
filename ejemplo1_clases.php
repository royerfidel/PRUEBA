
<?php  
	//Es un comentario por la clonación
	class persona
	{
		//Crear atributos
		private $_nombre="";
		private $_apellido="";
		private $_fechaNacimiento;

		//Crear el constructor
		function __construct($fechaNacimiento)
		{
			//Inicializando
			$this->_fechaNacimiento=$fechaNacimiento;

		}

		public function	mostrarEdad(){

			return $this->calcularEdad();

		}


		private function calcularEdad(){

			$añoActual=date("Y");
			list(,,$año)=explode("/", $this->_fechaNacimiento);
			$edad=$añoActual-$año;
			return $edad;

		}


	}

	//Instancias
	$objetoPersona=new persona("04/05/1988");
	print "La edad es: ".$objetoPersona->mostrarEdad();
	?>
		<pre>
			<?php var_dump($objetoPersona);; ?>
		</pre>
	<?php

?>