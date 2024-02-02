CREATE TABLE users (
    id INT AUTO_INCREMENT NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    level FLOAT,
    rol ENUM('user', 'admin') DEFAULT 'user',
    registration_date DATE DEFAULT (CURRENT_DATE),
    CONSTRAINT pk_users PRIMARY KEY (id),
    CONSTRAINT uq_email UNIQUE (email)
);

CREATE TABLE teams (
    id INT AUTO_INCREMENT NOT NULL,
    level   FLOAT NOT NULL,
    user1_id   INT,
    user2_id   INT,
    court INT,
    registration_date DATE DEFAULT (CURRENT_DATE),
    CONSTRAINT pk_matches PRIMARY KEY(id),
    CONSTRAINT fk_user1 FOREIGN KEY(user1_id) REFERENCES users(id),
    CONSTRAINT fk_user2 FOREIGN KEY(user2_id) REFERENCES users(id),
);

CREATE TABLE matches (
    id INT AUTO_INCREMENT NOT NULL,
    level   FLOAT NOT NULL,
    user1_id   INT,
    user2_id   INT,
    user3_id   INT,
    user4_id   INT,
    court INT,
    registration_date DATE DEFAULT (CURRENT_DATE),
    CONSTRAINT pk_matches PRIMARY KEY(id),
    CONSTRAINT fk_user1 FOREIGN KEY(user1_id) REFERENCES users(id),
    CONSTRAINT fk_user2 FOREIGN KEY(user2_id) REFERENCES users(id),
    CONSTRAINT fk_user3 FOREIGN KEY(user3_id) REFERENCES users(id),
    CONSTRAINT fk_user4 FOREIGN KEY(user4_id) REFERENCES users(id)
);

CREATE TABLE reservations (
    id INT AUTO_INCREMENT NOT NULL,
    user_reservation INT NOT NULL,
    level   FLOAT NOT NULL,
    user2_id   INT,
    user3_id   INT,
    user4_id   INT,
    court INT,
    reservation_date DATE,
    hour TIME,
    state ENUM('pending', 'confirmed', 'paid') DEFAULT 'pending', 
    CONSTRAINT pk_matches PRIMARY KEY(id),
    CONSTRAINT fk_user_reservation FOREIGN KEY(user_reservation) REFERENCES users(id),
    CONSTRAINT fk_user2 FOREIGN KEY(user2_id) REFERENCES users(id),
    CONSTRAINT fk_user3 FOREIGN KEY(user3_id) REFERENCES users(id),
    CONSTRAINT fk_user4 FOREIGN KEY(user4_id) REFERENCES users(id)
);

-- TODO
CREATE TABLE tournaments (
    id INT AUTO_INCREMENT NOT NULL,

);