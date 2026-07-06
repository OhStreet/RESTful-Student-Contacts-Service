# RESTful Student Contacts Service

RESTful Student Contacts Service is a PHP/MySQL web service project that retrieves student contact records and returns them as JSON. The project includes both the service provider code and small HTML/jQuery clients for testing the API responses and displaying student contact data in the browser.

## What It Does

This project demonstrates a basic service-provider and service-client workflow. The PHP service provider connects to a MySQL database, reads student contact records, and exposes endpoints for retrieving either all contacts or a single contact by ID.

The client pages use JavaScript and jQuery to send GET requests to the PHP endpoints, receive JSON responses, and display the returned contact information on the page.

## Tech Stack

* PHP
* MySQL
* MySQLi
* HTML
* JavaScript
* jQuery
* JSON

## Features

* PHP service provider for student contact records
* MySQL database connection through an OOP database-access class
* Endpoint for retrieving all contact records as JSON
* Endpoint for retrieving one contact by `contact_id`
* Basic error response when a required contact ID is missing
* Basic error response when a record is not found
* Procedural table display for testing database output
* OOP tester for checking database access methods
* HTML API tester pages for direct endpoint testing
* jQuery client pages that request and render JSON data

## What I Learned

This project helped me understand the difference between a page that directly displays database results and a service that returns data for another client to consume. Instead of only printing records from PHP, the API endpoints return JSON, and the client pages decide how to display that data.

The project also reinforced the basics of local web service development: database connection setup, GET parameters, JSON encoding, endpoint testing, and using browser-based clients to verify service output.

## Development Process / AI Use

This project was built as a course-driven PHP/MySQL web service exercise. I started by confirming database access procedurally, then moved the database logic into an OOP access class. After that, I created JSON endpoints for displaying all contacts and selecting a single contact by ID, followed by client pages that tested and consumed those endpoints.

AI use was not a central or documented part of this project. I would present it primarily as a learning project focused on PHP service-provider/client structure and AJAJ/AJAX-style client requests.

A limitation of this project is that it is a small read-only service. It retrieves records but does not implement create, update, or delete operations. It also uses localhost paths and a simple database connection setup, so it is best understood as a class project for learning service concepts rather than a production-ready API.
