# 🚆 TransitCare AI

## Intelligent Public Transport Service Management Platform

![Status](https://img.shields.io/badge/status-in%20development-orange)
![Backend](https://img.shields.io/badge/backend-Laravel%2012-red)
![Database](https://img.shields.io/badge/database-MySQL-blue)
![AI](https://img.shields.io/badge/AI-ready-green)

---

## 📌 Overview

**TransitCare AI** is an intelligent public transport service management platform designed to improve communication between passengers and transport operators.

The platform enables passengers to report transportation-related issues, track service requests, communicate with support teams, and receive updates throughout the resolution process.

Unlike traditional complaint systems, TransitCare AI introduces intelligent automation, analytics, and AI-assisted ticket classification to help transport organizations improve operational efficiency and passenger satisfaction.

The system is designed to support different transportation providers such as:

* Rapid KL
* ART Sarawak
* Smart City Transportation Services
* University Transportation Systems

---

# 🎯 Problem Statement

Public transportation systems receive thousands of passenger complaints and service requests daily. Traditional reporting methods often suffer from:

* Slow response time
* Poor complaint tracking
* Manual ticket classification
* Lack of transparency
* Difficulty identifying recurring problems

TransitCare AI solves these problems by providing a centralized platform for issue reporting, management, tracking, and analytics.

---

# 🚀 Main Objectives

## Passenger Experience

Provide passengers with:

* Easy issue reporting
* Real-time ticket tracking
* Transparent communication
* Faster resolution updates

## Operational Improvement

Help transport operators:

* Manage service complaints efficiently
* Assign issues to responsible departments
* Monitor staff performance
* Analyze transportation problems

## Intelligent Decision Making

Provide:

* Ticket analytics
* Issue trends
* Problem location analysis
* AI-assisted categorization

---

# 👥 User Roles

## Passenger

Passengers can:

* Register an account
* Login/logout
* Submit transportation issues
* Upload images or evidence
* Track ticket progress
* Communicate with support staff
* View previous reports

---

## Support Staff

Support staff can:

* View assigned tickets
* Respond to passengers
* Update ticket status
* Manage resolutions
* Handle department-specific issues

---

## Administrator

Administrators can:

* Manage users
* Manage staff
* Manage departments
* Monitor system activity
* View analytics dashboard
* Generate reports

---

# 🏗️ System Architecture

```
                 TransitCare AI


                      |
        --------------------------------
        |              |               |
    Passenger       Staff          Admin


                      |
              Ticket Management


                      |
        --------------------------------
        |              |               |

       AI        Notification     Analytics
 Classification     System        Dashboard

```

---

# ⭐ Core Features

## 1. Authentication System

* User registration
* Login system
* Laravel Sanctum authentication
* Role-based access control

Roles:

```
Passenger
Staff
Admin
```

---

# 2. Smart Ticket Management

Passengers can create tickets:

Example:

```
Ticket ID:
TR-10001

Title:
LRT Delay

Category:
Service Delay

Priority:
High

Location:
KL Sentral

Status:
Open
```

---

Ticket workflow:

```
OPEN

 ↓

ASSIGNED

 ↓

IN_PROGRESS

 ↓

RESOLVED

 ↓

CLOSED
```

---

# 3. Ticket Communication

Users and staff can communicate through ticket replies.

Example:

```
Passenger:

The train has been delayed for 40 minutes.


Staff:

Our operation team is investigating the issue.
```

---

# 4. AI Ticket Classification (Future Module)

The system will analyze ticket descriptions and automatically identify:

Example:

Input:

```
The escalator at the station is broken.
```

AI Result:

```
Category:
Facility Issue

Priority:
High

Department:
Maintenance
```

---

# 5. Transport Location Management

The system supports transportation locations.

Example:

```
Station:

KL Sentral

Latitude:
3.1345

Longitude:
101.6869

Reported Issues:
25
```

---

# 6. Analytics Dashboard

Administrators can monitor:

* Total complaints
* Resolution rate
* Average response time
* Common issues
* Problematic locations
* Staff performance

Example:

```
Total Reports

12,430


Resolved

11,800


Average Resolution Time

2.3 Hours
```

---

# 7. Notification System

Users receive updates when:

* Ticket created
* Ticket assigned
* Status changed
* Reply received

Future support:

* Email notification
* Push notification
* SMS

---

# 8. Audit Logging

The system records important activities.

Example:

```
Admin Ahmad changed:

Ticket TR-10001

OPEN
↓
RESOLVED

Date:
18 July 2026
```

---

# 🗄️ Database Design

Main entities:

```
users

roles

permissions

departments

staff_profiles


tickets

ticket_categories

ticket_statuses

ticket_replies

ticket_attachments

ticket_history


stations

routes

transport_services


notifications

activity_logs

reports

ai_predictions
```

---

# 🛠️ Technology Stack

## Backend

* Laravel 12
* PHP 8.2+
* Laravel Sanctum
* REST API

## Database

* MySQL

## Frontend

Planned:

* Next.js
* React
* Tailwind CSS

## AI Service (Future)

* Python
* FastAPI
* Machine Learning
* NLP

## Deployment

Planned:

* Docker
* AWS / DigitalOcean
* MySQL Cloud Database

---

# 📂 Project Structure

```
TransitCare-AI

│
├── backend
│   └── Laravel API
│
├── frontend
│   └── Next.js Application
│
├── ai-service
│   └── Python AI Module
│
├── database
│   └── ERD Documentation
│
├── docs
│
└── README.md

```

---

# 🗺️ Development Roadmap

## Phase 1 - Foundation

Status: In Progress

* Laravel setup
* Database configuration
* Authentication API
* User management

---

## Phase 2 - Ticket System

* Ticket CRUD
* Ticket categories
* Ticket replies
* Status workflow

---

## Phase 3 - Staff Management

* Department management
* Ticket assignment
* Staff dashboard

---

## Phase 4 - Analytics Platform

* Dashboard
* Reports
* Charts
* Performance tracking

---

## Phase 5 - AI Integration

* Automatic ticket classification
* Priority prediction
* Sentiment analysis

---

## Phase 6 - Smart Transport Expansion

Support:

* Rapid KL
* ART Sarawak
* Smart City Transportation

---

# 🔐 Security Considerations

The system implements:

* Authentication protection
* API token security
* Role-based authorization
* Input validation
* Secure password hashing
* Activity monitoring

---

# 👨‍💻 Developer

**Mohammad Hamka Izzuddin Bin Mohamad Yahya**

Project:

**TransitCare AI - Intelligent Public Transport Service Management Platform**

---

# 📄 License

This project is developed for educational and portfolio purposes.
