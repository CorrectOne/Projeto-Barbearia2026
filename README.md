# 💈 Sistema Web para Barbearia

Este projeto é um sistema web desenvolvido em **PHP** com **MySQL**, utilizando o padrão de arquitetura **MVC (Model-View-Controller)**.  
O objetivo do sistema é servir como base para a organização e autenticação de usuários em um ambiente de barbearia.

O projeto foi desenvolvido com foco em **aprendizado acadêmico**, boas práticas de backend e segurança básica de autenticação.

---

## 🚀 Funcionalidades

- ✅ Tela de login
- ✅ Cadastro de usuários
- ✅ Senhas protegidas com **hash (bcrypt)**
- ✅ Autenticação de usuários
- ✅ Controle de sessão
- ✅ Arquitetura MVC
- ✅ Conexão com banco de dados MySQL

---

## 🧱 Arquitetura MVC

O projeto segue o padrão **MVC**, separando responsabilidades:

- **Model**  
  Responsável pela lógica de negócio e acesso ao banco de dados.

- **View**  
  Responsável pelas páginas HTML e formulários.

- **Controller**  
  Responsável por receber as requisições, processar dados e definir o fluxo da aplicação.

---

## 📁 Estrutura de Pastas
```
Barbearia/
├── config/
│ └── conexao.php
│
├── controller/
│ ├── LoginController.php
│ ├── CadastroController.php
│ └── LogoutController.php
│
├── model/
│ └── UsuarioModel.php
│
├── view/
│ ├── login.php
│ ├── cadastro.php
│ └── home.php
│
├── style/
│ └── style.css
│
├── DBcabeleireiro.sql
└── index.php
```

---

## 🔐 Segurança

- As senhas são armazenadas utilizando:
  ```php
    password_hash($senha, PASSWORD_DEFAULT);
A autenticação é feita com:

    password_verify($senha, $hash);
O sistema não armazena senhas em texto puro.

## 🛠️ Tecnologias Utilizadas
PHP 8+

MySQL

HTML5

CSS3

Padrão MVC

XAMPP

## ⚙️ Como Executar o Projeto
Clone este repositório:

git clone https://github.com/CorrectOne/Barbearia.git
Importe o banco de dados:

Arquivo: DBcabeleireiro.sql

Configure a conexão:

Arquivo: config/conexao.php

Inicie o servidor local (XAMPP/WAMP)

Acesse no navegador:

http://localhost/Barbearia
## 🎓 Finalidade Acadêmica
Este projeto foi desenvolvido como parte dos estudos em Desenvolvimento de Sistemas, com foco em backend, banco de dados e organização de código.

## 📌 Próximas melhorias planejadas

Funcao de agendamento de cortes

Niveis de permisssoes entre Admnistradores e Clientes

Verificações 

## 👨‍💻 Autor
Projeto desenvolvido para fins educacionais.
