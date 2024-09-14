# Rent Room

Rent Room System is a comprehensive platform designed to help users buy, sell, or rent properties with ease. It streamlines property management and provides tools for both buyers and sellers to connect seamlessly.

## Features

- **User Authentication**
  - Secure login and registration for users.
  - Session management to keep users logged in.

- **Property Listings**
  - Users can list properties for sale or rent.
  - Add property details like images, location, price, and description.
  - Edit or delete property listings.

- **Search Functionality**
  - Buyers and renters can search for properties by location, price range, or type.
  - Filters for refining search results.

- **Property Management**
  - Property owners can manage their listings in a user-friendly dashboard.
  - Ability to mark properties as sold or rented.

- **Messaging System**
  - Direct communication between buyers, renters, and sellers.
  - Real-time chat functionality for quick negotiations.



## Tech Stack

- **Frontend:** HTML, CSS, JavaScript, Bootstrap
- **Backend:** PHP
- **Database:** Postgresql
- **Authentication:** Session-based authentication

## Setup and Installation

To set up the project locally, follow these steps:

1. **Clone the repository:**
    ```bash
    git clone https://github.com/your-username/rent-room-system.git
    ```

2. **Navigate to the project directory:**
    ```bash
    cd rent-room
    ```

3. **Install required dependencies.**

4. **Configure your MySQL database:**
    - Create a new database.
    - Import the provided SQL file for the initial schema and data.

5. **Update database credentials in the configuration file:**
    ```java
    // Example: config/database.properties
    db.url=jdbc:mysql://localhost:3306/rent_room_db
    db.username=root
    db.password=yourpassword
    ```

6. **Compile and run the project on your local server.**

## Usage

1. Open the application in your web browser.
2. Register or log in to access the platform.
3. Property owners can list properties for sale or rent.
4. Buyers and renters can search and browse properties, then contact sellers or book properties.

## Screenshots

### Home Page

<img src="https://github.com/user-attachments/assets/homepage-screenshot" alt="Home Page" width="600"/>

### Property Listing Page

<img src="https://github.com/user-attachments/assets/listing-page-screenshot" alt="Property Listing Page" width="600"/>

### Search Page

<img src="https://github.com/user-attachments/assets/search-page-screenshot" alt="Search Page" width="600"/>

### Property Management Dashboard

<img src="https://github.com/user-attachments/assets/dashboard-screenshot" alt="Property Management Dashboard" width="600"/>

## Future Enhancements

- Advanced filters (e.g., property size, amenities).
- Integration with Google Maps for property locations.
- Email notifications for new listings or inquiries.
- Enhanced payment security and escrow system.

## Contributing

Contributions are welcome! Please fork the repository and create a pull request to suggest improvements or report bugs.


