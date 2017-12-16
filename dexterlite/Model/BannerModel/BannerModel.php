<?php

namespace Model\BannerModel;

class BannerModel 
{

	private $id;
	private $nome;
	private $descricao;
	private $url;
	private $categoria;

	public function __construct($nome, $descricao, $url, $categoria, $id = null)
	{

		$this->id        = $id;
		$this->nome      = $nome;
		$this->descricao = $descricao;
		$this->url       = $url;
		$this->categoria = $categoria;
		
	}

	public function setId($id)
	{

		$this->id = $id;

	}

	public function setNome($nome)
	{

		$this->nome = $nome;
	
	}

	public function setDescricao($descricao)
	{

		$this->descricao = $descricao;
	
	}

	public function setUrl($url)
	{

		$this->url = $url;
	
	}

	public function setCategoria($categoria)
	{

		$this->categoria = $categoria;

	}

	public function getId()
	{

		return $this->id;

	}
	public function getNome()
	{

		return $this->nome;
	
	}
	public function getDescricao()
	{

		return $this->descricao;
	
	}
	public function getUrl()
	{

		return $this->url;
	
	}
	public function getCategoria()
	{

		return $this->categoria;

	}
}