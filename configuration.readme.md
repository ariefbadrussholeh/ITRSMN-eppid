# Slice Cache Permission (CodeIgniter 3)

Folder:
application/cache/

Harus writable oleh web server.

---

# 1. Windows (Git Bash + XAMPP Apache)

Run:

chmod -R 777 application/cache
chmod -R 777 application/logs

---

# 2. Linux (Apache)

Run:

sudo chown -R www-data:www-data application/cache
sudo chown -R www-data:www-data application/logs

sudo chmod -R 775 application/cache
sudo chmod -R 775 application/logs

---

# 3. cPanel (Shared Hosting)

File Manager → Right click folder:

application/cache → Permissions → 775  
application/logs → Permissions → 775

---

# Verify

Compiled file will appear:

application/cache/home.slice.php

---

# Production Recommended

application/cache → 775  
application/logs → 775

Local only boleh pakai 777.
