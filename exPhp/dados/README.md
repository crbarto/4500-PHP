### alunos.php
JSON com 50 pessoas aleatórias geradas pelo site http://www.theonegenerator.com/pt  
Este JSON é transformado em um array para trabalharmos com ele no PHP.  
No final temos um FOR para colocar os Id's em cada.  

#### $aluno
```code
[
        [id] => 1
        [name] => Heath Ledger
        [email] => heathledger@tortor.com
        [cpf] => 64596650950
        [password] => 80dph2sh
        [birthday] => 19/05/1956
        [rg] => 852549829
]
```
### cursos.php
Um array com alguns cursos de exemplo.  
Uma Função para gerar um Id aleatório de um dos Cursos.  

    - É passado por parametro um número `1` à `5`
    - IF número == `1` - Cursos entre 500 e 502
    - IF número == `2` - Cursos entre 605 e 607
    - IF número == `3` - Cursos entre 4500 e 4502
    - IF número == `4` - Cursos entre 4605 e 4607
    - IF número == `5` - Curso 4515

#### $curso
```code
[
        'id' => '500',
        'nome' => 'Desenvolvimento Web com PHP',
        'tipo' => 'presencial',
        'carga_horaria' => 40,
        'requisitos' => 'Para acompanhar este curso, o aluno deve saber utilizar computadores, inicializar uma máquina virtual com VirtualBox, ter noções de lógica de programação e conhecimentos básicos de HTML e CSS.'
    ],
```
### matriculas.php

FOR para gerar matrículas aleatórias.  
#### $matricula
```code
[
    [id] => 1
        [turma_id] => 5
        [aluno_id] => 1
        [notas] => [
                [prova_1] => 0.1
                [prova_2] => 7.7
            ]
        [frequencia] => 10
]
```

### turmas.php
Include do arquivo `cursos.php`  
Include do arquivo `periodos.php`  

FOR para gerar turmas aleatórios.  
```code
[
    'id' => 1,
    'curso_id' => 502,
    'periodo_id' => 3,
    'instrutor_id' => 'indefinido'
]

```

### periodos.php

Array dos períodos
```code
[
    1 => 'Noturno',
    2 => 'Vespertino',
    3 => 'Matutino',
    4 => 'Sábado',
    5 => 'Domingo',
]
```

### dados.php
Local onde dou `include` em todos arquivos para reunir tudo em apenas um local.  

