# Dockerized Personal Portfolio

A modern, responsive, and professional personal portfolio website built as a university-level class project. The application highlights skills in full-stack development, specifically tailored for a developer working with the MERN stack, Next.js, Python, and n8n.

## Features
- **Responsive Design**: Adapts beautifully to mobile, tablet, and desktop screens.
- **Modern UI**: Uses custom CSS variables, flexbox, and grid layouts with subtle animations and glassmorphism effects.
- **Dynamic Contact Form**: AJAX-powered form submission that stores messages securely in a MySQL database via PHP PDO.
- **Fully Dockerized**: Easy to run and test locally without installing a local LAMP/XAMPP stack.

## Tech Stack
- **Frontend**: HTML5, Vanilla CSS3, Vanilla JavaScript.
- **Backend**: PHP 8.2.
- **Database**: MySQL 8.0.
- **Infrastructure**: Docker & Docker Compose.

## Prerequisites
To run this project, you must have the following installed on your machine:
- [Docker Desktop](https://www.docker.com/products/docker-desktop/) (or Docker Engine)
- [Docker Compose](https://docs.docker.com/compose/install/)

## How to Start/Run the Project

1. **Clone the repository**:
   ```bash
   git clone https://github.com/haile19-b/portiifolio-calss--project.git
   cd portiifolio-calss--project
   ```

2. **Build and start the Docker containers**:
   ```bash
   docker-compose up -d --build
   ```

3. **Access the Application**:
   Open your web browser and navigate to:
   [http://localhost:8000](http://localhost:8000)

4. **Stop the Application**:
   To stop the containers, run:
   ```bash
   docker-compose down
   ```

## Folder Structure
- `/src`: Contains the web application code (`index.php`, `contact.php`, CSS, JS, and images).
- `/db`: Contains the `init.sql` script which automatically sets up the database schema when the database container starts.
- `Dockerfile`: Defines the custom PHP-Apache image and installs required extensions.
- `docker-compose.yml`: Defines the multi-container environment.

## Database Verification
If you want to view the submitted contact form messages, you can connect to the MySQL container:
```bash
docker exec -it portfolio-db-1 mysql -u root -psecret portfolio
```
Then run:
```sql
SELECT * FROM messages;
```
