create database hotel

create table cliente(
    id_cliente int primary key, 
    nome varchar(25),
    CPF int,
    e_mail varchar(25),
    senha varchar(12)
);

create table cartao(
    id_cartao int primary key,
    numero int,
    vencimento date,
    cod_seguranca int,
    bandeira varchar(25),
    id_cliente int,
    foreign key(id_cliente) references cliente(id_cliente)
);

create table endereco(
    id_endereco int primary key,
    logradouro varchar(25),
    cep int,
    numero int
);

create table hotel(
    id_hotel int primary key,
    nome varchar(25),
    id_endereco int,
    foreign key(id_endereco) references endereco(id_endereco)
);

create table quarto(
    id_quarto int primary key,
    disponibilidade int,
    preco int,
    qtd_quartos int,
    qtd_banheiros,
    metragem int,
    descricao varchar(250),
    id_hotel int,
    foreign key(id_hotel) references hotel(id_hotel)
);

create table aluga_quarto(
    id_aluga_quarto int primary key,
    id_cliente int,
    id_cartao int,
    id_quarto int,
    foreign key(id_cliente) references cliente(id_cliente),
    foreign key(id_cartao) references cartao(id_cartao),
    foreign key(id_quarto) references quarto(id_quarto),
    data_entrada date,
    data_saida date
);