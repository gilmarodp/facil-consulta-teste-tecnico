<p><a href="https://facilconsulta.com.br" target="_blank"><img src="https://facilconsulta.com.br/site/componentes/footer/assets/img/logo.png" width="150" alt="Fácil Consulta Logo"></a></p>

## Teste Técnico - Fácil Consulta

### Descrição
Teste técnico para a vaga de Pessoa Desenvolvedora PHP Pleno na Fácil Consulta. O teste
consiste em criar uma API que será integrada posteriormente com um front-end densenolvido
por outro time. O objetivo principal é testar meus conhecimentos técnicos para a vaga.

### Principais Tecnologias Utilizadas
- Laravel 11;
- Laravel Sail;
- MySQL 8;
- JWT (utilizando a biblioteca tymon/jwt-auth).

### Recursos da Estrutura do Projeto
O projeto foi desenvolvido utilizando o padrão do framework Laravel da forma mais
enxuta possível. A única adaptação foi o uso da biblioteca tymon/jwt-auth para autenticação
de usuários com JWT (JSON Web Tokens). Os recursos utilizados foram:

- `Controllers`: contém os controladores da aplicação;
- `Routes`: contém as rotas da aplicação;
- `Requests`: contém as validações dos dados recebidos pela aplicação;
- `Models`: contém os modelos da aplicação;
- `Migrations`: contém as migrações do banco de dados;
- `Seeders`: contém os seeders do banco de dados;
- `Resources`: contém os recursos visuais para api da aplicação;

### Instalação
Finalmente, para fazer a instalação do projeto em sua máquina, siga os passos abaixo:

1. Clone o repositório:
```bash
git clone https://github.com/gilmarodp/facil-consulta-teste-tecnico.git
```

2. Entre na pasta do projeto:
```bash
cd facil-consulta-teste-tecnico
```

3. Instale as dependências do projeto:
```bash
composer install
```

4. Copie o arquivo `.env.example` para `.env`:
```bash
cp .env.example .env
```

5. Gere a chave da aplicação:
```bash
php artisan key:generate
```

6. Gere a chave secreta para o JWT:
```bash
php artisan jwt:secret
```

7. Suba o container do Docker:
```bash
./vendor/bin/sail up -d
```

8. Execute as migrações do banco de dados:
```bash
./vendor/bin/sail artisan migrate
```

9. Execute os seeders do banco de dados:
```bash
./vendor/bin/sail artisan db:seed
```

10. Teste a aplicação no Postman:

[<img src="https://run.pstmn.io/button.svg" alt="Run In Postman" style="width: 128px; height: 32px;">](https://nova-versao-fc-teste.postman.co/workspace/Teste-Facil-Consulta~8e0c2ff7-b96f-46ad-9b34-d92e10ab9438/collection/23818071-1ee3f4ef-d351-45e2-a38f-1b4940c3ad58?action=share&creator=23818071)

11. Acesse a aplicação no postman ou no navegador:
- http://127.0.0.1

### Rotas da Aplicação
A aplicação possui as seguintes rotas:

**Autenticação**:
- `POST /api/login`: rota para autenticação de usuários;
- `GET /api/user`: rota para exibir os dados do usuário autenticado;

**Cidades**:
- `GET /api/cidades`: rota para exibir todas as cidades cadastradas;

**Médicos**:
- `GET /api/medicos`: rota para exibir todos os médicos cadastrados;
- `GET /api/cidades/{id_cidade}/medicos`: rota para exibir todos os médicos cadastrados em uma cidade específica;
- `POST /api/medicos`: rota para cadastrar um médico;

**Pacientes**:
- `POST /api/pacientes`: rota para cadastrar um paciente;
- `PUT /api/pacientes/{id_paciente}`: rota para atualizar um paciente;
- `GET /api/medicos/{id_medico}/pacientes`: rota para exibir todos os pacientes cadastrados em um médico específico;

**Consultas**:
- `POST /api/medicos/consulta`: rota para agendar uma consulta;

**Endpoints além dos solicitados**:
- `GET /api/consultas`: rota para exibir todas as consultas cadastradas;
- `GET /api/pacientes`: rota para exibir todos os pacientes cadastrados;
- `POST /api/logout`: rota para deslogar o usuário autenticado;

### Credenciais de Acesso
Para acessar as rotas protegidas, utilize as seguintes credenciais:
```
E-mail: christian.ramires@example.com
Senha: password

Ou

E-mail: admin@email.com
Senha: password
```

### Considerações Importantes
Para acessar as rotas protegidas, é necessário enviar o token JWT no cabeçalho da requisição.
O token JWT é gerado ao fazer login na rota `/api/login`. O token JWT deve ser enviado no
cabeçalho da requisição com a chave `Authorization` e o valor `Bearer {token}`.

### Considerações Finais
Segui as instruções do teste técnico da melhor forma possível, utilizando o framework Laravel
da forma mais enxuta possível. Me senti tentado a adicionar mais recursos, mas preferi seguir
o que foi solicitado. Agradeço a oportunidade de participar do processo seletivo e
fico à disposição para maiores esclarecimentos.
