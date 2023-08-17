OnlineCampusful

Online Placement Management System
The Online Placement Management System is a web-based application developed using HTML, PHP, and SQL, hosted on a WAMP server. This system is designed to streamline and simplify the process of managing placements for educational institutions. It facilitates interaction between students, employers, and placement coordinators, making the placement process efficient and user-friendly.

Features
Student Profile Management: Students can create and manage their profiles, including personal information, academic records, skills, and achievements.

Job Listings: Employers can post job openings, providing detailed information about the positions, required qualifications, responsibilities, and benefits.

Application Submission: Students can search for job listings that match their skills and interests and submit applications electronically.

Placement Coordinators: Coordinators can oversee the placement process, manage job listings, review applications, and facilitate communication between students and employers.

Interview Scheduling: Employers and students can schedule interviews through the platform, with manual notifications and reminders.

Notifications: Implement a notification system to keep students, employers, and coordinators informed about important updates.

Feedback and Ratings: Employers can provide feedback and ratings for students after interviews, aiding in continuous improvement.

Analytics and Reports: Implement reporting functionalities to track placements, application trends, student progress, and more.

Technologies Used
Frontend: HTML, CSS
Backend: PHP
Database: MySQL
Server: WAMP (Windows, Apache, MySQL, PHP)


Installation and Setup
1)Download and install WAMP server from wampserver.com.

2)Clone or download the project files to the www directory of your WAMP installation (usually located in C:\wamp\www\).

3)Import the provided SQL database dump into your MySQL database using phpMyAdmin. Create a new database and import the SQL dump to set up the necessary tables.

4)Configure the database connection in your PHP files:
Open the PHP files that interact with the database (e.g., config.php, database.php).
Update the database hostname, username, password, and database name with your MySQL credentials.

5)Start WAMP server and open your web browser.
Access the application by navigating to http://localhost/your-project-folder.
Make sure you replace your-project-folder with the actual name of your project's directory.


Usage
Students, employers, and coordinators can navigate through the system using the provided interfaces.
Students can create profiles, search for jobs, submit applications, and view their application status.
Employers can post job listings, review applications, and schedule interviews.
Coordinators can manage job listings, oversee the placement process, and generate reports.
