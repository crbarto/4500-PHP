# Atividades para treinar Arrays, For, Foreach, Funções, etc.

Neste projeto encontra-se alguns arquivos para simularmos um banco de dados e trabalharmos com ele.  
A ideia é que você monte funções para trabalhar com as informações geradas.  

Estrutura de arquivos:

    - dados/alunos.php;
    - dados/cursos.php;
    - dados/matriculas.php;
    - dados/dados.php;
    - dadps/turmas.php;
    - dados/periodos.php;
    

## Exercícios para praticar

- Criar função para trazer informações do aluno passando algo por paramêtro;
    - Ex. `buscarAluno('id',33)` deve retornar aluno de `id` `33`;
    - Ex. `buscarAluno('name','Jensen Ankles')` deve retornar aluno de `name` `Jensen Ankles`;
    - Etc.

- Repetir o exemplo acima para Matrículas;

- Criar função para trazer as Matrículas `Aprovadas` = `1`, `Reprovadas` = `2` ou `em Recuperação` = `3` de um Curso;
    - Ex. `buscarMatriculas('curso_id', 500, 1)` deve retornar as matrículas aprovadas do curso 500

    - Alunos Aprovados      - Média das notas >= 7 e frequencia >= 8;
    - Alunos em Recuperação - Média das notas >= 5 e < 7 e frequencia >= 8;
    - Alunos Reprovados     - Média das notas < 5 ou frequencia < 8;

- Exibir dados do Aluno, cursos em que está matrículado, suas notas e frequencia.
- Exibir alunos de algum período específico.
- Exibir quantidade de matrículas de um curso.
- Exibir quantidade de alunos em curso EAD.
- Exibir quantidade de alunos em curso presencial.
- Etc.