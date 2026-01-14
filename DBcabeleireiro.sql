DROP TABLE TblUsuario;

CREATE TABLE TblUsuario (
    IdUsuario INT AUTO_INCREMENT PRIMARY KEY,
    Email VARCHAR(50),
    Senha VARCHAR(255),
    Telefone VARCHAR(11)
);
INSERT INTO TblUsuario (Email, Senha, Telefone)
VALUES (
  'fernando.assuncao@gmail.com',
  'HASH_GERADO_AQUI',
  '11974536104'
);
