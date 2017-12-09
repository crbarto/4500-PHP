<?php

namespace Model\BannerModel;

class BannerModel 
{

	private $id;
	private $nome;
	private $descricao;
	private $url;

	public function __construct($nome,$descricao,$url,$id = null)
	{

		$this->id = $id;
		$this->nome = $nome;
		$this->descricao = $descricao;
		$this->url = $url;
		
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

	function getId()
	{

		return $this->id;

	}
	function getNome()
	{

		return $this->nome;
	
	}
	function getDescricao()
	{

		return $this->descricao;
	
	}
	function getUrl()
	{

		return $this->url;
	
	}

}