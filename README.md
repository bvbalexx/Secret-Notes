# Secret Notes

## Overview
Secret Notes is a lightweight web mini‑app that lets you create a one‑time‑view message with a unique link—once opened, the link (and the message) is automatically destroyed.

## How It Works
1. **Create Message**  
   Enter your text and click “Generate Link.”  
2. **Unique Link**  
   The app generates a short URL using a random token.  
3. **One‑Time View**  
   When the link is opened, the message is displayed on a dedicated page.  
4. **Automatic Deletion**  
   Immediately after display, the token is invalidated in memory (or `sessionStorage`), making the link unusable.

## Technologies
- **HTML5** for page structure  
- **CSS3** for styling and responsive layout  
- **JavaScript** for:  
  - Generating the access token  
  - Temporarily storing the message and token in memory (`sessionStorage`)  
  - Invalidating the token on first view  

---

> Your messages stay private: once read, they vanish forever!  
