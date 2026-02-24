9
# Tutorial 
abrir vscode ver se ta logado ubuntu (canto inferior esquerdo) file open folder: seleciona tudo e apaga

/var/www/html e da um ok. Após, terminal novo terminal
git clone LINK_GITHUB da um enter file open folder: seleciona tudo e apaga

/var/www/html/curso_php_26 e da um ok terminal novo terminal verifica se esta em: /var/www/html/curso_php_26

MariaDB

CREATE database curso_php_26;

CREATE USER 'aluno'@localhost IDENTIFIED BY '1234';

GRANT ALL PRIVILEGES ON *.* TO 'aluno'@localhost IDENTIFIED BY '1234';

select u.* from usuario as u
inner join pessoa_fisica as pf ON u.id = pf.usuario_alteracao;

https://phoenixnap.com/kb/how-to-create-mariadb-user-grant-privileges#:~:text=To%20create%20a%20new%20MariaDB,to%20a%20local%20MySQL%20server.

C
    INSERT INTO usuario (nome, email, status, cadastro_preenchido);
    VALUES ("Fulano de tal", "fulanodetal_gmail.com",false, false)
R
    Read * from usuario WHERE id = 3
U
    Update usuario SET email="luisfelipe@infoserv.com" WHERE id = 1;
D
    Delete FROM usuario WHERE id = 3;

CASO SEJA MAIS DE UM, TIRA O WHERE

Delete FROM usuario WHERE id in (7, 8, 9);

ALTER TABLE
ALTER TABLE usuario ADD column cadastro_preenchido bool default false;
ALTER TABLE usuario drop column cadastro_preenchido;
ALTER TABLE usuario Modify column cadastro_preenchido bool default false;

COMANDOS BANCO DE DADOS:
CREATE INSERT INTO usuario (nome, email, status, cadastros_preenchidos) VALUES ('Fulano de tal', 'fulano@ciclano.com.br', 0, 0), ('Beltrano de tal', 'beltrano@gmail.com.br', 0, 0);

READ Select * FROM usuario

READ (apenas 1) Select * FROM usuario WHERE id = 3;

UPDATE Update usuario SET email="ariel@infoserv.com" WHERE id = 1;

UPDATE (mais de 1) update usuario SET status=true, cadastro_preenchido=true WHERE id IN (1, 7);

DELETE Delete FROM usuario WHERE id = 3;

DELETE ( mais de 1) Delete FROM usuario WHERE id IN = (3, 7);

Criar tabela ALTER TABLE usuario ADD column cadastro_preenchido bool default false;

Modificar tabela ALTER TABLE usuario MODIFY column cadastro_preenchido bool default false;

Excluir tabela ALTER TABLE usuario DROP column cadastro_preenchido bool default false;

Datas automáticas ALTER TABLE usuario DROP COLUMN criado_em; ALTER TABLE usuario ADD column criado_em DATETIME DEFAULT NULL ON INSERT current_timestamp;

ALTER TABLE usuario DROP COLUMN atualizado_em; ALTER TABLE usuario ADD column criado_em DATETIME DEFAULT NULL ON INSERT current_timestamp;