CREATE TABLE sorted_lists (
    id int NOT NULL AUTO_INCREMENT,
    list_id int NOT NULL,
    entry_id int NOT NULL,
    entry_rank int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (list_id) REFERENCES lists(list_id),
    FOREIGN KEY (entry_id) REFERENCES entries(entry_id)
);