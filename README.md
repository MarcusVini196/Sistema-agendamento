🛎️ Sistema de Agendamentos & Prestadores de Serviço

Plataforma web desenvolvida com Laravel 10 e Blade, voltada para profissionais autônomos e pequenos prestadores de serviço (salões de beleza, personal trainers, massoterapeutas etc.).
Clientes poderão visualizar profissionais, acessar horários disponíveis e realizar agendamentos.
Profissionais terão acesso a um painel completo para gerenciar serviços e agenda.
Administradores controlam todo o sistema através de um painel dedicado.

🚀 Tecnologias Utilizadas
Backend

PHP 8.1+

Laravel 10

Auth nativo / Laravel Breeze

MySQL / MariaDB

Frontend

Blade Templates

Bootstrap 5 (ou Tailwind)

JavaScript

Ferramentas

Composer

Git/GitHub

Artisan CLI

⚙️ Instalação do Projeto

⚠️ Importante:
O código do projeto está na branch master, pois a branch main contém apenas arquivos padrão.
Portanto, clone com o comando abaixo:

1️⃣ Clone o repositório (branch master):
git clone -b master https://github.com/seu-usuario/seu-projeto.git
cd seu-projeto

2️⃣ Instale dependências:
composer install

3️⃣ Configure o arquivo .env:
cp .env.example .env


Configure no .env:

DB_DATABASE

DB_USERNAME

DB_PASSWORD

4️⃣ Gere a chave da aplicação:
php artisan key:generate

5️⃣ Rode as migrations:
php artisan migrate

6️⃣ Inicie o servidor local:
php artisan serve

📄 Funcionalidades
👤 Área do Cliente

Cadastro e login

Atualização de perfil

Visualização de profissionais e categorias

Agendamento de horários (em construção)

Histórico de agendamentos

🧑‍🔧 Área do Profissional

Cadastro e login

Cadastro da especialidade

Configuração de horários disponíveis

Gestão de serviços (nome, preço, duração)

Aprovação e cancelamento de agendamentos

Relatório mensal (em breve)

🛠️ Painel Administrativo

Gerenciamento de usuários (admin / profissional / cliente)

Auditoria de ações

Dashboard com métricas

Configuração geral do sistema

🧱 Estrutura do Banco de Dados
Tabela: users
$table->id();
$table->string('name');
$table->enum('nivel_acesso', ['admin', 'profissional', 'cliente'])->default('cliente');
$table->string('email')->unique();
$table->string('password');

$table->string('telefone')->nullable();
$table->string('cpf')->unique()->nullable();
$table->string('avatar')->nullable();
$table->string('especialidade')->nullable();
$table->text('bio')->nullable();
$table->string('cidade')->nullable();
$table->string('estado')->nullable();

$table->boolean('ativo')->default(true);
$table->timestamp('last_login_at')->nullable();
$table->ipAddress('last_login_ip')->nullable();

$table->timestamp('email_verified_at')->nullable();
$table->rememberToken();
$table->timestamps();

📡 Rotas Principais
Público
GET  /               → Página inicial
GET  /login          → Login
GET  /register       → Cadastro

Cliente
GET  /cliente/dashboard
GET  /cliente/agendamentos
GET  /profissionais

Profissional
GET  /profissional/dashboard
GET  /profissional/servicos
GET  /profissional/agendamentos

Admin
GET  /admin/dashboard
GET  /admin/users
GET  /admin/auditoria

📅 Roadmap
Versão 0.2.0 (próxima)

Sistema de agendamento completo

Calendário de horários

Validação de disponibilidade

Versão 0.3.0

Pagamentos via PIX / Mercado Pago

Comprovante de agendamento

Versão 0.4.0

Dashboard avançado

Relatórios mensais

Versão 1.0.0

Deploy completo

Ajustes finais e otimizações

🤝 Como Contribuir

Faça um fork do repositório

Crie uma branch nova:

git checkout -b feature/minha-feature


Commit:

git commit -m "feat: adiciona nova funcionalidade"


Push:

git push origin feature/minha-feature


Abra um Pull Request

📝 Licença

Este projeto está licenciado sob a licença MIT.

👨‍💻 Autor

Marcus Vinicius
GitHub: https://github.com/MarcusVini196

E-mail: agenciamv.orcamentos@gmail.com
