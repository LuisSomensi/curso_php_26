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