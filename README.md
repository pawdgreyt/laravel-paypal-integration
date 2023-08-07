# Laravel PayPal Integration App

Welcome to the Laravel PayPal Integration App! This application demonstrates how to integrate PayPal payment functionality into your Laravel web application. With this integration, you can easily accept payments from your users using PayPal's secure and widely-used payment platform.

### Installation

1. Clone this repository to your local machine or server:

   ```bash
   git clone https://github.com/pawdgreyt/laravel-paypal-integration.git

2. Navigate to the project directory:

   ```bash
   cd your-paypal-integration-app

### Configuration

1. Create a PayPal developer account if you don't have one already
2. Generate API credentials (Client ID and Secret) for your PayPal application.
3. Copy the .env.example file to .env:

   ```bash
   cp .env.example .env

4. Open the .env file and update the following lines with your PayPal API credentials:

   ```bash
   PAYPAL_SANDBOX_CLIENT_ID=
   PAYPAL_SANDBOX_CLIENT_SECRET=

### Usage

1. Launch the Laravel development server:
   ```bash
   php artisan serve

2. Access the application in your web browser at http://127.0.0.1:8000/paypal/payment
