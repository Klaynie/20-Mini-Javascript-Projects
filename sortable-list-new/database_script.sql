CREATE table list_entries(
   entry_id INT NOT NULL AUTO_INCREMENT,
   entry_name VARCHAR(100) NOT NULL,
   PRIMARY KEY ( entry_id )
);

create table list_names(
   list_id INT NOT NULL AUTO_INCREMENT,
   list_name VARCHAR(100) NOT NULL,
   PRIMARY KEY ( list_id )
);

CREATE TABLE sorted_lists (
    list_id int NOT NULL,
    entry_id int NOT NULL,
    entry_rank int NOT NULL,
    PRIMARY KEY (list_id, entry_rank),
    FOREIGN KEY (list_id) REFERENCES list_names(list_id),
    FOREIGN KEY (entry_id) REFERENCES list_entries(entry_id)
);