create database if not exists db_stoxx;

use db_stoxx;

create table if not exists tb_produto_secao(
	cd_produto_secao int auto_increment primary key,
	nm_produto_secao varchar(25) not null
);

create table if not exists tb_tipo_produto(
	cod_barras varchar(45) not null primary key,
    nm_tipo_produto varchar(45) not null,
    desc_tipo_produto varchar(255),
    int_preco_compra int not null,
    int_preco_venda int not null,
    bool_kg_un boolean not null
);

create table if not exists tb_prateleira(
	cd_prateleira int auto_increment primary key,
    id_cod_barras varchar(45) not null,
    int_qtd int not null,
    foreign key(id_cod_barras) references tb_tipo_produto(cod_barras)
);

create table if not exists tb_fornecedor(
	cd_fornecedor int primary key auto_increment,
    nm_fornecedor varchar(45) not null,
    cnpj_fornecedor varchar(35) not null
);

create table if not exists tb_lote(
	cd_lote int auto_increment primary key,
    id_cod_barras varchar(45) not null,
    int_qtd int not null,
    dt_fabricacao date not null,
    dt_validade date not null,
    id_fornecedor int not null,
    foreign key(id_cod_barras) references tb_tipo_produto(cod_barras),
    foreign key(id_fornecedor) references tb_fornecedor(cd_fornecedor)
);

create table if not exists tb_cargo(
	cd_cargo int auto_increment primary key,
    nm_cargo varchar(30) not null
);

create table if not exists tb_funcionario(
	cd_funcionario int auto_increment primary key,
    nm_funcionario varchar(50) not null,
    nm_login varchar(45) not null,
    nm_senha varchar(35) not null,
    nr_cpf int not null,
    dt_admissao date not null,
    dt_nascimento date not null,
    id_cargo int
);

create table if not exists tb_log_movimentacao(
	cd_log_movimentacao int auto_increment primary key,
    vl_qtd int not null,
    id_lote int not null,
    id_funcionario int not null,
    foreign key(id_lote) references tb_lote(cd_lote),
    foreign key(id_funcionario) references tb_funcionario(cd_funcionario)
);

create table if not exists tb_produto(
	cd_produto int auto_increment primary key,
    nr_qtd int not null,
    id_lote int not null,
    foreign key(id_lote) references tb_lote(cd_lote)
);

create table if not exists tb_metodo_pagamento(
    cd_metodo_pagamento int auto_increment primary key,
    nm_metodo_pagamento varchar(25) not null
);
create table if not exists tb_log_venda(
	cd_log_venda int auto_increment primary key,
    vl_total decimal(5,2) not null,
    vl_troco decimal(5,2) not null,
    id_funcionario int not null,
    id_metodo_pagamento int not null,
    
    foreign key(id_funcionario) references tb_funcionario(cd_funcionario),
    foreign key(id_metodo_pagamento) references tb_metodo_pagamento(cd_metodo_pagamento)
);

create table if not exists tb_venda_itens(
	cd_venda_item int auto_increment primary key,
    id_log_venda int not null,
    id_tipo_produto varchar(45) not null,
    id_tipo_produto int not null,
    nr_qtd int not null,
    
    foreign key(id_log_venda) references tb_log_venda(cd_log_venda),
    foreign key(id_tipo_produto) references tb_tipo_produto(cod_barras)
);

	