
INSERT INTO `tb_cargo` (`cd_cargo`, `nm_cargo`) VALUES
(1, 'Estocador'),
(2, 'Gerente'),
(3, 'Caixa');


INSERT INTO `tb_funcionario` (`cd_funcionario`, `nm_funcionario`, `nm_login`, `nm_senha`, `nr_cpf`, `dt_admissao`, `dt_nascimento`, `id_cargo`) VALUES
(1, 'João', 'estocador', '123', 1738219232, '2012-02-02', '2012-02-02', 1),
(2, 'Cleber', 'gerente', '123', 1738219232, '2012-02-02', '2012-02-02', 2),
(3, 'Silvio', 'caixa', '123', 1738219232, '2012-02-02', '2012-02-02', 3);

INSERT INTO `tb_tipo_produto` VALUES
('132F23E1', 'Leite Qualitá' ,'Leite 3L desnatado', 5.25, 6.00, 1);

INSERT INTO `tb_fornecedor` VALUES
(NULL, 'Friboi', '29392812');