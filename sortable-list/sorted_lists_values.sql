INSERT into sorted_lists (list_id, entry_id, entry_rank)
VALUES (1, (SELECT entry_id FROM list_entries WHERE entry_name = 'Jeff Bezos'), 1);

INSERT into sorted_lists (list_id, entry_id, entry_rank)
VALUES (1, (SELECT entry_id FROM list_entries WHERE entry_name = 'Bill Gates'), 2);

INSERT into sorted_lists (list_id, entry_id, entry_rank)
VALUES (1, (SELECT entry_id FROM list_entries WHERE entry_name = 'Warren Buffett'), 3);

INSERT into sorted_lists (list_id, entry_id, entry_rank)
VALUES (1, (SELECT entry_id FROM list_entries WHERE entry_name = 'Bernard Arnault'), 4);

INSERT into sorted_lists (list_id, entry_id, entry_rank)
VALUES (1, (SELECT entry_id FROM list_entries WHERE entry_name = 'Carlos Slim Helu'), 5);

INSERT into sorted_lists (list_id, entry_id, entry_rank)
VALUES (1, (SELECT entry_id FROM list_entries WHERE entry_name = 'Amancio Ortega'), 6);

INSERT into sorted_lists (list_id, entry_id, entry_rank)
VALUES (1, (SELECT entry_id FROM list_entries WHERE entry_name = 'Larry Ellison'), 7);

INSERT into sorted_lists (list_id, entry_id, entry_rank)
VALUES (1, (SELECT entry_id FROM list_entries WHERE entry_name = 'Mark Zuckerberg'), 8);

INSERT into sorted_lists (list_id, entry_id, entry_rank)
VALUES (1, (SELECT entry_id FROM list_entries WHERE entry_name = 'Michael Bloomberg'), 9);

INSERT into sorted_lists (list_id, entry_id, entry_rank)
VALUES (1, (SELECT entry_id FROM list_entries WHERE entry_name = 'Larry Page'), 10);