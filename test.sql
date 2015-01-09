SET FOREIGN_KEY_CHECKS = 0;
ALTER TABLE news_entry DROP title, CHANGE text text VARCHAR(200) DEFAULT NULL;
ALTER TABLE sf_guard_remember_key DROP INDEX UNIQ_1EEA28AA76ED395, ADD INDEX IDX_1EEA28AA76ED395 (user_id);
ALTER TABLE sf_guard_remember_key DROP PRIMARY KEY;
ALTER TABLE sf_guard_remember_key CHANGE user_id user_id INT NOT NULL;
ALTER TABLE sf_guard_remember_key ADD PRIMARY KEY (ip_address, user_id);
ALTER TABLE sf_guard_user CHANGE email email VARCHAR(256) NOT NULL;
ALTER TABLE user CHANGE account_id account_id INT NOT NULL;
DROP INDEX idx_8d93d6499b6b5fba ON user;
CREATE INDEX user_FI_1 ON user (account_id);
ALTER TABLE user ADD CONSTRAINT FK_8D93D6499B6B5FBA FOREIGN KEY (account_id) REFERENCES sf_guard_user (id);
SET FOREIGN_KEY_CHECKS = 1;

