# 🧪 Test Cases - WordPress Vcorit

## 📌 Test 1: Unauthenticated User Access
**Scenario:**  
A user tries to access a restricted course page without logging in.

**Steps:**
1. Open a browser in incognito mode.
2. Navigate to `https://valeriacorti.pagix.online/cpt_cursos/autoregulate/`.
3. Check if the user is redirected to `https://valeriacorti.pagix.online/mi-cuenta/`.

**Expected Result:**  
User should be redirected to the login page.

---

## 📌 Test 2: User Without Purchase Tries to Access a Course
**Scenario:**  
A logged-in user without a valid purchase tries to access a restricted course.

**Steps:**
1. Log in as a test user (who has NOT purchased the course).
2. Navigate to `https://valeriacorti.pagix.online/cpt_cursos/mision2025/`.
3. Check if the user is redirected to `https://valeriacorti.pagix.online/mi-cuenta/`.

**Expected Result:**  
User should be redirected to the account page.

---

## 📌 Test 3: User With Valid Purchase Accesses a Course
**Scenario:**  
A logged-in user with a valid course purchase tries to access the content.

**Steps:**
1. Log in as a user who has purchased the course.
2. Navigate to `https://valeriacorti.pagix.online/cpt_cursos/mision2025/`.
3. Check if the course page loads successfully.

**Expected Result:**  
User should have access to the course page without redirection.

---
✍️ **Author:** Diego | Business Analyst & WordPress Developer  

