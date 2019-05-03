ALTER TABLE contacts
  CHANGE COLUMN contact_type ctype
    varchar(20) NOT NULL;
ALTER TABLE contacts
  RENAME TO people;