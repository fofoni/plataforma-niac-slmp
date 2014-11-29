CREATE TABLE Pessoa (
  idPessoa INTEGER NOT NULL AUTO_INCREMENT,
  nome VARCHAR NOT NULL,
  dataNascimento DATE NOT NULL,
  cpf INTEGER NOT NULL,
  rg INTEGER NOT NULL,
  email VARCHAR NULL,
  telefone INTEGER NULL,
  observacao VARCHAR NULL,
  PRIMARY KEY(idPessoa)
);

CREATE TABLE Turno (
  idTurno INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR NULL,
  PRIMARY KEY(idTurno)
);

CREATE TABLE Caso (
  idCaso INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  chaveAntiga VARCHAR NULL,
  demanda VARCHAR NULL,
  dataAbertura DATE NULL,
  dataFechamento DATE NULL,
  permissaoPesquisa BOOL NULL,
  observacao VARCHAR NULL,
  PRIMARY KEY(idCaso)
);

CREATE TABLE Funcionario (
  Pessoa_idPessoa INTEGER NOT NULL,
  supervisor BOOL NULL,
  ativo BOOL NULL,
  area VARCHAR NOT NULL,
  dataEntrada DATE NULL,
  dataSaida DATE NULL,
  PRIMARY KEY(Pessoa_idPessoa),
  INDEX Funcionario_FKIndex1(Pessoa_idPessoa),
  FOREIGN KEY(Pessoa_idPessoa)
    REFERENCES Pessoa(idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE Cliente (
  Pessoa_idPessoa INTEGER NOT NULL,
  chaveAntiga VARCHAR NULL,
  cor VARCHAR NULL,
  genero VARCHAR NULL,
  nomeSocial VARCHAR NULL,
  estadoCivil ENUM NULL,
  dataCadastro DATE NULL,
  PRIMARY KEY(Pessoa_idPessoa),
  INDEX Cliente_FKIndex1(Pessoa_idPessoa),
  FOREIGN KEY(Pessoa_idPessoa)
    REFERENCES Pessoa(idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE Acompanhamento (
  idAcompanhamento INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Caso_idCaso INTEGER UNSIGNED NOT NULL,
  dataAcompanhamento DATE NULL,
  atendimento VARCHAR NULL,
  observacao VARCHAR NULL,
  PRIMARY KEY(idAcompanhamento),
  INDEX Acompanhamento_FKIndex1(Caso_idCaso),
  FOREIGN KEY(Caso_idCaso)
    REFERENCES Caso(idCaso)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE Familia (
  Cliente_Pessoa_idPessoa INTEGER NOT NULL,
  Familia VARCHAR NULL,
  INDEX familia_FKIndex1(Cliente_Pessoa_idPessoa),
  FOREIGN KEY(Cliente_Pessoa_idPessoa)
    REFERENCES Cliente(Pessoa_idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE Escolaridade (
  Cliente_Pessoa_idPessoa INTEGER NOT NULL,
  situacaoEscolar ENUM NULL,
  tipoInstituicao BOOL NULL,
  nomeInstituicao VARCHAR NULL,
  turno VARCHAR NULL,
  observacao VARCHAR NULL,
  INDEX Escolaridade_FKIndex1(Cliente_Pessoa_idPessoa),
  FOREIGN KEY(Cliente_Pessoa_idPessoa)
    REFERENCES Cliente(Pessoa_idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE TurnoDaPessoa (
  Turno_idTurno INTEGER UNSIGNED NOT NULL,
  Pessoa_idPessoa INTEGER NOT NULL,
  PRIMARY KEY(Turno_idTurno, Pessoa_idPessoa),
  INDEX Turno_has_Pessoa_FKIndex1(Turno_idTurno),
  INDEX Turno_has_Pessoa_FKIndex2(Pessoa_idPessoa),
  FOREIGN KEY(Turno_idTurno)
    REFERENCES Turno(idTurno)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Pessoa_idPessoa)
    REFERENCES Pessoa(idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE CasoDoCliente (
  Caso_idCaso INTEGER UNSIGNED NOT NULL,
  Cliente_Pessoa_idPessoa INTEGER NOT NULL,
  PRIMARY KEY(Caso_idCaso, Cliente_Pessoa_idPessoa),
  INDEX Caso_has_Cliente_FKIndex1(Caso_idCaso),
  INDEX Caso_has_Cliente_FKIndex2(Cliente_Pessoa_idPessoa),
  FOREIGN KEY(Caso_idCaso)
    REFERENCES Caso(idCaso)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Cliente_Pessoa_idPessoa)
    REFERENCES Cliente(Pessoa_idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE FuncionarioDoAcompanhamento (
  Funcionario_Pessoa_idPessoa INTEGER NOT NULL,
  Acompanhamento_idAcompanhamento INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(Funcionario_Pessoa_idPessoa, Acompanhamento_idAcompanhamento),
  INDEX Funcionario_has_Acompanhamento_FKIndex1(Funcionario_Pessoa_idPessoa),
  INDEX Funcionario_has_Acompanhamento_FKIndex2(Acompanhamento_idAcompanhamento),
  FOREIGN KEY(Funcionario_Pessoa_idPessoa)
    REFERENCES Funcionario(Pessoa_idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Acompanhamento_idAcompanhamento)
    REFERENCES Acompanhamento(idAcompanhamento)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE FuncionarioDoCaso (
  Funcionario_Pessoa_idPessoa INTEGER NOT NULL,
  Caso_idCaso INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(Funcionario_Pessoa_idPessoa, Caso_idCaso),
  INDEX Funcionario_has_Caso_FKIndex1(Funcionario_Pessoa_idPessoa),
  INDEX Funcionario_has_Caso_FKIndex2(Caso_idCaso),
  FOREIGN KEY(Funcionario_Pessoa_idPessoa)
    REFERENCES Funcionario(Pessoa_idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Caso_idCaso)
    REFERENCES Caso(idCaso)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE Renda (
  Cliente_Pessoa_idPessoa INTEGER NOT NULL,
  aposentado BOOL NULL,
  situacaoEmpregaticia VARCHAR NULL,
  emprego VARCHAR NULL,
  vinculo BOOL NULL,
  renda FLOAT NULL,
  recebeBeneficio BOOL NULL,
  beneficioSocial VARCHAR NULL,
  pagaPensao BOOL NULL,
  recebePensao BOOL NULL,
  observacao VARCHAR NULL,
  INDEX Renda_FKIndex1(Cliente_Pessoa_idPessoa),
  FOREIGN KEY(Cliente_Pessoa_idPessoa)
    REFERENCES Cliente(Pessoa_idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE Saude (
  Cliente_Pessoa_idPessoa INTEGER NOT NULL,
  acessoSaude BOOL NULL,
  gestante BOOL NULL,
  tomaMedicacao BOOL NULL,
  observacao VARCHAR NULL,
  INDEX Saude_FKIndex1(Cliente_Pessoa_idPessoa),
  FOREIGN KEY(Cliente_Pessoa_idPessoa)
    REFERENCES Cliente(Pessoa_idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE Moradia (
  Cliente_Pessoa_idPessoa INTEGER NOT NULL,
  possuiMoradia BOOL NULL,
  bairro INTEGER NULL,
  rua VARCHAR NULL,
  numero INTEGER NULL,
  cep INTEGER NULL,
  complemento VARCHAR NULL,
  pontoReferencia VARCHAR() NULL,
  tempoMoradia VARCHAR NULL,
  situacaoMoradia VARCHAR NULL,
  saneamentoBasico INTEGER NULL,
  luzEletrica INTEGER NULL,
  aguaTratada INTEGER NULL,
  internet INTEGER NULL,
  quantidadeMoradores INTEGER NULL,
  observacao VARCHAR NULL,
  INDEX Moradia_FKIndex1(Cliente_Pessoa_idPessoa),
  FOREIGN KEY(Cliente_Pessoa_idPessoa)
    REFERENCES Cliente(Pessoa_idPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


