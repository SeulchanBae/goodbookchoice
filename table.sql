CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    userID VARCHAR(50),
    password VARCHAR(256),
    name VARCHAR(50),
    email VARCHAR(100)
);

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ISBN VARCHAR(20),
    title VARCHAR(100),
    author VARCHAR(50),
    publisher VARCHAR(50),
    description TEXT
);
CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    userID VARCHAR(50),
    ISBN VARCHAR(20),
    title VARCHAR(100),
    review TEXT,
    rating INT,
    FOREIGN KEY (userID) REFERENCES users(userID),
    FOREIGN KEY (ISBN) REFERENCES books(ISBN)
);

CREATE TABLE userbooks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    userID VARCHAR(50),
    ISBN VARCHAR(20),
    title VARCHAR(100),
    readDate DATE,
    FOREIGN KEY (userID) REFERENCES users(userID),
    FOREIGN KEY (ISBN) REFERENCES books(ISBN)
);
