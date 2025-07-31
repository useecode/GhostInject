# GhostInject

**GhostInject** is a lightweight PHP-based dynamic backlink injector designed to mirror and distribute backlink content across multiple domains via remote-controlled `.txt` files.

This tool is primarily created for educational and SEO testing purposes.

---

## 🔍 Features

- Pull remote `.txt` file content and inject as HTML.
- Dual fallback: `file_get_contents()` or `cURL`.
- Automatically maps `.txt` files based on domain names.
- Silent failure handling – no error display if fetching fails.
- Perfect for bulk backlink injection from a single source.

---

## 🛠️ Usage

### 1. Install the PHP script into your domain’s `public_html` or appropriate web root.

```php
<?php
ghostinject($_SERVER['HTTP_HOST']);
?>
```

Replace the base URL in the script to your hosted `.txt` file folder.

---

## ✅ Example

If your domain is `www.onedayhacker.co.id`, GhostInject will look for:

```
https://your-remote-url.com/backlinks/onedayhacker-co-id.txt
```

---

## 📜 License

MIT License

---

## ⚠️ Disclaimer

This tool is intended for **educational and SEO automation analysis** only. The author is not responsible for any misuse.
