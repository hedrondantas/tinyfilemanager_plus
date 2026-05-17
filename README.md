# Tiny File Manager Plus

[![GitHub License](https://img.shields.io/github/license/prasathmani/tinyfilemanager.svg?style=flat-square)](https://github.com/prasathmani/tinyfilemanager/blob/master/LICENSE)

> A fork of [TinyFileManager](https://github.com/prasathmani/tinyfilemanager) with visual, functional, and security improvements.
> A lightweight web-based PHP file manager, easy to deploy, with multi-user support.

<sub>**Caution!** _Avoid using this script as a public file manager. Remove it from the server after completing any tasks._</sub>

---

## Improvements over the original

This fork adds the following features and fixes to the original TinyFileManager:

### New features

- **Modular structure** — codebase split into multiple files (`includes/config.php`, `classes.php`, `functions.php`, `lang.php`, `templates.php`, `actions.php`, `views.php`) for easier maintenance.
- **Audio player** — inline playback with support for MP3, OGG, WAV, M4A, AAC, FLAC, OPUS, WEBA, WEBM, MID, MIDI, AIF, AIFF, and WMA.
- **Theater mode** — for the video player, with a toggle button below the player.
- **PDF viewer** — inline display using the browser's native PDF renderer, with a download fallback.
- **"Type" column** — shows the file category in the main listing (Image, Video, Audio, Document, Code, Text, File, Folder, Archive).
- **Type filter bar** — a row of buttons above the table to quickly filter files by category.
- **Pagination** — DataTables with a default page size of 250 items, preventing browser freezes on large directories. Options: 50 / 100 / 250 / 500 / All.
- **Pagination at the top** — pagination controls positioned above the table for quick access.
- **Link obfuscation** — direct file links replaced with short session-scoped tokens (`?ft=TOKEN`), hiding real server paths. Files are downloaded and displayed with their original names.
- **Back-to-top button** — floating button in the bottom-right corner, appears on scroll.
- **Footer** — bottom spacing for better visual layout.

### Bug fixes

- **Double sort arrows** — removed duplicate CSS that caused two sort arrows in the table header when using DataTables 1.13+ with Bootstrap 5.
- **Video streaming** — fixed PHP session locking that prevented the video player from loading when using file tokens. Added `session_write_close()` before sending file content.
- **`finfo_close()` deprecated** — replaced with the OOP `new finfo()` API, compatible with PHP 8.5+.

---

## Requirements

- PHP 7.4 or higher (PHP 8.x recommended).
- Recommended extensions: `fileinfo`, `iconv`, `zip`, `tar`, `mbstring`.

## How to use

1. Clone or download this repository.
2. Copy the folder to your web server.
3. Open `tinyfilemanager.php` in your browser.
4. Configure users and passwords in `includes/config.php`.

Default credentials: **admin/admin@123** and **user/12345**.

:warning: **Change the default credentials before using in production.** Passwords are stored using `password_hash()`. Generate a new hash [here](https://tinyfilemanager.github.io/docs/pwd.html).

To enable or disable authentication, set `$use_auth` in `includes/config.php`.

---

## General features (inherited from the original)

- Create, delete, edit, view, download, copy, and move files and folders.
- Ajax uploads with drag-and-drop, URL import, and extension filtering.
- Compress and extract files in `zip` and `tar` formats.
- Code editor powered by Cloud9 IDE — syntax highlighting for 150+ languages and 35+ themes.
- Document viewer via Google/Microsoft online services (PDF, DOC, XLS, PPT — up to 25 MB).
- IP access control (whitelist/blacklist).
- Per-user root folder mapping.
- 35+ language support via `translation.json`.
- Docker-compatible.

---

## Deploy with Docker

See the [Docker deploy guide](https://github.com/prasathmani/tinyfilemanager/wiki/Deploy-by-Docker) from the original project.

---

## License & credits

- [GNU GPL License](https://github.com/prasathmani/tinyfilemanager/blob/master/LICENSE)
- Original project: [TinyFileManager](https://github.com/prasathmani/tinyfilemanager) by CCP Programmers
- CDNs used: jQuery, Bootstrap 5, Bootstrap Icons, Font Awesome, Highlight.js, Ace.js, Dropzone.js, DataTables 1.13
