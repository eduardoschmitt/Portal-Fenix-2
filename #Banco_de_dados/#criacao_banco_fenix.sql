drop database portalfenix2020; 
create database portalfenix2020;
use portalfenix2020;

/*Tabelas auxiliares*/

/* REMOVIDO

create table stats(
cod int not null auto_increment,
funcionalidade varchar (45),
primary key (cod)); 
*/

create table softwares(
cod int not null auto_increment,
categoria varchar (90),
classificacao varchar (5),
primary key (cod)); 


create table endereco(
cod int not null auto_increment,
estado varchar(25) not null,
cidade varchar (256) not null, 
bairro varchar (256) not null,
rua varchar (256) not null,
complemento varchar (500),
/*Adiocnado numero e cep em 2020*/
numero int,
cep varchar (45) not null,
primary key(cod));

create table pessoajur(
cod int not null auto_increment,
cnpj varchar (20) not null,
qtdPessoas int,
tipoativ varchar(270) not null,
primary key (cod));

create table pessoafis(
cod int not null auto_increment,
cpf varchar (14) not null,
profissao varchar (270) not null,
primary key (cod));

/*Tabelas Principais */
create table transporte_equip(
cod int not null auto_increment,

/*MODIFICADO*/ 
tipoveiculo varchar(180),
distancia float, 
dataviagem date,
observacao varchar(500),
codendereco int,

primary key (cod),
constraint fk_endereco_trasporteequip foreign key (codendereco) references endereco (cod) on delete cascade on update cascade);

create table admnistrador(
cod int not null auto_increment,

/*NOVO ADD AO MODELO*/
nome varchar(150) not null,

matricula int not null,
funcao varchar(45) not null,
datanasc date not null,
graduacao varchar(256) not null, 

/* REMOVER DO MODELO
foto blob,
*/
codendereco int not null,
primary key (cod),
constraint fk_endereco_admnistrador foreign key (codendereco) references endereco(cod) on delete cascade on update cascade);

create table inst_pessoa(
cod int not null auto_increment,
nome varchar (120) not null,
/*Modificado adicionado cmapo periodoRecomendado*/
/*Nodificado tipoPatrim para TINYINT*/
tipopatrim tinyint not null,
codendereco int not null, 
cnpj int, 
cpf int,
primary key(cod),
constraint fk_cnpj_instpessoa foreign key (cnpj)references pessoajur(cod) on update cascade on delete cascade,
constraint fk_cpf_instpessoa foreign key (cpf) references pessoafis(cod) on update cascade on delete cascade,
constraint fk_endereco_instpessoa foreign key (codendereco) references endereco(cod) on update cascade on delete cascade);


create table recebe_doa (
cod int not null auto_increment,
dataRecDoa date, 

/*ADD AO MODELO*/
urgencia varchar(14),
equipamento varchar(36),
observacao varchar (260),
datarecomendada date,
periodorecomendado varchar(36),
codinstpessoa int,
/*MODIFICADO*/ 
codadmnistrador int,

primary key (cod),
constraint fk_instpessoa_recebedoa foreign key (codinstpessoa) references inst_pessoa (cod) on delete cascade on update cascade,
constraint fk_admnistrador_recebedoa foreign key (codadmnistrador) references admnistrador (cod) on delete cascade on update cascade); 


/*FOI RETIRADA A TABELA STATUS E FORAM MODIFICADOS OS SEGUINTE:*/
create table equipamentos(
cod int not null auto_increment,
situacaoequip varchar(180), 
necessidade varchar(45),
tipo varchar(256), 

/*ADD AO MODELO*/
dataecaptacao date not null,
datadoacao date, 
quantidade int not null,
origem varchar(256) not null,
marca varchar (45),
funcionalidade varchar(45), 
codrecebedoa int,
codsoftwares int,

codtransporte int,
codstats int,
constraint fk_softwares_equipamentos foreign key (codsoftwares) references softwares (cod) on delete cascade on update cascade,
constraint fk_recebedoa_equipamentos foreign key (codrecebedoa) references recebe_doa(cod) on delete cascade on update cascade,
constraint fk_transporte_equipamentos foreign key (codtransporte) references transporte_equip(cod) on delete cascade on update cascade,
primary key (cod));

/*Contato*/

create table telefone (
cod int not null auto_increment,
tel varchar(14),
cel varchar(15), 
codadm int,
codinstpessoa int,
constraint fk_codadm_telefone foreign key (codadm) references admnistrador(cod) on update cascade on delete cascade,
constraint fk_codinstpessoa_telefone foreign key (codinstpessoa) references inst_pessoa(cod) on update cascade on delete cascade,
primary key (cod));

create table email(
cod int not null auto_increment,
email varchar(136) not null unique,

/*ADD AO MODELO*/
senha varchar(136) not null,   

codadm int, 
codinstpessoa int,
constraint fk_codadm_email foreign key (codadm) references admnistrador(cod) on update cascade on delete cascade,
constraint fk_codinstpessoa_email foreign key (codinstpessoa) references inst_pessoa(cod) on update cascade on delete cascade,
primary key (cod));

/*NIVEL DE ACESSO*/
/*NOVO ADD AO MODELO*/
create table usuarios(
cod int not null auto_increment,
nivel int not null,
codinstpessoa int,
codadm int,
codemail int,
primary key(cod),
constraint fk_codinstpessoa_usuarios foreign key (codinstpessoa) references inst_pessoa(cod) on update cascade on delete cascade,
constraint fk_codemail_usuarios foreign key (codemail) references email(cod) on update cascade on delete cascade,
constraint fk_codadm_usuarios foreign key (codadm) references admnistrador(cod) on update cascade on delete cascade);

/* REMOVIDO
create table possui(
cod int not null auto_increment,
fkequipamento int not null, 
fksoftwares int, 
primary key (cod),
constraint fk_softwares_possui foreign key (fksoftwares) references softwares (cod) on delete cascade on update cascade,
constraint fk_equipamento_possui foreign key (fkequipamento) references equipamentos (cod) on delete cascade on update cascade);
*/

create table doa_recebe(
cod int not null auto_increment,
codequipamento int,
codinstpessoa int,

/*ADD AO MODELO*/
codtransporte int,
 
primary key (cod),
constraint fk_transporte_doarecebe foreign key (codtransporte) references transporte_equip(cod) on delete cascade on update cascade,
constraint fk_equipamento_doarecebe foreign key (codequipamento) references equipamentos (cod) on update cascade on delete cascade,
constraint fk_instpessoa_doarecebe foreign key (codinstpessoa) references inst_pessoa(cod) on update cascade on delete cascade);