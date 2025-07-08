# 🚗✨ Rent A Car – Sistema de Aluguer de Viaturas em Laravel 💻🌍

Bem-vindo(a) ao repositório do **Rent A Car**, um projeto Laravel super simpático desenvolvido para facilitar a gestão de uma empresa de aluguer de carros! Seja bem-vindo ao código onde os carros encontram o mundo digital. 💙

---

## 🎯 Objetivo

Este projeto tem como missão criar uma plataforma completa para alugar viaturas online, com áreas separadas para **clientes** e **administradores**, tudo com muito carinho e código limpo. 😇

---

## 🧩 Funcionalidades

### 👤 Clientes
- Criar conta e fazer login 🔐
- Explorar catálogo de viaturas 🚗
- Fazer reservas com datas e ver preços 💸
- Consultar histórico de reservas 📅

### 🛠️ Administradores
- Gestão de viaturas (CRUD) 🛞
- Gestão de reservas 📋
- Acesso a estatísticas e painéis 📊
- Gestão de utilizadores 👥

---

## ⚙️ Tecnologias Utilizadas

| Tecnologia | Descrição |
|------------|-----------|
| 🐘 Laravel | Framework PHP back-end elegante |
| 🧵 Blade | Templates lindinhos e organizados |
| 🎨 Tailwind CSS | Estilização rapidinha e bonita |
| 🌐 MySQL | Base de dados robusta |
| 🧠 Eloquent ORM | Modelagem intuitiva e poderosa |
| 🔐 Laravel Breeze | Autenticação simples e eficaz |

---

## 📦 Instalação (Modo Desenvolvedor)

Siga os passos abaixo para colocar tudo a funcionar direitinho:

```bash
git clone https://github.com/teu-usuario/rent-a-car.git
cd rent-a-car
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
