ALTER TABLE table_name
  ADD new_column_name column_definition;

ALTER TABLE contacts
  ADD last_name varchar(40) NOT NULL
    AFTER contact_id;

ALTER TABLE table_name
  ADD new_column_name column_definition
    [ FIRST | AFTER column_name ],
  ADD new_column_name column_definition
    [ FIRST | AFTER column_name ],
  ...
;

ALTER TABLE contacts
  ADD last_name varchar(40) NOT NULL
    AFTER contact_id,
  ADD first_name varchar(35) NULL
    AFTER last_name;

ALTER TABLE table_name
  MODIFY column_name column_definition;

ALTER TABLE contacts
  MODIFY last_name varchar(50) NULL;

ALTER TABLE table_name
  MODIFY column_name column_definition
    [ FIRST | AFTER column_name ],
  MODIFY column_name column_definition
    [ FIRST | AFTER column_name ],
  ...
;
