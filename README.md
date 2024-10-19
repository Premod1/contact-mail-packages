

---

# Lopzy Contact

This package provides functionality for handling "Contact Us" form submissions. It saves the contact query to the database and sends an email to the address specified in the configuration file (`config/contact.php`).

## Installation

To install the package, run the following command:

```bash
composer require lopzy/contact:dev-main
```

## Configuration

After installing the package, you need to publish the configuration file. Run the following command:

```bash
php artisan vendor:publish --provider="Lopzy\Contact\ContactServiceProvider"
```

This will create a `config/contact.php` file where you can specify the email address that will receive contact form submissions.

Next, run the migration to create the necessary database table for storing contact queries:

```bash
php artisan migrate
```

## Usage

To use the contact form, include the following routes in your `web.php` file:

```php
use Lopzy\Contact\Http\Controllers\ContactController;

Route::get('contact', [ContactController::class, 'index']);
Route::post('contact', [ContactController::class, 'send']);
```

### Sending Data

When submitting the contact form, the following fields should be sent:

- `name`: The name of the sender
- `email`: The email address of the sender
- `message`: The message from the sender

The data will be saved to the database, and an email will be sent to the address specified in the `config/contact.php` file.

## License

This package is open-sourced software licensed under the [MIT license](LICENSE.md).

## Contributing

Contributions are welcome! Please submit a pull request or open an issue to discuss any changes.

## Support

For any issues or questions, please open an issue on GitHub.

- [GitHub Repository](https://github.com/Premod1/contact-mail-packages)
- [LinkedIn](https://www.linkedin.com/in/premod-suraweera-968916216/)

---

This README provides all the necessary information for installing, configuring, and using the package, as well as contributing and finding support.
