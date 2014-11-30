
CREATE TABLE pessoas (
  idPessoa INTEGER NOT NULL AUTO_INCREMENT,
  nome TINYTEXT NOT NULL,
  dataNascimento DATE NOT NULL,
  cpf TINYTEXT,
  rg TINYTEXT,
  email TINYTEXT,
  telefone TINYTEXT,
  observacao TEXT,
  PRIMARY KEY(idPessoa)
);

CREATE TABLE turnos (
  idTurno INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome TINYTEXT,
  PRIMARY KEY(idTurno)
);

CREATE TABLE casos (
  idCaso INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  chaveAntiga TINYTEXT,
  demanda TINYTEXT,
  dataAbertura DATE NULL,
  dataFechamento DATE NULL,
  permissaoPesquisa BOOL NULL,
  observacao TINYTEXT,
  PRIMARY KEY(idCaso)
);

-- ATENÇÃO: 'username' e 'password' são convenções do Cake
-- NÃO pode substituir por português
CREATE TABLE funcionarios (
  pessoas_idPessoa INTEGER NOT NULL,
  username VARCHAR(32) NOT NULL,
  password VARCHAR(255) NOT NULL,
  supervisor BOOL NULL,
  ativo BOOL NULL,
  area TINYTEXT NOT NULL,
  dataEntrada DATE NULL,
  dataSaida DATE NULL,
  PRIMARY KEY(pessoas_idPessoa),
  INDEX funcionarios_FKIndex1(pessoas_idPessoa),
  UNIQUE(username),
  FOREIGN KEY(pessoas_idPessoa)
    REFERENCES pessoas(idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

-- CREATE TABLE users (
--   idUser INTEGER NOT NULL,
--   username VARCHAR(32) NOT NULL,
--   password VARCHAR(255) NOT NULL
--   INDEX users_
-- );

CREATE TABLE clientes (
  pessoas_idPessoa INTEGER NOT NULL,
  chaveAntiga TINYTEXT,
  cor TINYTEXT,
  genero TINYTEXT,
  nomeSocial TINYTEXT,
  estadoCivil ENUM('solteiro', 'casado', 'divorciado', 'viuvo'),
  dataCadastro DATE NULL,
  PRIMARY KEY(pessoas_idPessoa),
  INDEX clientes_FKIndex1(pessoas_idPessoa),
  FOREIGN KEY(pessoas_idPessoa)
    REFERENCES pessoas(idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE acompanhamentos (
  idAcompanhamento INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  casos_idCaso INTEGER UNSIGNED NOT NULL,
  dataAcompanhamento DATE NULL,
  atendimento TINYTEXT,
  observacao TINYTEXT,
  PRIMARY KEY(idAcompanhamento),
  INDEX acompanhamentos_FKIndex1(casos_idCaso),
  FOREIGN KEY(casos_idCaso)
    REFERENCES casos(idCaso)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE familias (
  clientes_pessoas_idPessoa INTEGER NOT NULL,
  Familia TINYTEXT,
  INDEX familia_FKIndex1(clientes_pessoas_idPessoa),
  FOREIGN KEY(clientes_pessoas_idPessoa)
    REFERENCES clientes(pessoas_idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE escolaridades (
  clientes_pessoas_idPessoa INTEGER NOT NULL,
  situacaoEscolar ENUM('Sem Ensino', 'Ensino Fundamental Incompleto',  'Ensino Fundamental Completo', 'Ensino Médio Incompleto', 'Ensino Médio Completo', 'Bacharelado Incompleto', 'Bacharelado Completo',  'Mestrado Incompleto', 'Mestrado Completo', 'Doutorado Incompleto',  'Doutorado Completo'),
  tipoInstituicao BOOL NULL,
  nomeInstituicao TINYTEXT,
  turno TINYTEXT,
  observacao TINYTEXT,
  INDEX escolaridades_FKIndex1(clientes_pessoas_idPessoa),
  FOREIGN KEY(clientes_pessoas_idPessoa)
    REFERENCES clientes(pessoas_idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE turnos_das_pessoas (
  turnos_idTurno INTEGER UNSIGNED NOT NULL,
  pessoas_idPessoa INTEGER NOT NULL,
  PRIMARY KEY(turnos_idTurno, pessoas_idPessoa),
  INDEX turnos_has_pessoas_FKIndex1(turnos_idTurno),
  INDEX turnos_has_pessoas_FKIndex2(pessoas_idPessoa),
  FOREIGN KEY(turnos_idTurno)
    REFERENCES turnos(idTurno)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(pessoas_idPessoa)
    REFERENCES pessoas(idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE casos_dos_clientes (
  casos_idCaso INTEGER UNSIGNED NOT NULL,
  clientes_pessoas_idPessoa INTEGER NOT NULL,
  PRIMARY KEY(casos_idCaso, clientes_pessoas_idPessoa),
  INDEX casos_has_clientes_FKIndex1(casos_idCaso),
  INDEX casos_has_clientes_FKIndex2(clientes_pessoas_idPessoa),
  FOREIGN KEY(casos_idCaso)
    REFERENCES casos(idCaso)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(clientes_pessoas_idPessoa)
    REFERENCES clientes(pessoas_idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE funcionarios_dos_acompanhamentos (
  funcionarios_pessoas_idPessoa INTEGER NOT NULL,
  acompanhamentos_idAcompanhamento INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(funcionarios_pessoas_idPessoa, acompanhamentos_idAcompanhamento),
  INDEX funcionarios_has_acompanhamentos_FKIndex1(funcionarios_pessoas_idPessoa),
  INDEX funcionarios_has_acompanhamentos_FKIndex2(acompanhamentos_idAcompanhamento),
  FOREIGN KEY(funcionarios_pessoas_idPessoa)
    REFERENCES funcionarios(pessoas_idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(acompanhamentos_idAcompanhamento)
    REFERENCES acompanhamentos(idAcompanhamento)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE funcionarios_dos_casos (
  funcionarios_pessoas_idPessoa INTEGER NOT NULL,
  casos_idCaso INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(funcionarios_pessoas_idPessoa, casos_idCaso),
  INDEX funcionarios_has_casos_FKIndex1(funcionarios_pessoas_idPessoa),
  INDEX funcionarios_has_casos_FKIndex2(casos_idCaso),
  FOREIGN KEY(funcionarios_pessoas_idPessoa)
    REFERENCES funcionarios(pessoas_idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(casos_idCaso)
    REFERENCES casos(idCaso)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE rendas (
  clientes_pessoas_idPessoa INTEGER NOT NULL,
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
  INDEX rendas_FKIndex1(clientes_pessoas_idPessoa),
  FOREIGN KEY(clientes_pessoas_idPessoa)
    REFERENCES clientes(pessoas_idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE saudes (
  clientes_pessoas_idPessoa INTEGER NOT NULL,
  acessoSaude BOOL NULL,
  gestante BOOL NULL,
  tomaMedicacao BOOL NULL,
  observacao TINYTEXT,
  INDEX saudes_FKIndex1(clientes_pessoas_idPessoa),
  FOREIGN KEY(clientes_pessoas_idPessoa)
    REFERENCES clientes(pessoas_idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE moradias (
  clientes_pessoas_idPessoa INTEGER NOT NULL,
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
  INDEX moradias_FKIndex1(clientes_pessoas_idPessoa),
  FOREIGN KEY(clientes_pessoas_idPessoa)
    REFERENCES clientes(pessoas_idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);
