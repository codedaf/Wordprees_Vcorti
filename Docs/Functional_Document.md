
# 📌 Functional Document - WordPress Vcorit

## 🎯 Project Objective
The purpose of this project is to provide a WordPress-based learning platform with restricted course access.

## 📌 Functional Requirements
1. **User Authentication**
   - Users must be logged in to access certain courses.
   - If a user is not logged in, they are redirected to the login page.

2. **Course Access Control**
   - Users who have purchased a course should be able to access the content.
   - If a user tries to access a restricted course without purchase, they are redirected.

3. **Integration with WooCommerce**
   - The system verifies whether a user has purchased a course before granting access.
   - WooCommerce order data is used to check the purchase history.

## ⚙️ Technical Implementation
- Uses WordPress `template_redirect` hook for access control.
- Retrieves WooCommerce orders using `wc_get_orders()`.
- Implements `wp_redirect()` for unauthorized access.

---
✍️ **Author:** Diego | Business Analyst & WordPress Developer  
