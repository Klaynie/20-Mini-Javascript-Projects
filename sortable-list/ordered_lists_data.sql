SELECT li.list_name,
       le.entry_name,
       sl.entry_rank
FROM
sorted_lists AS sl
INNER JOIN 
list_entries AS le
ON le.entry_id = sl.entry_id
INNER JOIN
lists AS li
ON li.list_id = sl.list_id