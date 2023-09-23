# Requirement Specification (SRS)

## Database Design:

## Users Table:
user_id (Primary Key)
username (Unique, for authentication)
password (Hashed and salted password)
email (Unique, for user identification and communication)
full_name (User's full name)
created_at (Timestamp of user registration)


## User Profiles Table:
profile_id (Primary Key)
user_id (Foreign Key linked to Users table)
bio (Short user bio or description)
avatar (Link to user's profile picture)
created_at (Timestamp of profile creation)



## Todo Items Table:
todo_id (Primary Key)
user_id (Foreign Key linked to Users table)
title (Title of the todo item)
description (Detailed description of the todo item)
due_date (Due date for the todo item)
completed (Boolean to track whether the todo item is completed or not)
created_at (Timestamp of todo item creation)


# Software Requirement Specification (SRS):

1. Introduction

1.1 Purpose
The purpose of the "Todo" application is to provide a platform for users to manage their tasks and to-do lists.

1.2 Scope
The scope of the project includes user registration, authentication, user profiles, and todo management.

2. User Authentication


2.1 Registration
Users can register with a unique username and password.
User registration includes providing an email address.
Passwords are securely hashed and stored.
Duplicate usernames and email addresses are not allowed.
2.2 Login
Registered users can log in with their username and password.
Authentication is required to access user-specific features.



3. User Profile

3.1 Profile Creation
Registered users can create a profile with a bio and an optional profile picture (avatar).
User profiles are linked to their accounts.

4. Todo Management

4.1 Todo Creation
Authenticated users can create new todo items.
Todo items include a title, description, and optional due date.
Created todo items are associated with the user's account.
4.2 Todo Listing
Users can view a list of their todo items, including completed and pending ones.
Todo items can be sorted by due date or creation date.
4.3 Todo Editing and Deletion
Users can edit and update the details of their existing todo items.
They can also mark todo items as completed or delete them.


5. Security

5.1 Password Security
User passwords are securely hashed and salted.
Proper security measures are implemented to protect user data.


6. User Experience


6.1 User-Friendly Interface
The application should have an intuitive and user-friendly interface for easy task management.

7. Database
7.1 Database Design
The database design should follow the specified structure for users, user profiles, and todo items.

8. Deployment
8.1 Hosting
The application should be hosted on a secure web server.

9. Maintenance and Support

9.1 Updates and Maintenance
Ongoing maintenance and support should be provided to address issues and update the application as needed.
This SRS provides a comprehensive outline of the "Todo" application's features, database structure, and requirements. It serves as a guide for developing the application and ensuring that it meets the specified criteria.