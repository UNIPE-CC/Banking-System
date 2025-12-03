# Banking-System
## Sistema bancário 

- Login para controle de usuários.
- O sistema terá um administrador e clientes. 
- O administrador será responsável em manter os novos clientes.
- Os clientes poderam depositar e sacar.
- O cliente não poderá sacar além do saldo.
- o Cliente pode verificar o saldo
# 🏦 Mister Bank
## 🎯 Tema do Projeto
- Sistema bancário simples, com controle de clientes e transações.

## 📝 Resumo dos desafios implementados

- CRUD completo de clientes: criar, ler, atualizar e deletar registros na página do administrador.
- Painel do cliente para verificar saldo, depositar e sacar dinheiro.
- Controle de login: diferencia administrador e clientes.
- Aplicação com XAMPP (Apache + MySQL) para armazenamento dos dados.

- Tecnologias utilizadas:
    - HTML e CSS para o front-end
    - PHP para o back-end
    - MySQL como banco de dados

## ⚡ Instruções para rodar o projeto

_ Salve o projeto no caminho correto no XAMPP:
    - C:\xampp\htdocs\
- Repositório: https://github.com/doglaska/Banking-System.git

1. Inicialize o Apache e o MySQL no XAMPP.

2. Abra o navegador e acesse:
http://localhost/aulaphp ou http://localhost:80/aulaphp

3. Selecione o projeto Banking-System e você será direcionado à página de login.

4. No painel do administrador, você pode:

 - Consultar/listar clientes

- Cadastrar novos clientes

- Editar clientes

- Excluir clientes

5. No painel do cliente, você pode:

- Verificar saldo 💰

- Depositar dinheiro 💵

- Sacar dinheiro (saldo não pode ficar negativo) 🏦

- Alterar senha 🔒

# 💾 Banco de Dados (MySQL)
### Tabela usuarios
```
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    tipo ENUM('admin','cliente') DEFAULT 'cliente'
);
```

### Tabela contas
```
CREATE TABLE contas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    saldo DECIMAL(10,2) DEFAULT 0,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);
```