# User-Validation-System

This is a simple project I built to experiment and understand how the email verification and password reset flows work in Laravel 12.

### Goal
The main purpose of this repository is just for testing and learning. I wanted to see how Laravel Breeze handles authentication under the hood and how to customize the logic to make the user experience smoother.

### Tech Stack:
- Laravel 12
- Tailwind CSS
- Alpine.js
- Mailtrap (for testing)

### What's Inside?
1. **Account Creation**: Users can sign up for a new account.
2. **Email Verification**: After signing up, the system sends a verification link via Mailtrap.
3. **Login System**: Users can log in only after their email is verified.
4. **Forgot Password**: A simple way for users to recover their account if they forget their password.

### How to Run:

1. **Clone the repo:**
```bash
git clone https://github.com/deandamanik/user-validation-system.git
cd user-validation-system
```
2. **Install dependencies:**
```bash
composer install
npm install && npm run dev
```
3. **Setup environment:**
```bash
cp .env.example .env
php artisan key:generate
```
Note: Don't forget to configure your Database and Mailtrap settings in the .env file.

4. **Run migrations:**
```bash
php artisan migrate
```
5. **Start server:**
```bash
php artisan serve
```

