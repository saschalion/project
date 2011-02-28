CREATE TABLE city (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE education (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE jobeet_category (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE jobeet_job (id BIGINT AUTO_INCREMENT, date_preparation DATE, tab_id VARCHAR(30) NOT NULL UNIQUE, number_insurace VARCHAR(12), pension_sertificate VARCHAR(11), nature_work VARCHAR(30), type_work VARCHAR(30), category_id BIGINT NOT NULL, status_id BIGINT NOT NULL, sf_guard_user_id BIGINT, last_name VARCHAR(100), first_name VARCHAR(100), three_name VARCHAR(100) NOT NULL, type VARCHAR(255), data_birth DATE NOT NULL, phone VARCHAR(12) NOT NULL, education_id BIGINT, city_id BIGINT NOT NULL, adress VARCHAR(150), email VARCHAR(255) UNIQUE, logo VARCHAR(255), passport_number VARCHAR(11) NOT NULL UNIQUE, issuance_passports VARCHAR(50), date_issue_passport DATE, code_division VARCHAR(7), name_foreign_language VARCHAR(10), degree_knowledge_foreign_languages VARCHAR(10), name_educational_institution VARCHAR(150), diploma VARCHAR(20), year_graduation DATE, diploma_qualification VARCHAR(100), speciality_diploma VARCHAR(150), name_educational_institution_extra VARCHAR(150), diploma_extra VARCHAR(20), year_graduation_extra DATE, study_extra VARCHAR(30), diploma_qualification_extra VARCHAR(100), speciality_diploma_extra VARCHAR(150), main_profession VARCHAR(40), other_profession VARCHAR(40), total_length VARCHAR(2), continuous_service VARCHAR(2), last_job VARCHAR(100), termination_date DATE, marriage_status VARCHAR(40), children VARCHAR(40), date_birth_children DATE, group_accounting VARCHAR(255), category_accounting VARCHAR(255), composition VARCHAR(255), military_rank VARCHAR(255), military_discount_specialty VARCHAR(255), number_military_discount_specialty VARCHAR(255), fitness VARCHAR(255), name_district_military_office VARCHAR(255), number_special_accounting VARCHAR(255), kind_leave VARCHAR(80), getting_started DATE, end_work DATE, number_vacation_days VARCHAR(2), commencement DATE, end_leave DATE, base_release VARCHAR(60), more_information VARCHAR(255), token VARCHAR(255) NOT NULL UNIQUE, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX category_id_idx (category_id), INDEX education_id_idx (education_id), INDEX city_id_idx (city_id), INDEX status_id_idx (status_id), INDEX sf_guard_user_id_idx (sf_guard_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE status (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE sf_guard_forgot_password (id BIGINT AUTO_INCREMENT, user_id BIGINT NOT NULL, unique_key VARCHAR(255), expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group_permission (group_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(group_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_permission (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_remember_key (id BIGINT AUTO_INCREMENT, user_id BIGINT, remember_key VARCHAR(32), ip_address VARCHAR(50), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user (id BIGINT AUTO_INCREMENT, first_name VARCHAR(255), last_name VARCHAR(255), email_address VARCHAR(255) NOT NULL UNIQUE, username VARCHAR(128) NOT NULL UNIQUE, algorithm VARCHAR(128) DEFAULT 'sha1' NOT NULL, salt VARCHAR(128), password VARCHAR(128), is_active TINYINT(1) DEFAULT '1', is_super_admin TINYINT(1) DEFAULT '0', last_login DATETIME, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX is_active_idx_idx (is_active), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_group (user_id BIGINT, group_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, group_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_permission (user_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, permission_id)) ENGINE = INNODB;
ALTER TABLE jobeet_job ADD CONSTRAINT jobeet_job_status_id_status_id FOREIGN KEY (status_id) REFERENCES status(id) ON DELETE CASCADE;
ALTER TABLE jobeet_job ADD CONSTRAINT jobeet_job_sf_guard_user_id_sf_guard_user_id FOREIGN KEY (sf_guard_user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE jobeet_job ADD CONSTRAINT jobeet_job_education_id_education_id FOREIGN KEY (education_id) REFERENCES education(id) ON DELETE RESTRICT;
ALTER TABLE jobeet_job ADD CONSTRAINT jobeet_job_city_id_city_id FOREIGN KEY (city_id) REFERENCES city(id) ON DELETE CASCADE;
ALTER TABLE jobeet_job ADD CONSTRAINT jobeet_job_category_id_jobeet_category_id FOREIGN KEY (category_id) REFERENCES jobeet_category(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_forgot_password ADD CONSTRAINT sf_guard_forgot_password_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
