# PhpZipExtractor

A simple PHP script to extract `.zip` files using the [PclZip](http://www.phpconcept.net/pclzip/) library.

## 🧰 Features

- Extract any `.zip` archive using pure PHP
- No external dependencies required
- Minimal setup

## 📦 Requirements

- PHP 5.2+ (compatible with most versions)
- Web server or CLI environment
- `pclzip.lib.php` included (bundled in repo)

## 🚀 Usage

1. Clone the repository:

```bash
git clone git@github.com:Ahmadrezagh/PhpZipExtractor.git
cd PhpZipExtractor
```

2. Place your `.zip` file in the same directory and rename it to `file.zip`.

3. Run the extractor via CLI or browser:

### Via CLI:
```bash
php extract.php
```

### Via Browser:
Open `extract.php` in your browser (ensure your server is running).

## 📁 Example

```php
<?php
require __DIR__ . '/pclzip.lib.php';
$zip = new PclZip('file.zip');

if ($zip->extract() == 0) {
    die("Error: " . $zip->errorInfo(true));
} else {
    echo "Extraction successful!";
}
```

## 📝 Notes

- Extraction will occur in the current directory.
- Errors will be displayed with helpful messages.

## 📜 License

This project is licensed under the MIT License. See [LICENSE](LICENSE) for details.

## 👤 Author

**Ahmadreza Gh**  
GitHub: [@Ahmadrezagh](https://github.com/Ahmadrezagh)

---

Feel free to contribute or open issues for feature suggestions!
