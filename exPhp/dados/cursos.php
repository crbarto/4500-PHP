<?php 


$cursos = [
	[
		'id' => '500',
		'nome' => 'Desenvolvimento Web com PHP',
		'tipo' => 'presencial',
		'carga_horaria' => 40,
		'requisitos' => 'Para acompanhar este curso, o aluno deve saber utilizar computadores, inicializar uma máquina virtual com VirtualBox, ter noções de lógica de programação e conhecimentos básicos de HTML e CSS.'
	],
	[
		'id' => '501',
		'nome' => 'Desenvolvimento Orientado a objetos com PHP',
		'tipo' => 'presencial',
		'carga_horaria' => 40,
		'requisitos' => 'Conhecer a sintaxe do PHP; Trabalhar com bancos de dados relacionais (MySQL, PostgreSQL, etc); Saber criar aplicações para web com o PHP de forma estruturada; Conhecer HTML e CSS; Conhecer SQL; Ou ter concluído o curso Desenvolvimento Web com PHP - 500.'
	],
	[
		'id' => '502',
		'nome' => 'Desenvolvimento Enterprise com PHP',
		'tipo' => 'presencial',
		'carga_horaria' => 40,
		'requisitos' => ' Ter participado dos dois primeiros cursos da formação php (500,501) ou ter conheciementos equivalentes: Lógica de programação, Html/Css básico, Strings / Arrays, Funcionalidades Web : Protocolo Http, Metodos Get / Post / Cookie / Sessions, Comandos de estrutura, Estrutura de Decisão, Estrutura de Repetição, Funções Nativas, String, Arrays, Banco de Dados : PDO, Orientação a Objetos e Padrẽos de Projeto'
	],
	[
		'id' => '4515',
		'nome' => 'Segurança em PHP',
		'tipo' => 'EAD',
		'carga_horaria' => 22,
		'requisitos' => 'Conhecer a fundo a sintaxe do PHP, Conhecimentos básicos de servidores Linux (Linux, Apache, PHP, MySQL ou PostgreSQL). Conceitos de redes de computadores. Trabalhado com bancos de dados relacionais (MySQL, PostgreSQL, etc.), Ou ter concluído o curso 502.
'
	],
	[
		'id' => '605',
		'nome' => 'HTML5 & CSS3 Fundamentals',
		'tipo' => 'presencial',
		'carga_horaria' => 40,
		'requisitos' => 'Noções de algum sistema operacional (Windows, Linux ou Mac OSX);  Conhecimentos em internet; Desejável alguma noção de lógica de programação.'
	],
	[
		'id' => '606',
		'nome' => 'Desenvolvimento Web com JavaScript e jQuery',
		'tipo' => 'presencial',
		'carga_horaria' => 40,
		'requisitos' => 'É imprescindível conhecer HTML, CSS e JavaScript ou ter concluído o curso HTML5 e CSS3 Fundamentals; Entender lógica de programação como operadores lógicos, condicionais, loops, funções, etc; É desejável conhecimento em alguma linguagem de programação (como Java, PHP, C, etc);'
	],
	[
		'id' => '607',
		'nome' => 'Mobile Apps para iOS e Android com HTML5 e PhoneGap',
		'tipo' => 'presencial',
		'carga_horaria' => 40,
		'requisitos' => 'Para participar deste curso você precisa ter bons conhecimentos em HTML, CSS e JavaScript. Caso você não tenha muita familiaridade com orientação em JavaScript a objetos e Ajax, é aconselhável que você realize o Desenvolvimento Web com JavaScript e jQuery.'
	],
	[
		'id' => '4500',
		'nome' => 'Desenvolvimento Web com PHP',
		'tipo' => 'EAD',
		'carga_horaria' => 40,
		'requisitos' => 'Para acompanhar este curso, o aluno deve saber utilizar computadores, inicializar uma máquina virtual com VirtualBox, ter noções de lógica de programação e conhecimentos básicos de HTML e CSS.'
	],
	[
		'id' => '4501',
		'nome' => 'Desenvolvimento Orientado a objetos com PHP',
		'tipo' => 'EAD',
		'carga_horaria' => 40,
		'requisitos' => 'Conhecer a sintaxe do PHP; Trabalhar com bancos de dados relacionais (MySQL, PostgreSQL, etc); Saber criar aplicações para web com o PHP de forma estruturada; Conhecer HTML e CSS; Conhecer SQL; Ou ter concluído o curso Desenvolvimento Web com PHP - 500.'
	],
	[
		'id' => '4502',
		'nome' => 'Desenvolvimento Enterprise com PHP',
		'tipo' => 'EAD',
		'carga_horaria' => 40,
		'requisitos' => ' Ter participado dos dois primeiros cursos da formação php (500,501) ou ter conheciementos equivalentes: Lógica de programação, Html/Css básico, Strings / Arrays, Funcionalidades Web : Protocolo Http, Metodos Get / Post / Cookie / Sessions, Comandos de estrutura, Estrutura de Decisão, Estrutura de Repetição, Funções Nativas, String, Arrays, Banco de Dados : PDO, Orientação a Objetos e Padrẽos de Projeto'
	],
	[
		'id' => '4605',
		'nome' => 'HTML5 & CSS3 Fundamentals',
		'tipo' => 'EAD',
		'carga_horaria' => 40,
		'requisitos' => 'Noções de algum sistema operacional (Windows, Linux ou Mac OSX);  Conhecimentos em internet; Desejável alguma noção de lógica de programação.'
	],
	[
		'id' => '4606',
		'nome' => 'Desenvolvimento Web com JavaScript e jQuery',
		'tipo' => 'EAD',
		'carga_horaria' => 40,
		'requisitos' => 'É imprescindível conhecer HTML, CSS e JavaScript ou ter concluído o curso HTML5 e CSS3 Fundamentals; Entender lógica de programação como operadores lógicos, condicionais, loops, funções, etc; É desejável conhecimento em alguma linguagem de programação (como Java, PHP, C, etc);'
	],
	[
		'id' => '4607',
		'nome' => 'Mobile Apps para iOS e Android com HTML5 e PhoneGap',
		'tipo' => 'EAD',
		'carga_horaria' => 40,
		'requisitos' => 'Para participar deste curso você precisa ter bons conhecimentos em HTML, CSS e JavaScript. Caso você não tenha muita familiaridade com orientação em JavaScript a objetos e Ajax, é aconselhável que você realize o Desenvolvimento Web com JavaScript e jQuery.'
	],
];

function lista_cursos($num)
{
	if ($num == 1) {
		$curso = rand(500,502);
	}
	if ($num == 2) {
		$curso = rand(605,607);
	}
	if ($num == 3) {
		$curso = rand(4500,4502);
	}
	if ($num == 4) {
		$curso = rand(4605,4607);
	}
	if ($num == 5) {
		$curso = 4515;
	}

	return $curso;
}

