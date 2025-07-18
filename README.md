# Secret Notes

## Overview
Secret Notes is a lightweight web mini‑app that lets you create a one‑time‑view message with a unique link—once opened, the link (and the message) is automatically destroyed.

## How It Works
1. **Create Message**  
   Enter your text and submit the form.  
2. **Unique Link**  
   The PHP backend generates a short URL using a random token and stores the message-server‑side (e.g., in a file or database).  
3. **One‑Time View**  
   When the link is opened, PHP fetches and displays the message on a dedicated page.  
4. **Automatic Deletion**  
   Immediately after display, PHP deletes the stored message and invalidates the token, making the link unusable.

## Technologies
- **PHP** as the primary backend language (handling token generation, storage and deletion)  
- **HTML5** for page structure  
- **CSS3** for styling and responsive layout  

---

> Your messages stay private: once read, they vanish forever!  
