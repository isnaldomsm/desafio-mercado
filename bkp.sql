CREATE TABLE produtos
(
  id serial NOT NULL,
  nomeproduto character varying(250) NOT NULL,
  precoproduto numeric NOT NULL,
  descricaoproduto character varying(250) NOT NULL,
  tipocategoria numeric NOT NULL,
  CONSTRAINT produtos_pkey PRIMARY KEY (id)
);
CREATE TABLE tipoimposto
(
  id serial NOT NULL,
  nometipo character varying(250) NOT NULL,
  porcentagemimposto numeric NOT NULL,
  descricaotipo character varying(250) NOT NULL
);
ALTER TABLE produtos ADD COLUMN  quantidadeproduto integer;
CREATE TABLE vendas(
  id serial NOT NULL,
  produtoid numeric NOT NULL,
  quantidadeproduto numeric NOT NULL
);
ALTER TABLE vendas
ADD COLUMN nomeproduto varchar ;
ALTER TABLE vendas
ADD COLUMN produtopreco integer ;
ALTER TABLE produtos
ADD COLUMN produtoimposto numeric ;
ALTER TABLE vendas ADD COLUMN imposto numeric