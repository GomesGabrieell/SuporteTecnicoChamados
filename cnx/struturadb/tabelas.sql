create table usuarios_help_desk(
	id  INT PRIMARY KEY AUTO_INCREMENT,
	datahora timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	nome longtext NOT NULL,
    email longtext NOT NULL,
    senha longtext,
    logacoesuser varchar(600) NOT NULL
)AUTO_INCREMENT = 000;

create table chamados_list(
	id  INT PRIMARY KEY AUTO_INCREMENT,
	datahora timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	titulo longtext NOT NULL,
    categoria longtext NOT NULL,
    descricao longtext,
    usercreate longtext NOT NULL,
    sstatus longtext NOT NULL
)AUTO_INCREMENT = 000;