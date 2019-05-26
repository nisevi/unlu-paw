USE pawtp4;

CREATE TABLE appointments (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name TEXT NOT NULL,
    email TEXT NOT NULL,
    phone TEXT NOT NULL,
    birth_date DATE NOT NULL,
    image MEDIUMBLOB,
    age SMALLINT,
    shoes_size SMALLINT,
    height SMALLINT,
    hair_color TEXT,
    date DATETIME NOT NULL
);
