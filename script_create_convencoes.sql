
--CREATE TABLE pessoas (
--  idPessoa INTEGER NOT NULL AUTO_INCREMENT,
--  nome TINYTEXT NOT NULL,
--  dataNascimento DATE NOT NULL,
--  cpf TINYTEXT,
--  rg TINYTEXT,
--  email TINYTEXT,
--  telefone TINYTEXT,
--  observacao TEXT,
--  PRIMARY KEY(idPessoa)
--);

CREATE TABLE turnos (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome TINYTEXT,
  PRIMARY KEY(id)
);

CREATE TABLE casos (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  chaveAntiga TINYTEXT,
  demanda TINYTEXT,
  dataAbertura DATE NULL,
  dataFechamento DATE NULL,
  permissaoPesquisa BOOL NULL,
  observacao TINYTEXT,
  PRIMARY KEY(id)
);

-- ATENÇÃO: 'username' e 'password' são convenções do Cake
-- NÃO pode substituir por português
CREATE TABLE funcionarios (
  id INTEGER NOT NULL AUTO_INCREMENT,
  nome TINYTEXT NOT NULL,
  dataNascimento DATE NOT NULL,
  cpf TINYTEXT,
  rg TINYTEXT,
  email TINYTEXT,
  telefone TINYTEXT,
  username VARCHAR(32) NOT NULL,
  password VARCHAR(255) NOT NULL,
  supervisor BOOL NULL,
  ativo BOOL NULL,
  area TINYTEXT NOT NULL,
  dataEntrada DATE NULL,
  dataSaida DATE NULL,
  PRIMARY KEY(id),
  UNIQUE(username)
);

-- CREATE TABLE users (
--   idUser INTEGER NOT NULL,
--   username VARCHAR(32) NOT NULL,
--   password VARCHAR(255) NOT NULL
--   INDEX users_
-- );

CREATE TABLE clientes (
  id INTEGER NOT NULL AUTO_INCREMENT,
  nome TINYTEXT NOT NULL,
  dataNascimento DATE NOT NULL,
  cpf TINYTEXT,
  rg TINYTEXT,
  email TINYTEXT,
  telefone TINYTEXT,
  chaveAntiga TINYTEXT,
  cor TINYTEXT,
  genero TINYTEXT,
  nomeSocial TINYTEXT,
  estadoCivil ENUM('solteiro', 'casado', 'divorciado', 'separado', 'viuvo'),
  dataCadastro DATE NULL,
  observacoes TEXT,
  buscaId INTEGER,
  buscaTexto TINYTEXT,
  PRIMARY KEY(id)
);

CREATE TABLE acompanhamentos (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  casos_id INTEGER UNSIGNED NOT NULL,
  dataAcompanhamento DATE NULL,
  atendimento TINYTEXT,
  observacao TINYTEXT,
  PRIMARY KEY(id),
  INDEX acompanhamentos_FKIndex1(casos_id),
  FOREIGN KEY(casos_id)
    REFERENCES casos(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE familias (
  clientes_id INTEGER NOT NULL,
  Familia TINYTEXT,
  INDEX familia_FKIndex1(clientes_id),
  FOREIGN KEY(clientes_id)
    REFERENCES clientes(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE escolaridades (
  clientes_id INTEGER NOT NULL,
  situacaoEscolar ENUM('Sem Ensino', 'Ensino Fundamental Incompleto',  'Ensino Fundamental Completo', 'Ensino Médio Incompleto', 'Ensino Médio Completo', 'Bacharelado Incompleto', 'Bacharelado Completo',  'Mestrado Incompleto', 'Mestrado Completo', 'Doutorado Incompleto',  'Doutorado Completo'),
  tipoInstituicao BOOL NULL,
  nomeInstituicao TINYTEXT,
  turno TINYTEXT,
  observacao TINYTEXT,
  INDEX escolaridades_FKIndex1(clientes_id),
  FOREIGN KEY(clientes_id)
    REFERENCES clientes(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE turnos_dos_funcionarios (
  turnos_id INTEGER UNSIGNED NOT NULL,
  id INTEGER NOT NULL,
  PRIMARY KEY(turnos_id, id),
  INDEX turnos_has_funcionarios_FKIndex1(turnos_id),
  INDEX turnos_has_funcionarios_FKIndex2(id),
  FOREIGN KEY(turnos_id)
    REFERENCES turnos(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(id)
    REFERENCES funcionarios(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE casos_dos_clientes (
  casos_id INTEGER UNSIGNED NOT NULL,
  clientes_id INTEGER NOT NULL,
  PRIMARY KEY(casos_id, clientes_id),
  INDEX casos_has_clientes_FKIndex1(casos_id),
  INDEX casos_has_clientes_FKIndex2(clientes_id),
  FOREIGN KEY(casos_id)
    REFERENCES casos(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(clientes_id)
    REFERENCES clientes(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE funcionarios_dos_acompanhamentos (
  funcionarios_id INTEGER NOT NULL,
  acompanhamentos_id INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(funcionarios_id, acompanhamentos_id),
  INDEX funcionarios_has_acompanhamentos_FKIndex1(funcionarios_id),
  INDEX funcionarios_has_acompanhamentos_FKIndex2(acompanhamentos_id),
  FOREIGN KEY(funcionarios_id)
    REFERENCES funcionarios(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(acompanhamentos_id)
    REFERENCES acompanhamentos(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE funcionarios_dos_casos (
  funcionarios_id INTEGER NOT NULL,
  casos_id INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(funcionarios_id, casos_id),
  INDEX funcionarios_has_casos_FKIndex1(funcionarios_id),
  INDEX funcionarios_has_casos_FKIndex2(casos_id),
  FOREIGN KEY(funcionarios_id)
    REFERENCES funcionarios(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(casos_id)
    REFERENCES casos(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE rendas (
  clientes_id INTEGER NOT NULL,
  aposentado BOOL NULL,
  situacaoEmpregaticia TINYTEXT,
  emprego TINYTEXT,
  vinculo BOOL NULL,
  renda FLOAT NULL,
  recebeBeneficio BOOL NULL,
  beneficioSocial TINYTEXT,
  pagaPensao BOOL NULL,
  recebePensao BOOL NULL,
  observacao TINYTEXT,
  INDEX rendas_FKIndex1(clientes_id),
  FOREIGN KEY(clientes_id)
    REFERENCES clientes(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE saudes (
  clientes_id INTEGER NOT NULL,
  acessoSaude BOOL NULL,
  gestante BOOL NULL,
  tomaMedicacao BOOL NULL,
  observacao TINYTEXT,
  INDEX saudes_FKIndex1(clientes_id),
  FOREIGN KEY(clientes_id)
    REFERENCES clientes(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE moradias (
  clientes_id INTEGER NOT NULL,
  possuiMoradia BOOL NULL,
  bairro INTEGER NULL,
  rua TINYTEXT,
  numero INTEGER NULL,
  cep INTEGER NULL,
  complemento TINYTEXT,
  pontoReferencia VARCHAR(255) NULL,
  tempoMoradia TINYTEXT,
  situacaoMoradia TINYTEXT,
  saneamentoBasico INTEGER NULL,
  luzEletrica INTEGER NULL,
  aguaTratada INTEGER NULL,
  internet INTEGER NULL,
  quantidadeMoradores INTEGER NULL,
  observacao TINYTEXT,
  INDEX moradias_FKIndex1(clientes_id),
  FOREIGN KEY(clientes_id)
    REFERENCES clientes(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);
