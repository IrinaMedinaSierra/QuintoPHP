<?php
	function show($cad){
		echo $cad."\n";
	}
	class book
	{
		protected $isbn;
		protected $titulo;
		protected $autor;
		protected  $precio;
		public function __construct($autor, $titulo,$isbn,$precio){
		$this->isbn=$isbn;
		$this->autor=$autor;
		$this->precio=$precio;
		$this->titulo=$titulo;
		}
		
		/**
		 * @return mixed
		 */
		public function getIsbn ()
		{
			return $this->isbn;
		}
		
		/**
		 * @param mixed $isbn
		 */
		public function setIsbn ($isbn)
		{
			$this->isbn = $isbn;
		}
		
		/**
		 * @return mixed
		 */
		public function getTitulo ()
		{
			return $this->titulo;
		}
		
		/**
		 * @param mixed $titulo
		 */
		public function setTitulo ($titulo)
		{
			$this->titulo = $titulo;
		}
		
		/**
		 * @return mixed
		 */
		public function getAutor ()
		{
			return $this->autor;
		}
		
		/**
		 * @param mixed $autor
		 */
		public function setAutor ($autor)
		{
			$this->autor = $autor;
		}
		
		/**
		 * @return mixed
		 */
		public function getPrecio ()
		{
			return $this->precio;
		}
		
		/**
		 * @param mixed $precio
		 */
		public function setPrecio ($precio)
		{
			$this->precio = $precio;
		}
		
		
	}
	$miLibro=new Book("Miguel de Cervantes","Don Quijote de la Mancha","9876543212345",45.50);
	$cad="El libro que quieres tiene como titulo:".$miLibro->getTitulo ().", su autor es ".$miLibro->getAutor () . ", el ISBN es ". $miLibro->getIsbn () . ". Precio: ". $miLibro->getPrecio () . "€. ";
	
	show ($cad);
	$miLibro->setPrecio (50.45);
	$cad="El nuevo precio es ". $miLibro->getPrecio ();
	show ($cad);
	