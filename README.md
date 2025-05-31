# PROJECT1 
🏥 Centralized Hospital Management System – Project Description
📌 Overview
The Centralized Hospital Management System is a web-based application designed to streamline hospital operations by digitizing and centralizing patient, doctor, prescription, and appointment data. It features secure login access for multiple user roles — Admin, Doctor, and Patient — each with customized dashboards and profile management options.

🧩 Core Features
✅ Authentication System
Secure login page (login.html) with role selection.

Session-based access control.

Logout functionality.

🧑‍💼 Role-Based Dashboards
Each user sees a different dashboard based on their role:

Admin: Manage patients, doctors, appointments, and prescriptions.

Doctor: View patients, manage prescriptions, and check appointments.

Patient: View their own appointments and prescriptions.

📝 Patient Management
Add and view patients with medical details.

Central database for storing and retrieving patient records.

🩺 Doctor Management
Admin can add/view doctors.

Each doctor has their own profile and prescription access.

💊 Prescription Management
Doctors and admins can add prescriptions for patients.

Patients can view their prescribed medications and treatment notes.

📅 Appointment Scheduling
Admins can schedule appointments between patients and doctors.

All users can view appointment lists relevant to them.

🙍‍♂️ Profile Pages by Role
Each user can view and edit their profile:

Admin: Full access to own details.

Doctor: Shows specialization and patient interactions.

Patient: Shows contact info and links to appointments/prescriptions.

🛠️ Editable Profiles
Users can update:

Full name

Email

Contact number

Password (optional)

🛢️ Database Design
Key tables include:

users: Stores all login and profile details for admin, doctors, and patients.

patients: Contains personal and medical history of patients.

appointments: Schedules with doctor-patient references.

prescriptions: Medicine and treatment records per patient.

doctors (optional separate table): For expanded doctor-specific data.

💻 Technologies Used
Frontend: HTML, basic CSS

Backend: PHP

Database: MySQL

Session Handling: PHP sessions for secure role-based access

🚀 Future Enhancements (optional ideas)
Bootstrap UI for responsive design

Email/SMS notifications

Analytics (e.g., patient growth, doctor load)

Role-based access with permissions and audit logs

Profile pictures and document uploads
