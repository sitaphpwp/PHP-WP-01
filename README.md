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

# Relationships

Users Table and User Profiles Table:

There is a one-to-one relationship between the Users table and the User Profiles table.
This means that each user (record in the Users table) corresponds to one user profile (record in the User Profiles table), and vice versa.
The user_id in the User Profiles table serves as a foreign key that references the user_id in the Users table. This establishes the relationship between a user and their profile.
Users Table and Todo Items Table:

There is a one-to-many relationship between the Users table and the Todo Items table.
This means that one user (record in the Users table) can have multiple todo items (records in the Todo Items table).
The user_id in the Todo Items table serves as a foreign key that references the user_id in the Users table. This establishes the relationship between a user and their todo items.

SDLC : Software Development Life Cycle

1. Water Fall
2. Agile (\*\*)

The sequential phases in Waterfall model are −

Requirement Gathering and analysis − All possible requirements of the system to be developed are captured in this phase and documented in a requirement specification document.

System Design − The requirement specifications from first phase are studied in this phase and the system design is prepared. This system design helps in specifying hardware and system requirements and helps in defining the overall system architecture.

Implementation − With inputs from the system design, the system is first developed in small programs called units, which are integrated in the next phase. Each unit is developed and tested for its functionality, which is referred to as Unit Testing.

Integration and Testing − All the units developed in the implementation phase are integrated into a system after testing of each unit. Post integration the entire system is tested for any faults and failures.

Deployment of system − Once the functional and non-functional testing is done; the product is deployed in the customer environment or released into the market.

Maintenance − There are some issues which come up in the client environment. To fix those issues, patches are released. Also to enhance the product some better versions are released. Maintenance is done to deliver these changes in the customer environment.


Agile : 

Planning
Requirements Analysis
Design
Coding
Unit Testing and
Acceptance Testing.