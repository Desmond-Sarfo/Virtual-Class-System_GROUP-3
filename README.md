# Virtual-Class-System_GROUP-3
Backend Project Work
Report on School Virtual Class System (Group 3)
Introduction
The School Virtual Class System is a simple web-based platform developed using backend
technologies to assist students in accessing course information and submitting assignments online.
The system simulates a virtual classroom where students can log in, view available courses, and
upload their assignments for different subjects. This project demonstrates the basic implementation
of backend web development using PHP, HTML, CSS, and session management.
Technologies Used
HTML was used to create the structure of the web pages such as the login form, course table, and
assignment submission forms. CSS was used to style the interface, center the content on the page,
and improve the visual appearance of the system. PHP was used as the backend programming
language to handle login sessions, file uploads, and page redirection. XAMPP (Apache Server) was
used as the local server environment to run the PHP files through a web browser.
System Structure
The system consists of three main files. The first file, index.php, serves as the login page of the
virtual class system where students enter their index number and password to access the system.
PHP sessions are used to store login information and redirect the user to the homepage. The
second file, home.php, acts as the main dashboard of the virtual class. It displays a list of courses
in the Computer Technology program and allows students to upload assignment files for each
course. The third file, style.css, provides the styling for the interface, centers the login form, and
improves the layout of the pages.
System Functionality
The virtual class system allows students to log in using their index number and password, view
available courses, and upload assignments for different subjects. The system validates uploaded
files and only accepts PDF, DOC, and DOCX formats. Uploaded files are stored in a document
folder on the server. A logout option is also provided, which destroys the user session and redirects
the student back to the login page.
Conclusion
The School Virtual Class System demonstrates how backend web technologies can be used to
build a simple learning platform. By combining HTML, CSS, and PHP with session management
and file uploading, the system provides basic features of an online classroom environment and
helps students understand the fundamentals of web application development.
