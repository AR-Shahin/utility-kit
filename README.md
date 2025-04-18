# 🧰 Utility Kit – PHP Helper Functions Package

A lightweight collection of reusable PHP helper functions designed to simplify common tasks.  
Use it in any PHP project or integrate directly into Laravel. Clean, minimal, and extensible.

---

## 📦 Installation

Require the package via Composer:

```bash
composer require arshahin/utility-kit
```

---

## ⚙️ Usage

Import and use the helper methods statically:

```php
use ARShahin\UtilityKit\Helpers\StringHelper;

StringHelper::startsWith("Laravel", "Lar"); // true
```

You can also use the helper functions if you have configured them with Laravel's service provider and facade system.

---

## ✏️ Contributing

We welcome contributions! If you'd like to contribute:

1. Create a new branch.
2. Add your helper function.
3. ✅ Make sure to include:
   - Proper docblocks for your functions.
   - Return types for all methods.
   - Follow PSR-12 coding standards for formatting and structure.
   - PHPUnit test cases for your function.
4. Submit a pull request.

Example requirement:
```php
/**
 * Check if a string is palindrome.
 *
 * @param string $string
 * @return bool
 */
public static function isPalindrome(string $string): bool
```

---

## ✅ Testing

Run the test suite using PHPUnit:

```bash
vendor/bin/phpunit tests/
```
```bash
vendor/bin/phpunit --testdox
```
Ensure all test cases pass before submitting your PR.

---

## 🚀 Roadmap
- [x] String helper methods
- [ ] Array helper methods
- [ ] Date/time utilities
- [ ] More facades & Laravel integrations

---

## ✨ License

MIT License. Feel free to use, modify, and distribute.

